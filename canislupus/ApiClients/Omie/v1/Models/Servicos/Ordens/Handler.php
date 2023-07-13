<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\CabecalhoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DepartamentoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DespesaReembolsavelSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DespesasReembolsaveisSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\EmailSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ImpostosSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\InformacoesAdicionaisSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\InformacoesCadastroSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\MensagemSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ObservacoesSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ParcelaSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ProdutosUtilizadosSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ProdutoUtilizadoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\RpsNfseSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ServicoPrestadoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ViaUnicaSubModel;
use CanisLupus\ApiClients\Omie\v1\OmieApiClient;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class Handler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    Handler
 * @version 1.0.0
 */
class Handler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/servicos/os/';
    const ACTION_ALTERAR = 'AlterarOS';
    const ACTION_CONSULTAR = 'ConsultarOS';
    const ACTION_EXCLUIR = 'ExcluirOS';
    const ACTION_INCLUIR = 'IncluirOS';
    const ACTION_LISTAR = 'ListarOS';
    const ACTION_STATUS = 'StatusOS';
    const ACTION_TROCAR_ETAPA = 'TrocarEtapaOS';


    /* ACTIONS */

    /**
     * @param OrdemOmieModel $requestModel
     *
     * @return OrdemStatusOmieModel
     * @throws OmieApiException
     */
    public function alterar(OrdemOmieModel $requestModel): OrdemStatusOmieModel
    {
        $result = $this->request(self::ACTION_ALTERAR, $this->mountArrayFromEntity($requestModel));

        return $this->hidrateStatus($result);
    }

    /**
     * @param mixed       $key
     * @param string|null $type
     *
     * @return OrdemOmieModel|null
     * @throws OmieApiException
     */
    public function consultar(mixed $key, ?string $type = null): ?OrdemOmieModel
    {
        $param = null;

        switch ($type) {
            default:
            case 'idOmie':
                $param['nCodOS'] = $key;
                break;

            case 'idIntegracao':
                $param['cCodIntOS'] = $key;
                break;

            case 'numeroOs':
                $param['cNumOS'] = $key;
                break;
        }

        if (!$param) {
            return null;
        }

        $result = $this->request(self::ACTION_CONSULTAR, $param);

        return $this->hidrateEntity($result);
    }

    /**
     * @param mixed       $key
     * @param string|null $type
     *
     * @return OrdemStatusOmieModel|null
     * @throws OmieApiException
     */
    public function excluir(mixed $key, ?string $type = null): ?OrdemStatusOmieModel
    {
        $param = null;

        switch ($type) {
            default:
            case 'idOmie':
                $param['nCodOS'] = $key;
                break;

            case 'idIntegracao':
                $param['cCodIntOS'] = $key;
                break;

            case 'numeroOs':
                $param['cNumOS'] = $key;
                break;
        }

        if (!$param) {
            return null;
        }

        $result = $this->request(self::ACTION_EXCLUIR, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param OrdemOmieModel $requestModel
     *
     * @return OrdemStatusOmieModel
     * @throws OmieApiException
     */
    public function incluir(OrdemOmieModel $requestModel): OrdemStatusOmieModel
    {
        $result = $this->request(self::ACTION_INCLUIR, $this->mountArrayFromEntity($requestModel));

        return $this->hidrateStatus($result);
    }

    /**
     * @param array|ListarOrdensRequest|null $request
     *
     * @return ListarOrdensResponse|null
     * @throws OmieApiException
     */
    public function listar(array|ListarOrdensRequest $request = null): ?ListarOrdensResponse
    {
        $param = [
            'pagina'               => 1,
            'registros_por_pagina' => OmieApiClient::$padraoRegistrosPorPagina,
        ];

        if ($request) {
            if (is_array($request)) {
                $param = array_merge($param, $request);

            } else if (is_object($request)) {
                if ($request->pagina !== null) {
                    $param['pagina'] = $request->pagina;
                }
                if ($request->registrosPorPagina !== null) {
                    $param['registros_por_pagina'] = $request->registrosPorPagina;
                }
                if ($request->apenasImportadoApi !== null) {
                    $param['apenas_importado_api'] = $request->apenasImportadoApi;
                }
                if ($request->ordenarPor !== null) {
                    $param['ordenar_por'] = $request->ordenarPor;
                }
                if ($request->ordemDecrescente !== null) {
                    $param['ordem_decrescente'] = $request->ordemDecrescente;
                }
                if ($request->filtrarPorDataDe !== null) {
                    $param['filtrar_por_data_de'] = $request->filtrarPorDataDe;
                }
                if ($request->filtrarPorDataAte !== null) {
                    $param['filtrar_por_data_ate'] = $request->filtrarPorDataAte;
                }
                if ($request->filtrarApenasInclusao !== null) {
                    $param['filtrar_apenas_inclusao'] = $request->filtrarApenasInclusao;
                }
                if ($request->filtrarApenasAlteracao !== null) {
                    $param['filtrar_apenas_alteracao'] = $request->filtrarApenasAlteracao;
                }
                if ($request->filtrarPorStatus !== null) {
                    $param['filtrar_por_status'] = $request->filtrarPorStatus;
                }
                if ($request->filtrarPorEtapa !== null) {
                    $param['filtrar_por_etapa'] = $request->filtrarPorEtapa;
                }
                if ($request->filtrarPorCliente !== null) {
                    $param['filtrar_por_cliente'] = $request->filtrarPorCliente;
                }
                if ($request->filtrarPorDataPrevisaoDe !== null) {
                    $param['filtrar_por_data_previsao_de'] = $request->filtrarPorDataPrevisaoDe;
                }
                if ($request->filtrarPorDataPrevisaoAte !== null) {
                    $param['filtrar_por_data_previsao_ate'] = $request->filtrarPorDataPrevisaoAte;
                }
                if ($request->filtrarPorDataFaturamentoDe !== null) {
                    $param['filtrar_por_data_faturamento_de'] = $request->filtrarPorDataFaturamentoDe;
                }
                if ($request->filtrarPorDataFaturamentoAte !== null) {
                    $param['filtrar_por_data_faturamento_ate'] = $request->filtrarPorDataFaturamentoAte;
                }
                if ($request->filtrarPorDataCancelamentoDe !== null) {
                    $param['filtrar_por_data_cancelamento_de'] = $request->filtrarPorDataCancelamentoDe;
                }
                if ($request->filtrarPorDataCancelamentoAte !== null) {
                    $param['filtrar_por_data_cancelamento_ate'] = $request->filtrarPorDataCancelamentoAte;
                }
                if ($request->exibirDespesas !== null) {
                    $param['cExibirDespesas'] = $request->exibirDespesas;
                }
                if ($request->exibirProdutos !== null) {
                    $param['cExibirProdutos'] = $request->exibirProdutos;
                }
                if ($request->tipoFat !== null) {
                    $param['cTipoFat'] = $request->tipoFat;
                }

                if (count($request->filtrarPorCodigo) > 0) {
                    $param['filtrar_por_codigo'] = [];

                    foreach ($request->filtrarPorCodigo as $filtroCodigo) {
                        $param['filtrar_por_codigo'][] = [
                            'nCodOS'    => $filtroCodigo['idOmie'] ?? null,
                            'cCodIntOS' => $filtroCodigo['idIntegracao'] ?? null,
                        ];
                    }
                }
            }
        }

        try {
            $result = $this->request(self::ACTION_LISTAR, $param);
        } catch (OmieApiException $exception) {
            if ($exception->getOmieErrorCode() == OmieApiException::ERROR_LISTAR_VAZIO) {
                return null;
            }

            throw $exception;
        }

        $response = new ListarOrdensResponse();
        $response->pagina = $result['pagina'];
        $response->totalDePaginas = $result['total_de_paginas'];
        $response->registros = $result['registros'];
        $response->totalDeRegistros = $result['total_de_registros'];

        foreach ($result['osCadastro'] as $cadastro) {
            $response->ordensDeServico[] = $this->hidrateEntity($cadastro);
        }

        return $response;
    }

    /**
     * @param array|ListarOrdensRequest|null $request
     *
     * @return OrdemOmieModel[]
     * @throws OmieApiException
     */
    public function listarTodos(array|ListarOrdensRequest $request = null): array
    {
        $list = [];
        $page = 0;
        do {
            $page++;

            if ($request) {
                if (is_array($request)) {
                    $request['pagina'] = $page;

                } else if (is_object($request)) {
                    $request->pagina = $page;
                }
            } else {
                $request = ['pagina' => $page];
            }

            $result = $this->listar($request);
            if (!$result) {
                break;
            }
            $list = array_merge($list, $result->ordensDeServico);
            $totalPages = $result->totalDePaginas;

        } while ($page < $totalPages);

        return $list;
    }

    /**
     * @param array|VerificarStatusOrdemRequest $request
     *
     * @return VerificarStatusOrdemResponse
     * @throws OmieApiException
     */
    public function verificarStatus(VerificarStatusOrdemRequest|array $request): VerificarStatusOrdemResponse
    {
        $param = [];

        if (is_array($request)) {
            $param = array_merge($param, $request);

        } else if (is_object($request)) {
            if ($request->idOmie !== null) {
                $param['nCodOS'] = $request->idOmie;
            }
            if ($request->idIntegracao !== null) {
                $param['cCodIntOS'] = $request->idIntegracao;
            }
            if ($request->exibirPdfDemonstrativo !== null) {
                $param['lPdfDemo'] = $request->exibirPdfDemonstrativo;
            }
            if ($request->exibirPdfDestinatario !== null) {
                $param['lPdfDest'] = $request->exibirPdfDestinatario;
            }
            if ($request->exibirRps !== null) {
                $param['lRps'] = $request->exibirRps;
            }
            if ($request->exibirRecibo !== null) {
                $param['lPdfRecibo'] = $request->exibirRecibo;
            }
        }

        $result = $this->request(self::ACTION_STATUS, $param);

        $response = new VerificarStatusOrdemResponse();
        $response->idOmie = $result['nCodOS'] ?? null;
        $response->idIntegracao = $result['cCodIntOS'] ?? null;
        $response->numeroOs = $result['cNumOS'] ?? null;
        $response->numeroContrato = $result['cNumContrato'] ?? null;
        $response->numeroRecibo = $result['cNumRecibo'] ?? null;
        $response->numeroPedido = $result['cNumPedido'] ?? null;
        $response->etapa = $result['cEtapa'] ?? null;
        $response->cancelada = $result['cCancelada'] ?? null;
        $response->faturada = $result['cFaturada'] ?? null;
        $response->ambiente = $result['cAmbiente'] ?? null;
        $response->dataInclusao = $result['dDtInc'] ?? null;
        $response->horaInclusao = $result['cHrInc'] ?? null;
        $response->dataAlteracao = $result['dDtAlt'] ?? null;
        $response->horaAlteracao = $result['cHrAlt'] ?? null;
        $response->dataFaturamento = $result['dDtFat'] ?? null;
        $response->horaFaturamento = $result['cHrFat'] ?? null;
        $response->dataCancelamento = $result['dDtCanc'] ?? null;
        $response->horaCancelamento = $result['cHrCanc'] ?? null;
        $response->valorTotal = $result['nValorTot'] ?? null;
        $response->urlPdfRecibo = $result['cUrlPdfRecibo'] ?? null;

        if (isset($result['ListaRpsNfse'])) {
            $listaRpsNfse = [];
            foreach ($result['ListaRpsNfse'] as $rpsNfe) {
                $rpsNfeModel = new RpsNfseSubModel();

                $rpsNfeModel->numeroLote = $rpsNfe['nLote'] ?? null;
                $rpsNfeModel->statusLote = $rpsNfe['cStatusLote'] ?? null;
                $rpsNfeModel->protocolo = $rpsNfe['cProtocolo'] ?? null;
                $rpsNfeModel->numeroRps = $rpsNfe['nRps'] ?? null;
                $rpsNfeModel->statusRps = $rpsNfe['cStatusRps'] ?? null;
                $rpsNfeModel->numeroNfse = $rpsNfe['nNfse'] ?? null;
                $rpsNfeModel->codigoVerificacao = $rpsNfe['cCodVerif'] ?? null;
                $rpsNfeModel->cnpjPrestador = $rpsNfe['cCNPJ'] ?? null;
                $rpsNfeModel->inscricaoMunicipal = $rpsNfe['cInscrMunicipal'] ?? null;
                $rpsNfeModel->xmlDistribuicao = $rpsNfe['xml_distr'] ?? null;
                $rpsNfeModel->urlDanfe = $rpsNfe['danfe'] ?? null;
                $rpsNfeModel->urlNfse = $rpsNfe['cUrlNfse'] ?? null;
                $rpsNfeModel->urlPdfDemonstrativo = $rpsNfe['cUrlPdfDemo'] ?? null;
                $rpsNfeModel->urlPdfDestinatario = $rpsNfe['cUrlPdfDest'] ?? null;
                $rpsNfeModel->urlRps = $rpsNfe['cUrlRps'] ?? null;

                if (isset($result['mensagens'])) {
                    $mensagens = [];
                    foreach ($result['mensagens'] as $mensagem) {
                        $mensagemModel = new MensagemSubModel();

                        $mensagemModel->codigo = $mensagem['cCodigo'] ?? null;
                        $mensagemModel->descricao = $mensagem['cDescricao'] ?? null;
                        $mensagemModel->correcao = $mensagem['cCorrecao'] ?? null;

                        $mensagens[] = $mensagemModel;
                    }
                    $rpsNfeModel->mensagens = $mensagens;
                }

                $listaRpsNfse[] = $rpsNfeModel;
            }
            $response->listaRpsNfse[] = $listaRpsNfse;
        }

        return $response;
    }

    /**
     * @param array|TrocarEtapaOrdemRequest $request
     *
     * @return TrocarEtapaOrdemResponse
     * @throws OmieApiException
     */
    public function trocarEtapa(TrocarEtapaOrdemRequest|array $request): TrocarEtapaOrdemResponse
    {
        $param = [];

        if (is_array($request)) {
            $param = array_merge($param, $request);

        } else if (is_object($request)) {
            if ($request->idOmie !== null) {
                $param['nCodOS'] = $request->idOmie;
            }
            if ($request->idIntegracao !== null) {
                $param['cCodIntOS'] = $request->idIntegracao;
            }
            if ($request->numeroOs !== null) {
                $param['cNumOS'] = $request->numeroOs;
            }
            if ($request->etapa !== null) {
                $param['cEtapa'] = $request->etapa;
            }
        }

        $result = $this->request(self::ACTION_TROCAR_ETAPA, $param);

        $response = new TrocarEtapaOrdemResponse();
        $response->idOmie = $result['nCodOS'] ?? null;
        $response->idIntegracao = $result['cCodIntOS'] ?? null;
        $response->numeroOs = $result['cNumOS'] ?? null;
        $response->codigoStatus = $result['codigo_status'] ?? null;
        $response->descricaoStatus = $result['descricao_status'] ?? null;

        return $response;
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
     * @return OrdemOmieModel
     */
    private function hidrateEntity(array $data): OrdemOmieModel
    {
        $object = new OrdemOmieModel();

        // Cabeçalho
        if ($data['Cabecalho']) {
            $cabecalho = new CabecalhoSubModel();
            $cabecalho->idOmie = $data['Cabecalho']['nCodOS'] ?? null;
            $cabecalho->idIntegracao = $data['Cabecalho']['cCodIntOS'] ?? null;
            $cabecalho->numeroOs = $data['Cabecalho']['cNumOS'] ?? null;
            $cabecalho->idOmieCliente = $data['Cabecalho']['nCodCli'] ?? null;
            $cabecalho->idIntegracaoCliente = $data['Cabecalho']['cCodIntCli'] ?? null;
            $cabecalho->dataPrevisao = $data['Cabecalho']['dDtPrevisao'] ?? null;
            $cabecalho->etapa = $data['Cabecalho']['cEtapa'] ?? null;
            $cabecalho->idOmieVendedor = $data['Cabecalho']['nCodVend'] ?? null;
            $cabecalho->quantidadeParcelas = $data['Cabecalho']['nQtdeParc'] ?? null;
            $cabecalho->codigoParcela = $data['Cabecalho']['cCodParc'] ?? null;
            $cabecalho->valorTotal = $data['Cabecalho']['nValorTotal'] ?? null;
            $cabecalho->valorTotalImpostosRetidos = $data['Cabecalho']['nValorTotalImpRet'] ?? null;
            $cabecalho->idOmieContrato = $data['Cabecalho']['nCodCtr'] ?? null;
            $object->cabecalho = $cabecalho;
        }

        // Informações Adicionais
        if (isset($data['InformacoesAdicionais'])) {
            $informacoesAdicionais = new InformacoesAdicionaisSubModel();
            $informacoesAdicionais->codigoCategoria = $data['InformacoesAdicionais']['cCodCateg'] ?? null;
            $informacoesAdicionais->idOmieContaCorrente = $data['InformacoesAdicionais']['nCodCC'] ?? null;
            $informacoesAdicionais->numeroPedido = $data['InformacoesAdicionais']['cNumPedido'] ?? null;
            $informacoesAdicionais->numeroContrato = $data['InformacoesAdicionais']['cNumContrato'] ?? null;
            $informacoesAdicionais->contato = $data['InformacoesAdicionais']['cContato'] ?? null;
            $informacoesAdicionais->dadosAdicionaisNF = $data['InformacoesAdicionais']['cDadosAdicNF'] ?? null;
            $informacoesAdicionais->codigoObra = $data['InformacoesAdicionais']['cCodObra'] ?? null;
            $informacoesAdicionais->codigoArt = $data['InformacoesAdicionais']['cCodART'] ?? null;
            $informacoesAdicionais->idOmieProjeto = $data['InformacoesAdicionais']['nCodProj'] ?? null;
            $informacoesAdicionais->cidadeDePrestacaoDoServico = $data['InformacoesAdicionais']['cCidPrestServ'] ?? null;
            $informacoesAdicionais->dataRps = $data['InformacoesAdicionais']['dDataRps'] ?? null;
            $informacoesAdicionais->numeroRecibo = $data['InformacoesAdicionais']['cNumRecibo'] ?? null;
            $object->informacoesAdicionais = $informacoesAdicionais;
        }

        // Emails
        if (isset($data['email'])) {
            $email = new EmailSubModel();
            $email->enviarRecibo = $data['email']['cEnvRecibo'] ?? null;
            $email->enviarLink = $data['email']['cEnvLink'] ?? null;
            $email->enviarBoleto = $data['email']['cEnvBoleto'] ?? null;
            $email->enviarPix = $data['email']['cEnvPix'] ?? null;
            $email->enviarPara = $data['email']['cEnviarPara'] ?? null;
            $email->enviarViaUnica = $data['email']['cEnvViaUnica'] ?? null;
            $object->email = $email;
        }

        // Departamentos
        $departamentos = [];
        if (isset($data['Departamentos'])) {
            foreach ($data['Departamentos'] as $d) {
                $departamento = new DepartamentoSubModel();
                $departamento->codigoDepartamento = $d['cCodDepto'] ?? null;
                $departamento->percentual = $d['nPerc'] ?? null;
                $departamento->valor = $d['nValor'] ?? null;
                $departamento->valorFixo = $d['nValorFixo'] ?? null;

                $departamentos[] = $departamento;
            }
        }
        $object->departamentos = $departamentos;

        // Serviços Prestados
        $servicosPrestados = [];
        if (isset($data['ServicosPrestados'])) {
            foreach ($data['ServicosPrestados'] as $servico) {
                $servicoPrestado = new ServicoPrestadoSubModel();
                $servicoPrestado->idOmieServico = $servico['nCodServico'] ?? null;
                $servicoPrestado->idIntegracaoServico = $servico['cCodIntServico'] ?? null;
                $servicoPrestado->tipoTributacao = $servico['cTribServ'] ?? null;
                $servicoPrestado->codigoServicoMunicipalOuCNAE = $servico['cCodServMun'] ?? null;
                $servicoPrestado->codigoServicoLC116 = $servico['cCodServLC116'] ?? null;
                $servicoPrestado->quantidade = $servico['nQtde'] ?? null;
                $servicoPrestado->valorUnitario = $servico['nValUnit'] ?? null;
                $servicoPrestado->tipoDesconto = $servico['cTpDesconto'] ?? null;
                $servicoPrestado->valorDesconto = $servico['nValorDesconto'] ?? null;
                $servicoPrestado->aliquotaDesconto = $servico['nAliqDesconto'] ?? null;
                $servicoPrestado->valorOutrasRetencoes = $servico['nValorOutrasRetencoes'] ?? null;
                $servicoPrestado->valorAcrescimos = $servico['nValorAcrescimos'] ?? null;
                $servicoPrestado->descricaoServico = $servico['cDescServ'] ?? null;
                $servicoPrestado->retemIss = $servico['cRetemISS'] ?? null;
                $servicoPrestado->dadosAdicionaisServico = $servico['cDadosAdicItem'] ?? null;
                $servicoPrestado->codigoNbs = $servico['cNbs'] ?? null;
                $servicoPrestado->naoGerarFinanceiro = $servico['cNaoGerarFinanceiro'] ?? null;
                $servicoPrestado->codigoCategoria = $servico['cCodCategItem'] ?? null;
                $servicoPrestado->sequenciaServico = $servico['nSeqItem'] ?? null;
                $servicoPrestado->idOmieServicoDaOrdemDeServico = $servico['nIdItem'] ?? null;
                $servicoPrestado->acaoAlteracao = $servico['cAcaoItem'] ?? null;

                if (isset($servico['impostos'])) {
                    $impostos = new ImpostosSubModel();
                    $impostos->fixarIss = $servico['impostos']['cFixarISS'] ?? null;
                    $impostos->aliquotaIss = $servico['impostos']['nAliqISS'] ?? null;
                    $impostos->baseIss = $servico['impostos']['nBaseISS'] ?? null;
                    $impostos->totalDeducao = $servico['impostos']['nTotDeducao'] ?? null;
                    $impostos->valorIss = $servico['impostos']['nValorISS'] ?? null;
                    $impostos->utilizaValorImposto = $servico['impostos']['cUtilizaValorImposto'] ?? null;
                    $impostos->fixarIrrf = $servico['impostos']['cFixarIRRF'] ?? null;
                    $impostos->aliquotaIrrf = $servico['impostos']['nAliqIRRF'] ?? null;
                    $impostos->valorIrrf = $servico['impostos']['nValorIRRF'] ?? null;
                    $impostos->retemIrrf = $servico['impostos']['cRetemIRRF'] ?? null;
                    $impostos->fixarPIS = $servico['impostos']['cFixarPIS'] ?? null;
                    $impostos->aliquotaPis = $servico['impostos']['nAliqPIS'] ?? null;
                    $impostos->valorPis = $servico['impostos']['nValorPIS'] ?? null;
                    $impostos->retemPis = $servico['impostos']['cRetemPIS'] ?? null;
                    $impostos->fixarCofins = $servico['impostos']['cFixarCOFINS'] ?? null;
                    $impostos->aliquotaCofins = $servico['impostos']['nAliqCOFINS'] ?? null;
                    $impostos->valorCofins = $servico['impostos']['nValorCOFINS'] ?? null;
                    $impostos->retemCofins = $servico['impostos']['cRetemCOFINS'] ?? null;
                    $impostos->fixarCsll = $servico['impostos']['cFixarCSLL'] ?? null;
                    $impostos->aliquotaCsll = $servico['impostos']['nAliqCSLL'] ?? null;
                    $impostos->valorCsll = $servico['impostos']['nValorCSLL'] ?? null;
                    $impostos->retemCsll = $servico['impostos']['cRetemCSLL'] ?? null;
                    $impostos->fixarInss = $servico['impostos']['cFixarINSS'] ?? null;
                    $impostos->aliquotaInss = $servico['impostos']['nAliqINSS'] ?? null;
                    $impostos->valorInss = $servico['impostos']['nValorINSS'] ?? null;
                    $impostos->retemInss = $servico['impostos']['cRetemINSS'] ?? null;
                    $impostos->aliquotaReducaoBaseInss = $servico['impostos']['nAliqRedBaseINSS'] ?? null;
                    $impostos->aliquotaReducaoBaseCofins = $servico['impostos']['nAliqRedBaseCOFINS'] ?? null;
                    $impostos->aliquotaReducaoBasePis = $servico['impostos']['nAliqRedBasePIS'] ?? null;
                    $impostos->deduzIss = $servico['impostos']['lDeduzISS'] ?? null;

                    $servicoPrestado->impostos = $impostos;
                }

                if (isset($servico['viaUnica'])) {
                    $viaUnica = new ViaUnicaSubModel();
                    $viaUnica->modeloNF = $servico['viaUnica']['cModeloNF'] ?? null;
                    $viaUnica->cfop = $servico['viaUnica']['cCFOP'] ?? null;
                    $viaUnica->classificacaoServico = $servico['viaUnica']['cClassifServico'] ?? null;
                    $viaUnica->tipoReceita = $servico['viaUnica']['cTipoReceita'] ?? null;
                    $viaUnica->tipoUtilizacao = $servico['viaUnica']['cTipoUtilizacao'] ?? null;

                    $servicoPrestado->viaUnica = $viaUnica;
                }

                $servicosPrestados[] = $servicoPrestado;
            }
        }
        $object->servicosPrestados = $servicosPrestados;

        // Parcelas
        $parcelas = [];
        if (isset($data['Parcelas'])) {
            foreach ($data['Parcelas'] as $p) {
                $parcela = new ParcelaSubModel();
                $parcela->parcela = $p['nParcela'] ?? null;
                $parcela->dataVencimento = $p['dDtVenc'] ?? null;
                $parcela->valor = $p['nValor'] ?? null;
                $parcela->percentual = $p['nPercentual'] ?? null;
                $parcela->dias = $p['nDias'] ?? null;
                $parcela->tipoDocumento = $p['tipo_documento'] ?? null;
                $parcela->meioPagamento = $p['meio_pagamento'] ?? null;
                $parcela->numeroSequencialUnico = $p['nsu'] ?? null;
                $parcela->naoGerarBoleto = $p['nao_gerar_boleto'] ?? null;
                $parcela->parcelaAdiantamento = $p['parcela_adiantamento'] ?? null;
                $parcela->categoriaAdiantamento = $p['categoria_adiantamento'] ?? null;
                $parcela->idOmieContaCorrenteAdiantamento = $p['conta_corrente_adiantamento'] ?? null;

                $parcelas[] = $parcela;
            }
        }
        $object->parcelas = $parcelas;

        // Observações
        if (isset($data['Observacoes'])) {
            $observacoes = new ObservacoesSubModel();
            $observacoes->observacao = $data['Observacoes']['cObsOS'] ?? null;
            $object->observacoes = $observacoes;
        }

        // Informações de Cadastro
        if (isset($data['InfoCadastro'])) {
            $infoCadastro = new InformacoesCadastroSubModel();
            $infoCadastro->cancelada = $data['InfoCadastro']['cCancelada'] ?? null;
            $infoCadastro->faturada = $data['InfoCadastro']['cFaturada'] ?? null;
            $infoCadastro->ambiente = $data['InfoCadastro']['cAmbiente'] ?? null;
            $infoCadastro->dataInclusao = $data['InfoCadastro']['dDtInc'] ?? null;
            $infoCadastro->horaInclusao = $data['InfoCadastro']['cHrInc'] ?? null;
            $infoCadastro->dataAlteracao = $data['InfoCadastro']['dDtAlt'] ?? null;
            $infoCadastro->horaAlteracao = $data['InfoCadastro']['cHrAlt'] ?? null;
            $infoCadastro->dataFaturamento = $data['InfoCadastro']['dDtFat'] ?? null;
            $infoCadastro->horaFaturamento = $data['InfoCadastro']['cHrFat'] ?? null;
            $infoCadastro->dataCancelamento = $data['InfoCadastro']['dDtCanc'] ?? null;
            $infoCadastro->horaCancelamento = $data['InfoCadastro']['cHrCanc'] ?? null;
            $infoCadastro->origem = $data['InfoCadastro']['cOrigem'] ?? null;
            $object->infoCadastro = $infoCadastro;
        }

        // Despesas Reembolsáveis
        if (isset($data['despesasReembolsaveis'])) {
            $despesasReembolsaveis = new DespesasReembolsaveisSubModel();
            $despesasReembolsaveis->codigoCategoriaReembolso = $data['despesasReembolsaveis']['cCodCategReemb'] ?? null;

            if (isset($data['despesasReembolsaveis']['despesaReembolsavel'])) {
                foreach ($data['despesasReembolsaveis']['despesaReembolsavel'] as $despesa) {
                    $despesaReembolsavel = new DespesaReembolsavelSubModel();
                    $despesaReembolsavel->idOmie = $despesa['nCodReemb'] ?? null;
                    $despesaReembolsavel->acaoReembolso = $despesa['cAcaoReemb'] ?? null;
                    $despesaReembolsavel->descricaoReembolso = $despesa['cDescReemb'] ?? null;
                    $despesaReembolsavel->valorReembolso = $despesa['nValorReemb'] ?? null;
                    $despesaReembolsavel->dataReembolso = $despesa['dDataReemb'] ?? null;

                    $despesasReembolsaveis->despesasReembolsaveis[] = $despesaReembolsavel;
                }
            }
            $object->despesasReembolsaveis = $despesasReembolsaveis;
        }

        // Produtos Utilizados
        if (isset($data['produtosUtilizados'])) {
            $produtosUtilizados = new ProdutosUtilizadosSubModel();
            $produtosUtilizados->acaoUtilizacao = $data['produtosUtilizados']['cAcaoProdUtilizados'] ?? null;
            $produtosUtilizados->codigoCategoriaRemessa = $data['produtosUtilizados']['cCodCategRem'] ?? null;

            if (isset($data['despesasReembolsaveis']['produtoUtilizado'])) {
                foreach ($data['despesasReembolsaveis']['produtoUtilizado'] as $produto) {
                    $produtoUtilizado = new ProdutoUtilizadoSubModel();
                    $produtoUtilizado->idOmie = $produto['nIdItemPU'] ?? null;
                    $produtoUtilizado->acao = $produto['cAcaoItemPU'] ?? null;
                    $produtoUtilizado->idOmieProdutoUtilizado = $produto['nCodProdutoPU'] ?? null;
                    $produtoUtilizado->quantidade = $produto['nQtdePU'] ?? null;
                    $produtoUtilizado->idOmieLocalDeEstoque = $produto['codigo_local_estoque'] ?? null;

                    $produtosUtilizados->produtosUtilizados[] = $produtoUtilizado;
                }
            }
            $object->produtosUtilizados = $produtosUtilizados;
        }

        return $object;
    }

    /**
     * @param OrdemOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(OrdemOmieModel $entity): array
    {
        $entityArrayData = [];

        // Cabeçalho
        if ($entity->cabecalho) {
            $cabecalho = [];

            if ($entity->cabecalho->idOmie) {
                $cabecalho['nCodOS'] = $entity->cabecalho->idOmie;
            }
            if ($entity->cabecalho->idIntegracao) {
                $cabecalho['cCodIntOS'] = $entity->cabecalho->idIntegracao;
            }
            if ($entity->cabecalho->numeroOs) {
                $cabecalho['cNumOS'] = $entity->cabecalho->numeroOs;
            }
            if ($entity->cabecalho->idOmieCliente) {
                $cabecalho['nCodCli'] = $entity->cabecalho->idOmieCliente;
            }
            if ($entity->cabecalho->idIntegracaoCliente) {
                $cabecalho['cCodIntCli'] = $entity->cabecalho->idIntegracaoCliente;
            }
            if ($entity->cabecalho->dataPrevisao) {
                $cabecalho['dDtPrevisao'] = $entity->cabecalho->dataPrevisao;
            }
            if ($entity->cabecalho->etapa) {
                $cabecalho['cEtapa'] = $entity->cabecalho->etapa;
            }
            if ($entity->cabecalho->idOmieVendedor) {
                $cabecalho['nCodVend'] = $entity->cabecalho->idOmieVendedor;
            }
            if ($entity->cabecalho->quantidadeParcelas) {
                $cabecalho['nQtdeParc'] = $entity->cabecalho->quantidadeParcelas;
            }
            if ($entity->cabecalho->codigoParcela) {
                $cabecalho['cCodParc'] = $entity->cabecalho->codigoParcela;
            }
            if ($entity->cabecalho->valorTotal) {
                $cabecalho['nValorTotal'] = $entity->cabecalho->valorTotal;
            }
            if ($entity->cabecalho->valorTotalImpostosRetidos) {
                $cabecalho['nValorTotalImpRet'] = $entity->cabecalho->valorTotalImpostosRetidos;
            }
            if ($entity->cabecalho->idOmieContrato) {
                $cabecalho['nCodCtr'] = $entity->cabecalho->idOmieContrato;
            }

            $entityArrayData['Cabecalho'] = $cabecalho;
        }

        // Informações Adicionais
        if ($entity->informacoesAdicionais) {
            $informacoesAdicionais = [];

            if ($entity->informacoesAdicionais->codigoCategoria) {
                $informacoesAdicionais['cCodCateg'] = $entity->informacoesAdicionais->codigoCategoria;
            }
            if ($entity->informacoesAdicionais->idOmieContaCorrente) {
                $informacoesAdicionais['nCodCC'] = $entity->informacoesAdicionais->idOmieContaCorrente;
            }
            if ($entity->informacoesAdicionais->numeroPedido) {
                $informacoesAdicionais['cNumPedido'] = $entity->informacoesAdicionais->numeroPedido;
            }
            if ($entity->informacoesAdicionais->numeroContrato) {
                $informacoesAdicionais['cNumContrato'] = $entity->informacoesAdicionais->numeroContrato;
            }
            if ($entity->informacoesAdicionais->contato) {
                $informacoesAdicionais['cContato'] = $entity->informacoesAdicionais->contato;
            }
            if ($entity->informacoesAdicionais->dadosAdicionaisNF) {
                $informacoesAdicionais['cDadosAdicNF'] = $entity->informacoesAdicionais->dadosAdicionaisNF;
            }
            if ($entity->informacoesAdicionais->codigoObra) {
                $informacoesAdicionais['cCodObra'] = $entity->informacoesAdicionais->codigoObra;
            }
            if ($entity->informacoesAdicionais->codigoArt) {
                $informacoesAdicionais['cCodART'] = $entity->informacoesAdicionais->codigoArt;
            }
            if ($entity->informacoesAdicionais->idOmieProjeto) {
                $informacoesAdicionais['nCodProj'] = $entity->informacoesAdicionais->idOmieProjeto;
            }
            if ($entity->informacoesAdicionais->cidadeDePrestacaoDoServico) {
                $informacoesAdicionais['cCidPrestServ'] = $entity->informacoesAdicionais->cidadeDePrestacaoDoServico;
            }
            if ($entity->informacoesAdicionais->dataRps) {
                $informacoesAdicionais['dDataRps'] = $entity->informacoesAdicionais->dataRps;
            }
            if ($entity->informacoesAdicionais->numeroRecibo) {
                $informacoesAdicionais['cNumRecibo'] = $entity->informacoesAdicionais->numeroRecibo;
            }

            $entityArrayData['InformacoesAdicionais'] = $informacoesAdicionais;
        }

        // Emails
        if ($entity->email) {
            $email = [];

            if ($entity->email->enviarRecibo) {
                $email['cEnvRecibo'] = $entity->email->enviarRecibo;
            }
            if ($entity->email->enviarLink) {
                $email['cEnvLink'] = $entity->email->enviarLink;
            }
            if ($entity->email->enviarBoleto) {
                $email['cEnvBoleto'] = $entity->email->enviarBoleto;
            }
            if ($entity->email->enviarPix) {
                $email['cEnvPix'] = $entity->email->enviarPix;
            }
            if ($entity->email->enviarPara) {
                $email['cEnviarPara'] = $entity->email->enviarPara;
            }
            if ($entity->email->enviarViaUnica) {
                $email['cEnvViaUnica'] = $entity->email->enviarViaUnica;
            }

            $entityArrayData['email'] = $email;
        }

        // Departamentos
        $departamentos = [];
        foreach ($entity->departamentos as $d) {
            $departamento = [];

            if ($d->codigoDepartamento) {
                $departamento['cCodDepto'] = $d->codigoDepartamento;
            }
            if ($d->percentual) {
                $departamento['nPerc'] = $d->percentual;
            }
            if ($d->valor) {
                $departamento['nValor'] = $d->valor;
            }
            if ($d->valorFixo) {
                $departamento['nValorFixo'] = $d->valorFixo;
            }

            $departamentos[] = $departamento;
        }
        $entityArrayData['Departamentos'] = $departamentos;

        // Serviços Prestados
        $servicosPrestados = [];
        foreach ($entity->servicosPrestados as $servico) {
            $servicoPrestado = [];

            if ($servico->idOmieServico) {
                $servicoPrestado['nCodServico'] = $servico->idOmieServico;
            }
            if ($servico->idIntegracaoServico) {
                $servicoPrestado['cCodIntServico'] = $servico->idIntegracaoServico;
            }
            if ($servico->tipoTributacao) {
                $servicoPrestado['cTribServ'] = $servico->tipoTributacao;
            }
            if ($servico->codigoServicoMunicipalOuCNAE) {
                $servicoPrestado['cCodServMun'] = $servico->codigoServicoMunicipalOuCNAE;
            }
            if ($servico->codigoServicoLC116) {
                $servicoPrestado['cCodServLC116'] = $servico->codigoServicoLC116;
            }
            if ($servico->quantidade) {
                $servicoPrestado['nQtde'] = $servico->quantidade;
            }
            if ($servico->valorUnitario) {
                $servicoPrestado['nValUnit'] = $servico->valorUnitario;
            }
            if ($servico->tipoDesconto) {
                $servicoPrestado['cTpDesconto'] = $servico->tipoDesconto;
            }
            if ($servico->valorDesconto) {
                $servicoPrestado['nValorDesconto'] = $servico->valorDesconto;
            }
            if ($servico->aliquotaDesconto) {
                $servicoPrestado['nAliqDesconto'] = $servico->aliquotaDesconto;
            }
            if ($servico->valorOutrasRetencoes) {
                $servicoPrestado['nValorOutrasRetencoes'] = $servico->valorOutrasRetencoes;
            }
            if ($servico->valorAcrescimos) {
                $servicoPrestado['nValorAcrescimos'] = $servico->valorAcrescimos;
            }
            if ($servico->descricaoServico) {
                $servicoPrestado['cDescServ'] = $servico->descricaoServico;
            }
            if ($servico->retemIss) {
                $servicoPrestado['cRetemISS'] = $servico->retemIss;
            }
            if ($servico->dadosAdicionaisServico) {
                $servicoPrestado['cDadosAdicItem'] = $servico->dadosAdicionaisServico;
            }
            if ($servico->codigoNbs) {
                $servicoPrestado['cNbs'] = $servico->codigoNbs;
            }
            if ($servico->naoGerarFinanceiro) {
                $servicoPrestado['cNaoGerarFinanceiro'] = $servico->naoGerarFinanceiro;
            }
            if ($servico->codigoCategoria) {
                $servicoPrestado['cCodCategItem'] = $servico->codigoCategoria;
            }
            if ($servico->sequenciaServico) {
                $servicoPrestado['nSeqItem'] = $servico->sequenciaServico;
            }
            if ($servico->idOmieServicoDaOrdemDeServico) {
                $servicoPrestado['nIdItem'] = $servico->idOmieServicoDaOrdemDeServico;
            }
            if ($servico->acaoAlteracao) {
                $servicoPrestado['cAcaoItem'] = $servico->acaoAlteracao;
            }

            if ($servico->impostos) {
                $impostos = [];

                if ($servico->impostos->fixarIss) {
                    $impostos['cFixarISS'] = $servico->impostos->fixarIss;
                }
                if ($servico->impostos->aliquotaIss) {
                    $impostos['nAliqISS'] = $servico->impostos->aliquotaIss;
                }
                if ($servico->impostos->baseIss) {
                    $impostos['nBaseISS'] = $servico->impostos->baseIss;
                }
                if ($servico->impostos->totalDeducao) {
                    $impostos['nTotDeducao'] = $servico->impostos->totalDeducao;
                }
                if ($servico->impostos->valorIss) {
                    $impostos['nValorISS'] = $servico->impostos->valorIss;
                }
                if ($servico->impostos->utilizaValorImposto) {
                    $impostos['cUtilizaValorImposto'] = $servico->impostos->utilizaValorImposto;
                }
                if ($servico->impostos->fixarIrrf) {
                    $impostos['cFixarIRRF'] = $servico->impostos->fixarIrrf;
                }
                if ($servico->impostos->aliquotaIrrf) {
                    $impostos['nAliqIRRF'] = $servico->impostos->aliquotaIrrf;
                }
                if ($servico->impostos->valorIrrf) {
                    $impostos['nValorIRRF'] = $servico->impostos->valorIrrf;
                }
                if ($servico->impostos->retemIrrf) {
                    $impostos['cRetemIRRF'] = $servico->impostos->retemIrrf;
                }
                if ($servico->impostos->fixarPIS) {
                    $impostos['cFixarPIS'] = $servico->impostos->fixarPIS;
                }
                if ($servico->impostos->aliquotaPis) {
                    $impostos['nAliqPIS'] = $servico->impostos->aliquotaPis;
                }
                if ($servico->impostos->valorPis) {
                    $impostos['nValorPIS'] = $servico->impostos->valorPis;
                }
                if ($servico->impostos->retemPis) {
                    $impostos['cRetemPIS'] = $servico->impostos->retemPis;
                }
                if ($servico->impostos->fixarCofins) {
                    $impostos['cFixarCOFINS'] = $servico->impostos->fixarCofins;
                }
                if ($servico->impostos->aliquotaCofins) {
                    $impostos['nAliqCOFINS'] = $servico->impostos->aliquotaCofins;
                }
                if ($servico->impostos->valorCofins) {
                    $impostos['nValorCOFINS'] = $servico->impostos->valorCofins;
                }
                if ($servico->impostos->retemCofins) {
                    $impostos['cRetemCOFINS'] = $servico->impostos->retemCofins;
                }
                if ($servico->impostos->fixarCsll) {
                    $impostos['cFixarCSLL'] = $servico->impostos->fixarCsll;
                }
                if ($servico->impostos->aliquotaCsll) {
                    $impostos['nAliqCSLL'] = $servico->impostos->aliquotaCsll;
                }
                if ($servico->impostos->valorCsll) {
                    $impostos['nValorCSLL'] = $servico->impostos->valorCsll;
                }
                if ($servico->impostos->retemCsll) {
                    $impostos['cRetemCSLL'] = $servico->impostos->retemCsll;
                }
                if ($servico->impostos->fixarInss) {
                    $impostos['cFixarINSS'] = $servico->impostos->fixarInss;
                }
                if ($servico->impostos->aliquotaInss) {
                    $impostos['nAliqINSS'] = $servico->impostos->aliquotaInss;
                }
                if ($servico->impostos->valorInss) {
                    $impostos['nValorINSS'] = $servico->impostos->valorInss;
                }
                if ($servico->impostos->retemInss) {
                    $impostos['cRetemINSS'] = $servico->impostos->retemInss;
                }
                if ($servico->impostos->aliquotaReducaoBaseInss) {
                    $impostos['nAliqRedBaseINSS'] = $servico->impostos->aliquotaReducaoBaseInss;
                }
                if ($servico->impostos->aliquotaReducaoBaseCofins) {
                    $impostos['nAliqRedBaseCOFINS'] = $servico->impostos->aliquotaReducaoBaseCofins;
                }
                if ($servico->impostos->aliquotaReducaoBasePis) {
                    $impostos['nAliqRedBasePIS'] = $servico->impostos->aliquotaReducaoBasePis;
                }
                if ($servico->impostos->deduzIss) {
                    $impostos['lDeduzISS'] = $servico->impostos->deduzIss;
                }

                $servicoPrestado['impostos'] = $impostos;
            }

            if ($servico->viaUnica) {
                $viaUnica = [];

                if ($servico->viaUnica->modeloNF) {
                    $viaUnica['cModeloNF'] = $servico->viaUnica->modeloNF;
                }
                if ($servico->viaUnica->cfop) {
                    $viaUnica['cCFOP'] = $servico->viaUnica->cfop;
                }
                if ($servico->viaUnica->classificacaoServico) {
                    $viaUnica['cClassifServico'] = $servico->viaUnica->classificacaoServico;
                }
                if ($servico->viaUnica->tipoReceita) {
                    $viaUnica['cTipoReceita'] = $servico->viaUnica->tipoReceita;
                }
                if ($servico->viaUnica->tipoUtilizacao) {
                    $viaUnica['cTipoUtilizacao'] = $servico->viaUnica->tipoUtilizacao;
                }

                $servicoPrestado['viaUnica'] = $viaUnica;
            }

            $servicosPrestados[] = $servicoPrestado;
        }
        $entityArrayData['ServicosPrestados'] = $servicosPrestados;

        // Parcelas
        $parcelas = [];
        foreach ($entity->parcelas as $p) {
            $parcela = [];

            if ($p->parcela) {
                $parcela['nParcela'] = $p->parcela;
            }
            if ($p->dataVencimento) {
                $parcela['dDtVenc'] = $p->dataVencimento;
            }
            if ($p->valor) {
                $parcela['nValor'] = $p->valor;
            }
            if ($p->percentual) {
                $parcela['nPercentual'] = $p->percentual;
            }
            if ($p->dias) {
                $parcela['nDias'] = $p->dias;
            }
            if ($p->tipoDocumento) {
                $parcela['tipo_documento'] = $p->tipoDocumento;
            }
            if ($p->meioPagamento) {
                $parcela['meio_pagamento'] = $p->meioPagamento;
            }
            if ($p->numeroSequencialUnico) {
                $parcela['nsu'] = $p->numeroSequencialUnico;
            }
            if ($p->naoGerarBoleto) {
                $parcela['nao_gerar_boleto'] = $p->naoGerarBoleto;
            }
            if ($p->parcelaAdiantamento) {
                $parcela['parcela_adiantamento'] = $p->parcelaAdiantamento;
            }
            if ($p->categoriaAdiantamento) {
                $parcela['categoria_adiantamento'] = $p->categoriaAdiantamento;
            }
            if ($p->idOmieContaCorrenteAdiantamento) {
                $parcela['conta_corrente_adiantamento'] = $p->idOmieContaCorrenteAdiantamento;
            }

            $parcelas[] = $parcela;
        }
        $entityArrayData['Parcelas'] = $parcelas;

        // Observações
        if ($entity->observacoes) {
            $observacoes = [];

            if ($entity->observacoes->observacao) {
                $observacoes['cObsOS'] = $entity->observacoes->observacao;
            }

            $entityArrayData['Observacoes'] = $observacoes;
        }

        // Informações de Cadastro
        if ($entity->infoCadastro) {
            $infoCadastro = [];

            if ($entity->infoCadastro->cancelada) {
                $infoCadastro['cCancelada'] = $entity->infoCadastro->cancelada;
            }
            if ($entity->infoCadastro->faturada) {
                $infoCadastro['cFaturada'] = $entity->infoCadastro->faturada;
            }
            if ($entity->infoCadastro->ambiente) {
                $infoCadastro['cAmbiente'] = $entity->infoCadastro->ambiente;
            }
            if ($entity->infoCadastro->dataInclusao) {
                $infoCadastro['dDtInc'] = $entity->infoCadastro->dataInclusao;
            }
            if ($entity->infoCadastro->horaInclusao) {
                $infoCadastro['cHrInc'] = $entity->infoCadastro->horaInclusao;
            }
            if ($entity->infoCadastro->dataAlteracao) {
                $infoCadastro['dDtAlt'] = $entity->infoCadastro->dataAlteracao;
            }
            if ($entity->infoCadastro->horaAlteracao) {
                $infoCadastro['cHrAlt'] = $entity->infoCadastro->horaAlteracao;
            }
            if ($entity->infoCadastro->dataFaturamento) {
                $infoCadastro['dDtFat'] = $entity->infoCadastro->dataFaturamento;
            }
            if ($entity->infoCadastro->horaFaturamento) {
                $infoCadastro['cHrFat'] = $entity->infoCadastro->horaFaturamento;
            }
            if ($entity->infoCadastro->dataCancelamento) {
                $infoCadastro['dDtCanc'] = $entity->infoCadastro->dataCancelamento;
            }
            if ($entity->infoCadastro->horaCancelamento) {
                $infoCadastro['cHrCanc'] = $entity->infoCadastro->horaCancelamento;
            }
            if ($entity->infoCadastro->origem) {
                $infoCadastro['cOrigem'] = $entity->infoCadastro->origem;
            }

            $entityArrayData['InfoCadastro'] = $infoCadastro;
        }

        // Despesas Reembolsáveis
        if ($entity->despesasReembolsaveis) {
            $despesasReembolsaveis = [];

            if ($entity->despesasReembolsaveis->codigoCategoriaReembolso) {
                $despesasReembolsaveis['cCodCategReemb'] = $entity->despesasReembolsaveis->codigoCategoriaReembolso;
            }

            foreach ($entity->despesasReembolsaveis->despesasReembolsaveis as $despesa) {
                $despesaReembolsavel = [];

                if ($despesa->idOmie) {
                    $despesaReembolsavel['nCodReemb'] = $despesa->idOmie;
                }
                if ($despesa->acaoReembolso) {
                    $despesaReembolsavel['cAcaoReemb'] = $despesa->acaoReembolso;
                }
                if ($despesa->descricaoReembolso) {
                    $despesaReembolsavel['cDescReemb'] = $despesa->descricaoReembolso;
                }
                if ($despesa->valorReembolso) {
                    $despesaReembolsavel['nValorReemb'] = $despesa->valorReembolso;
                }
                if ($despesa->dataReembolso) {
                    $despesaReembolsavel['dDataReemb'] = $despesa->dataReembolso;
                }

                $despesasReembolsaveis['despesaReembolsavel'][] = $despesaReembolsavel;
            }

            $entityArrayData['despesasReembolsaveis'] = $despesasReembolsaveis;
        }

        // Produtos Utilizados
        if ($entity->produtosUtilizados) {
            $produtosUtilizados = [];

            if ($entity->produtosUtilizados->acaoUtilizacao) {
                $produtosUtilizados['cAcaoProdUtilizados'] = $entity->produtosUtilizados->acaoUtilizacao;
            }
            if ($entity->produtosUtilizados->codigoCategoriaRemessa) {
                $produtosUtilizados['cCodCategRem'] = $entity->produtosUtilizados->codigoCategoriaRemessa;
            }

            foreach ($entity->produtosUtilizados->produtosUtilizados as $produto) {
                $produtoUtilizado = [];

                if ($produto->idOmie) {
                    $produtoUtilizado['nIdItemPU'] = $produto->idOmie;
                }
                if ($produto->acao) {
                    $produtoUtilizado['cAcaoItemPU'] = $produto->acao;
                }
                if ($produto->idOmieProdutoUtilizado) {
                    $produtoUtilizado['nCodProdutoPU'] = $produto->idOmieProdutoUtilizado;
                }
                if ($produto->quantidade) {
                    $produtoUtilizado['nQtdePU'] = $produto->quantidade;
                }
                if ($produto->idOmieLocalDeEstoque) {
                    $produtoUtilizado['codigo_local_estoque'] = $produto->idOmieLocalDeEstoque;
                }

                $produtosUtilizados['produtoUtilizado'][] = $produtoUtilizado;
            }

            $entityArrayData['produtosUtilizados'] = $produtosUtilizados;
        }

        return $entityArrayData;
    }

    /**
     * @param array $data
     *
     * @return OrdemStatusOmieModel
     */
    private function hidrateStatus(array $data): OrdemStatusOmieModel
    {
        $object = new OrdemStatusOmieModel();
        $object->idOmie = $data['nCodOS'];
        $object->idIntegracao = $data['cCodIntOS'];
        $object->codigoStatus = $data['cCodStatus'];
        $object->numeroOs = $data['cNumOS'];
        $object->descricaoStatus = $data['cDescStatus'];

        return $object;
    }
}
