<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos\CabecalhoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos\InfoSubModel;
use CanisLupus\ApiClients\Omie\v1\OmieApiClient;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class Handler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Servicos
 * @name    Handler
 * @version 1.0.0
 */
class Handler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/servicos/servico/';
    const ACTION_ALTERAR = 'AlterarCadastroServico';
    const ACTION_ASSOCIAR_COD_INTEGRACAO = 'AssociarCodIntServico';
    const ACTION_CONSULTAR = 'ConsultarCadastroServico';
    const ACTION_EXCLUIR = 'ExcluirCadastroServico';
    const ACTION_INCLUIR = 'IncluirCadastroServico';
    const ACTION_LISTAR = 'ListarCadastroServico';
    const ACTION_UPSERT = 'UpsertCadastroServico';


    /* ACTIONS */

    /**
     * @param array|null|ListarServicosRequest $request
     *
     * @return ListarServicosResponse
     * @throws OmieApiException
     */
    public function listar($request = null): ListarServicosResponse
    {
        $param = [
            'nPagina'       => 1,
            'nRegPorPagina' => OmieApiClient::$padraoRegistrosPorPagina,
        ];

        if ($request) {
            if (is_array($request)) {
                $param = array_merge($param, $request);

            } else if (is_object($request)) {
                if ($request->pagina !== null) {
                    $param['nPagina'] = $request->pagina;
                }
                if ($request->registrosPorPagina !== null) {
                    $param['nRegPorPagina'] = $request->registrosPorPagina;
                }
                if ($request->ordenarPor !== null) {
                    $param['cOrdenarPor'] = $request->ordenarPor;
                }
                if ($request->ordemDecrescente !== null) {
                    $param['cOrdemDecrescente'] = $request->ordemDecrescente;
                }
                if ($request->dataInclusaoInicial !== null) {
                    $param['dInclusaoInicial'] = $request->dataInclusaoInicial;
                }
                if ($request->dataInclusaoFinal !== null) {
                    $param['dInclusaoFinal'] = $request->dataInclusaoFinal;
                }
                if ($request->dataAlteracaoInicial !== null) {
                    $param['dAlteracaoInicial'] = $request->dataAlteracaoInicial;
                }
                if ($request->dataAlteracaoFinal !== null) {
                    $param['dAlteracaoFinal'] = $request->dataAlteracaoFinal;
                }
                if ($request->horaInclusaoInicial !== null) {
                    $param['hInclusaoInicial'] = $request->horaInclusaoInicial;
                }
                if ($request->horaInclusaoFinal !== null) {
                    $param['hInclusaoFinal'] = $request->horaInclusaoFinal;
                }
                if ($request->horaAlteracaoInicial !== null) {
                    $param['hAlteracaoInicial'] = $request->horaAlteracaoInicial;
                }
                if ($request->horaAlteracaoFinal !== null) {
                    $param['hAlteracaoFinal'] = $request->horaAlteracaoFinal;
                }
                if ($request->descricao !== null) {
                    $param['cDescricao'] = $request->descricao;
                }
                if ($request->codigoServico !== null) {
                    $param['cCodigo'] = $request->codigoServico;
                }
                if ($request->inativo !== null) {
                    $param['inativo'] = $request->inativo;
                }
                if ($request->exibirProdutos !== null) {
                    $param['cExibirProdutos'] = $request->exibirProdutos;
                }
            }
        }

        $result = $this->request(self::ACTION_LISTAR, $param);

        $response = new ListarServicosResponse();
        $response->pagina = $result['nPagina'];
        $response->totalDePaginas = $result['nTotPaginas'];
        $response->registros = $result['nRegistros'];
        $response->totalDeRegistros = $result['nTotRegistros'];

        foreach ($result['cadastros'] as $cadastro) {
            $response->servicos[] = $this->hidrateEntity($cadastro);
        }

        return $response;
    }

    /**
     * @param array|null|ListarServicosRequest $request
     *
     * @return ServicoOmieModel[]
     * @throws OmieApiException
     */
    public function listarTodos($request = null): array
    {
        $list = [];
        $page = 0;
        do {
            $page++;

            if ($request) {
                if (is_array($request)) {
                    $request['nPagina'] = $page;

                } else if (is_object($request)) {
                    $request->pagina = $page;
                }
            } else {
                $request = ['nPagina' => $page];
            }

            $result = $this->listar($request);
            $list = array_merge($list, $result->servicos);
            $totalPages = $result->totalDePaginas;

        } while ($page < $totalPages);

        return $list;
    }


    /* SUPPORT METHODS */

    /**
     * @param string     $action
     * @param array|null $param
     *
     * @return array
     * @throws OmieApiException
     */
    private function request(string $action, array $param = null): array
    {
        return $this->call(self::ENDPOINT, $action, $param);
    }

    /**
     * @param array $data
     *
     * @return ServicoOmieModel
     */
    private function hidrateEntity(array $data): ServicoOmieModel
    {
        $object = new ServicoOmieModel();
        $object->idOmie = $data['intListar']['nCodServ'] ?? null;

        // Cabeçalho
        if ($data['cabecalho']) {
            $cabecalho = new CabecalhoSubModel();

            $cabecalho->descricao = $data['cabecalho']['cDescricao'] ?? null;
            $cabecalho->codigo = $data['cabecalho']['cCodigo'] ?? null;
            $cabecalho->codigoTributacao = $data['cabecalho']['cIdTrib'] ?? null;
            $cabecalho->codigoServicoMunicipal = $data['cabecalho']['cCodServMun'] ?? null;
            $cabecalho->codigoLc116 = $data['cabecalho']['cCodLC116'] ?? null;
            $cabecalho->codigoNbs = $data['cabecalho']['nIdNBS'] ?? null;
            $cabecalho->valorUnitario = $data['cabecalho']['nPrecoUnit'] ?? null;
            $cabecalho->codigoCategoria = $data['cabecalho']['cCodCateg'] ?? null;

            $object->cabecalho = $cabecalho;
        }

        // Informações de Cadastro
        if (isset($data['info'])) {
            $infoCadastro = new InfoSubModel();
            $infoCadastro->dataInclusao = $data['info']['dInc'] ?? null;
            $infoCadastro->horaInclusao = $data['info']['hInc'] ?? null;
            $infoCadastro->usuarioInclusao = $data['info']['uInc'] ?? null;
            $infoCadastro->dataAlteracao = $data['info']['dAlt'] ?? null;
            $infoCadastro->horaAlteracao = $data['info']['hAlt'] ?? null;
            $infoCadastro->usuarioAlteracao = $data['info']['uAlt'] ?? null;
            $infoCadastro->importadoPelaApi = $data['info']['cImpAPI'] ?? null;
            $infoCadastro->inativo = $data['info']['inativo'] ?? null;

            $object->infoCadastro = $infoCadastro;
        }

        return $object;
    }

    /**
     * @param ServicoOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(ServicoOmieModel $entity): array
    {
        $entityArrayData = [];

        // Cabeçalho
        if ($entity->cabecalho) {
            $cabecalho = [];

            if ($entity->cabecalho->descricao) {
                $cabecalho['cDescricao'] = $entity->cabecalho->descricao;
            }
            if ($entity->cabecalho->codigo) {
                $cabecalho['cCodigo'] = $entity->cabecalho->codigo;
            }
            if ($entity->cabecalho->codigoTributacao) {
                $cabecalho['cIdTrib'] = $entity->cabecalho->codigoTributacao;
            }
            if ($entity->cabecalho->codigoServicoMunicipal) {
                $cabecalho['cCodServMun'] = $entity->cabecalho->codigoServicoMunicipal;
            }
            if ($entity->cabecalho->codigoLc116) {
                $cabecalho['cCodLC116'] = $entity->cabecalho->codigoLc116;
            }
            if ($entity->cabecalho->codigoNbs) {
                $cabecalho['nIdNBS'] = $entity->cabecalho->codigoNbs;
            }
            if ($entity->cabecalho->valorUnitario) {
                $cabecalho['nPrecoUnit'] = $entity->cabecalho->valorUnitario;
            }
            if ($entity->cabecalho->codigoCategoria) {
                $cabecalho['cCodCateg'] = $entity->cabecalho->codigoCategoria;
            }

            $entityArrayData['cabecalho'] = $cabecalho;
        }

        // Informações de Cadastro
        if ($entity->infoCadastro) {
            $infoCadastro = [];

            if ($entity->infoCadastro->dataInclusao) {
                $infoCadastro['dInc'] = $entity->infoCadastro->dataInclusao;
            }
            if ($entity->infoCadastro->horaInclusao) {
                $infoCadastro['hInc'] = $entity->infoCadastro->horaInclusao;
            }
            if ($entity->infoCadastro->usuarioInclusao) {
                $infoCadastro['uInc'] = $entity->infoCadastro->usuarioInclusao;
            }
            if ($entity->infoCadastro->dataAlteracao) {
                $infoCadastro['dAlt'] = $entity->infoCadastro->dataAlteracao;
            }
            if ($entity->infoCadastro->horaAlteracao) {
                $infoCadastro['hAlt'] = $entity->infoCadastro->horaAlteracao;
            }
            if ($entity->infoCadastro->usuarioAlteracao) {
                $infoCadastro['uAlt'] = $entity->infoCadastro->usuarioAlteracao;
            }
            if ($entity->infoCadastro->importadoPelaApi) {
                $infoCadastro['cImpAPI'] = $entity->infoCadastro->importadoPelaApi;
            }
            if ($entity->infoCadastro->inativo) {
                $infoCadastro['inativo'] = $entity->infoCadastro->inativo;
            }

            $entityArrayData['info'] = $infoCadastro;
        }

        return $entityArrayData;
    }
}


