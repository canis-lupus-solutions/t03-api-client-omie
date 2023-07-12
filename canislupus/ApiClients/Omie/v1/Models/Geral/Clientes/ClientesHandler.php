<?php

namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\DadosBancariosSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\EnderecoEntregaSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\RecomendacoesSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo;
use CanisLupus\ApiClients\Omie\v1\OmieApiCommon;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ClientesHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes
 * @name    ClientesHandler
 * @version 1.0.0
 */
class ClientesHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/geral/clientes/';
    const ACTION_LISTAR = 'ListarClientes';
    const ACTION_CONSULTAR = 'ConsultarCliente';
    const ACTION_INCLUIR = 'IncluirCliente';
    const ACTION_ALTERAR = 'AlterarCliente';
    const ACTION_EXCLUIR = 'ExcluirCliente';
    const ACTION_INCLUIR_OU_ALTERAR_POR_LOTE = 'UpsertClientesPorLote';


    /**
     * @param string $action
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
     * @return ClienteEntityOmieModel
     */
    private function hidrateEntity(array $data): ClienteEntityOmieModel
    {
        $object = new ClienteEntityOmieModel();

        $object->setIdOmie($data['codigo_cliente_omie'] ?? null);
        $object->setIdIntegracao($data['codigo_cliente_integracao'] ?? null);
        $object->setRazaoSocial($data['razao_social'] ?? null);
        $object->setCnpjCpf($data['cnpj_cpf'] ?? null);
        $object->setNomeFantasia($data['nome_fantasia'] ?? null);
        $object->setTelefone1Ddd($data['telefone1_ddd'] ?? null);
        $object->setTelefone1Numero($data['telefone1_numero'] ?? null);
        $object->setContato($data['contato'] ?? null);
        $object->setEndereco($data['endereco'] ?? null);
        $object->setEnderecoNumero($data['endereco_numero'] ?? null);
        $object->setBairro($data['bairro'] ?? null);
        $object->setComplemento($data['complemento'] ?? null);
        $object->setEstado($data['estado'] ?? null);
        $object->setCidade($data['cidade'] ?? null);
        $object->setCep($data['cep'] ?? null);
        $object->setPais($data['codigo_pais'] ?? null);
        $object->setTelefone2Ddd($data['telefone2_ddd'] ?? null);
        $object->setTelefone2Numero($data['telefone2_numero'] ?? null);
        $object->setFaxDdd($data['fax_ddd'] ?? null);
        $object->setFaxNumero($data['fax_numero'] ?? null);
        $object->setEmail($data['email'] ?? null);
        $object->setHomePage($data['homepage'] ?? null);
        $object->setInscricaoEstadual($data['inscricao_estadual'] ?? null);
        $object->setInscricaoMunicipal($data['inscricao_municipal'] ?? null);
        $object->setInscricaoSuframa($data['inscricao_suframa'] ?? null);
        $object->setOptanteSimplesNacional($data['optante_simples_nacional'] ?? null);
        $object->setTipoAtividade($data['tipo_atividade'] ?? null);
        $object->setCnae($data['cnae'] ?? null);
        $object->setProdutorRural($data['produtor_rural'] ?? null);
        $object->setContribuinte($data['contribuinte'] ?? null);
        $object->setObservacao($data['observacao'] ?? null);
        $object->setObservacaoDetalhada($data['obs_detalhadas'] ?? null);
        $object->setRecomendacaoAtraso($data['recomendacao_atraso'] ?? null);
        $object->setPessoaFisica($data['pessoa_fisica'] ?? null);
        $object->setExterior($data['exterior'] ?? null);
        $object->setImportadoApi($data['importado_api'] ?? null);
        $object->setCidadeIbge($data['cidade_ibge'] ?? null);
        $object->setValorLimiteCredito($data['valor_limite_credito'] ?? null);
        $object->setBloquearFaturamento($data['bloquear_faturamento'] ?? null);
        $object->setNif($data['nif'] ?? null);
        $object->setInativo($data['inativo'] ?? null);
        $object->setBloquearExclusao($data['bloquear_exclusao'] ?? null);

        // Info
        $infoSubModelo = new InfoSubModelo();
        $infoSubModelo->setDataInclusao($data['info']['dInc'] ?? null);
        $infoSubModelo->setHoraInclusao($data['info']['hInc'] ?? null);
        $infoSubModelo->setUsuarioInclusao($data['info']['uInc'] ?? null);
        $infoSubModelo->setDataAlteracao($data['info']['dAlt'] ?? null);
        $infoSubModelo->setHoraAlteracao($data['info']['hAlt'] ?? null);
        $infoSubModelo->setUsuarioAlteracao($data['info']['uAlt'] ?? null);
        $infoSubModelo->setImportadoPelaApi($data['info']['cImpAPI'] ?? null);
        $object->setInfo($infoSubModelo);

        // Tags
        $tags = [];
        if (isset($data['tags'])) {
            foreach ($data['tags'] as $tag) {
                $tagSubModelo = new TagSubModelo();
                $tagSubModelo->setTag($tag['tag'] ?? null);

                $tags[] = $tagSubModelo;
            }
        }
        $object->setTags($tags);

        // Recomendações
        $recomendacoesSubModelo = new RecomendacoesSubModelo();
        $recomendacoesSubModelo->setNumeroParcelas($data['recomendacoes']['numero_parcelas'] ?? null);
        $recomendacoesSubModelo->setCodigoVendedor($data['recomendacoes']['codigo_vendedor'] ?? 0);
        $recomendacoesSubModelo->setEmailFatura($data['recomendacoes']['email_fatura'] ?? null);
        $recomendacoesSubModelo->setGerarBoletos($data['recomendacoes']['gerar_boletos'] ?? null);
        $object->setRecomendacoes($recomendacoesSubModelo);

        // Endereço de Entrega
        $enderecoEntregaSubModelo = new EnderecoEntregaSubModelo();
        $enderecoEntregaSubModelo->setCnpjCpf($data['enderecoEntrega']['entCnpjCpf'] ?? null);
        $enderecoEntregaSubModelo->setEndereco($data['enderecoEntrega']['entEndereco'] ?? null);
        $enderecoEntregaSubModelo->setNumero($data['enderecoEntrega']['entNumero'] ?? null);
        $enderecoEntregaSubModelo->setComplemento($data['enderecoEntrega']['entComplemento'] ?? null);
        $enderecoEntregaSubModelo->setBairro($data['enderecoEntrega']['entBairro'] ?? null);
        $enderecoEntregaSubModelo->setCep($data['enderecoEntrega']['entCEP'] ?? null);
        $enderecoEntregaSubModelo->setEstado($data['enderecoEntrega']['entEstado'] ?? null);
        $enderecoEntregaSubModelo->setCidade($data['enderecoEntrega']['entCidade'] ?? null);
        $object->setEnderecoEntrega($enderecoEntregaSubModelo);

        // Dados Bancários
        $dadosBancariosSubModelo = new DadosBancariosSubModelo();
        $dadosBancariosSubModelo->setCodigoBanco($data['dadosBancarios']['codigo_banco'] ?? null);
        $dadosBancariosSubModelo->setAgencia($data['dadosBancarios']['agencia'] ?? null);
        $dadosBancariosSubModelo->setContaCorrente($data['dadosBancarios']['conta_corrente'] ?? null);
        $dadosBancariosSubModelo->setDocTitular($data['dadosBancarios']['doc_titular'] ?? null);
        $dadosBancariosSubModelo->setNomeTitular($data['dadosBancarios']['nome_titular'] ?? null);
        $object->setDadosBancarios($dadosBancariosSubModelo);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return ClienteStatusOmieModel
     */
    private function hidrateStatus(array $data): ClienteStatusOmieModel
    {
        $object = new ClienteStatusOmieModel();
        $object->setIdOmie($data['codigo_cliente_omie'] ?? null);
        $object->setIdIntegracao($data['codigo_cliente_integracao'] ?? null);
        $object->setCodigoStatus($data['codigo_status'] ?? null);
        $object->setDescricaoStatus($data['descricao_status'] ?? null);

        return $object;
    }

    /**
     * @param ClienteEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(ClienteEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['codigo_cliente_omie'] = $entity->getIdOmie();
        }
        if ($entity->getIdIntegracao() !== null) {
            $entityArrayData['codigo_cliente_integracao'] = $entity->getIdIntegracao();
        }
        if ($entity->getRazaoSocial() !== null) {
            $entityArrayData['razao_social'] = $entity->getRazaoSocial();
        }
        if ($entity->getCnpjCpf() !== null) {
            $entityArrayData['cnpj_cpf'] = $entity->getCnpjCpf();
        }
        if ($entity->getNomeFantasia() !== null) {
            $entityArrayData['nome_fantasia'] = $entity->getNomeFantasia();
        }
        if ($entity->getTelefone1Ddd() !== null) {
            $entityArrayData['telefone1_ddd'] = $entity->getTelefone1Ddd();
        }
        if ($entity->getTelefone1Numero() !== null) {
            $entityArrayData['telefone1_numero'] = $entity->getTelefone1Numero();
        }
        if ($entity->getContato() !== null) {
            $entityArrayData['contato'] = $entity->getContato();
        }
        if ($entity->getEndereco() !== null) {
            $entityArrayData['endereco'] = $entity->getEndereco();
        }
        if ($entity->getEnderecoNumero() !== null) {
            $entityArrayData['endereco_numero'] = $entity->getEnderecoNumero();
        }
        if ($entity->getBairro() !== null) {
            $entityArrayData['bairro'] = $entity->getBairro();
        }
        if ($entity->getComplemento() !== null) {
            $entityArrayData['complemento'] = $entity->getComplemento();
        }
        if ($entity->getEstado() !== null) {
            $entityArrayData['estado'] = $entity->getEstado();
        }
        if ($entity->getCidade() !== null) {
            $entityArrayData['cidade'] = $entity->getCidade();
        }
        if ($entity->getCep() !== null) {
            $entityArrayData['cep'] = $entity->getCep();
        }
        if ($entity->getPais() !== null) {
            $entityArrayData['codigo_pais'] = $entity->getPais();
        }
        if ($entity->getTelefone2Ddd() !== null) {
            $entityArrayData['telefone2_ddd'] = $entity->getTelefone2Ddd();
        }
        if ($entity->getTelefone2Numero() !== null) {
            $entityArrayData['telefone2_numero'] = $entity->getTelefone2Numero();
        }
        if ($entity->getFaxDdd() !== null) {
            $entityArrayData['fax_ddd'] = $entity->getFaxDdd();
        }
        if ($entity->getFaxNumero() !== null) {
            $entityArrayData['fax_numero'] = $entity->getFaxNumero();
        }
        if ($entity->getEmail() !== null) {
            $entityArrayData['email'] = $entity->getEmail();
        }
        if ($entity->getHomePage() !== null) {
            $entityArrayData['homepage'] = $entity->getHomePage();
        }
        if ($entity->getInscricaoEstadual() !== null) {
            $entityArrayData['inscricao_estadual'] = $entity->getInscricaoEstadual();
        }
        if ($entity->getInscricaoMunicipal() !== null) {
            $entityArrayData['inscricao_municipal'] = $entity->getInscricaoMunicipal();
        }
        if ($entity->getInscricaoSuframa() !== null) {
            $entityArrayData['inscricao_suframa'] = $entity->getInscricaoSuframa();
        }
        if ($entity->getOptanteSimplesNacional() !== null) {
            $entityArrayData['optante_simples_nacional'] = $entity->getOptanteSimplesNacional();
        }
        if ($entity->getTipoAtividade() !== null) {
            $entityArrayData['tipo_atividade'] = $entity->getTipoAtividade();
        }
        if ($entity->getCnae() !== null) {
            $entityArrayData['cnae'] = $entity->getCnae();
        }
        if ($entity->getProdutorRural() !== null) {
            $entityArrayData['produtor_rural'] = $entity->getProdutorRural();
        }
        if ($entity->getContribuinte() !== null) {
            $entityArrayData['contribuinte'] = $entity->getContribuinte();
        }
        if ($entity->getObservacao() !== null) {
            $entityArrayData['observacao'] = $entity->getObservacao();
        }
        if ($entity->getObservacaoDetalhada() !== null) {
            $entityArrayData['obs_detalhadas'] = $entity->getObservacaoDetalhada();
        }
        if ($entity->getRecomendacaoAtraso() !== null) {
            $entityArrayData['recomendacao_atraso'] = $entity->getRecomendacaoAtraso();
        }
        if ($entity->getPessoaFisica() !== null) {
            $entityArrayData['pessoa_fisica'] = $entity->getPessoaFisica();
        }
        if ($entity->getExterior() !== null) {
            $entityArrayData['exterior'] = $entity->getExterior();
        }
        if ($entity->getImportadoApi() !== null) {
            $entityArrayData['importado_api'] = $entity->getImportadoApi();
        }
        if ($entity->getCidadeIbge() !== null) {
            $entityArrayData['cidade_ibge'] = $entity->getCidadeIbge();
        }
        if ($entity->getValorLimiteCredito() !== null) {
            $entityArrayData['valor_limite_credito'] = $entity->getValorLimiteCredito();
        }
        if ($entity->getBloquearFaturamento() !== null) {
            $entityArrayData['bloquear_faturamento'] = $entity->getBloquearFaturamento();
        }
        if ($entity->getNif() !== null) {
            $entityArrayData['nif'] = $entity->getNif();
        }
        if ($entity->getInativo() !== null) {
            $entityArrayData['inativo'] = $entity->getInativo();
        }
        if ($entity->getBloquearExclusao() !== null) {
            $entityArrayData['bloquear_exclusao'] = $entity->getBloquearExclusao();
        } else {
            $entityArrayData['bloquear_exclusao'] = 'N';
        }

        // Info
        if ($entity->getInfo() !== null) {
            $entityArrayData['info'] = [];

            if ($entity->getInfo()->getDataInclusao() !== null) {
                $entityArrayData['info']['dInc'] = $entity->getInfo()->getDataInclusao();
            }
            if ($entity->getInfo()->getHoraInclusao() !== null) {
                $entityArrayData['info']['hInc'] = $entity->getInfo()->getHoraInclusao();
            }
            if ($entity->getInfo()->getUsuarioInclusao() !== null) {
                $entityArrayData['info']['uInc'] = $entity->getInfo()->getUsuarioInclusao();
            }
            if ($entity->getInfo()->getDataAlteracao() !== null) {
                $entityArrayData['info']['dAlt'] = $entity->getInfo()->getDataAlteracao();
            }
            if ($entity->getInfo()->getHoraAlteracao() !== null) {
                $entityArrayData['info']['hAlt'] = $entity->getInfo()->getHoraAlteracao();
            }
            if ($entity->getInfo()->getUsuarioAlteracao() !== null) {
                $entityArrayData['info']['uAlt'] = $entity->getInfo()->getUsuarioAlteracao();
            }
            if ($entity->getInfo()->getImportadoPelaApi() !== null) {
                $entityArrayData['info']['cImpAPI'] = $entity->getInfo()->getImportadoPelaApi();
            }
        }

        // Tags
        if ($entity->getTags() !== null) {
            $entityArrayData['tags'] = [];

            foreach ($entity->getTags() as $tag) {
                $entityArrayData['tags'][] = ['tag' => $tag->getTag()];
            }
        }

        // Recomendações
        if ($entity->getRecomendacoes() !== null) {
            $entityArrayData['recomendacoes'] = [];

            if ($entity->getRecomendacoes()->getNumeroParcelas() !== null) {
                $entityArrayData['recomendacoes']['numero_parcelas'] = $entity->getRecomendacoes()->getNumeroParcelas();
            }
            if ($entity->getRecomendacoes()->getCodigoVendedor() !== null) {
                $entityArrayData['recomendacoes']['codigo_vendedor'] = $entity->getRecomendacoes()->getCodigoVendedor();
            }
            if ($entity->getRecomendacoes()->getEmailFatura() !== null) {
                $entityArrayData['recomendacoes']['email_fatura'] = $entity->getRecomendacoes()->getEmailFatura();
            }
            if ($entity->getRecomendacoes()->getGerarBoletos() !== null) {
                $entityArrayData['recomendacoes']['gerar_boletos'] = $entity->getRecomendacoes()->getGerarBoletos();
            }
        }

        // Endereço de Entrega
        if ($entity->getEnderecoEntrega() !== null) {
            $entityArrayData['enderecoEntrega'] = [];

            if ($entity->getEnderecoEntrega()->getCnpjCpf() !== null) {
                $entityArrayData['enderecoEntrega']['entCnpjCpf'] = $entity->getEnderecoEntrega()->getCnpjCpf();
            }
            if ($entity->getEnderecoEntrega()->getEndereco() !== null) {
                $entityArrayData['enderecoEntrega']['entEndereco'] = $entity->getEnderecoEntrega()->getEndereco();
            }
            if ($entity->getEnderecoEntrega()->getNumero() !== null) {
                $entityArrayData['enderecoEntrega']['entNumero'] = $entity->getEnderecoEntrega()->getNumero();
            }
            if ($entity->getEnderecoEntrega()->getComplemento() !== null) {
                $entityArrayData['enderecoEntrega']['entComplemento'] = $entity->getEnderecoEntrega()->getComplemento();
            }
            if ($entity->getEnderecoEntrega()->getBairro() !== null) {
                $entityArrayData['enderecoEntrega']['entBairro'] = $entity->getEnderecoEntrega()->getBairro();
            }
            if ($entity->getEnderecoEntrega()->getCep() !== null) {
                $entityArrayData['enderecoEntrega']['entCEP'] = $entity->getEnderecoEntrega()->getCep();
            }
            if ($entity->getEnderecoEntrega()->getEstado() !== null) {
                $entityArrayData['enderecoEntrega']['entEstado'] = $entity->getEnderecoEntrega()->getEstado();
            }
            if ($entity->getEnderecoEntrega()->getCidade() !== null) {
                $entityArrayData['enderecoEntrega']['entCidade'] = $entity->getEnderecoEntrega()->getCidade();
            }
        }

        // Dados Bancários
        if ($entity->getDadosBancarios() !== null) {
            $entityArrayData['dadosBancarios'] = [];

            if ($entity->getDadosBancarios()->getCodigoBanco() !== null) {
                $entityArrayData['dadosBancarios']['codigo_banco'] = $entity->getDadosBancarios()->getCodigoBanco();
            }
            if ($entity->getDadosBancarios()->getAgencia() !== null) {
                $entityArrayData['dadosBancarios']['agencia'] = $entity->getDadosBancarios()->getAgencia();
            }
            if ($entity->getDadosBancarios()->getContaCorrente() !== null) {
                $entityArrayData['dadosBancarios']['conta_corrente'] = $entity->getDadosBancarios()->getContaCorrente();
            }
            if ($entity->getDadosBancarios()->getDocTitular() !== null) {
                $entityArrayData['dadosBancarios']['doc_titular'] = $entity->getDadosBancarios()->getDocTitular();
            }
            if ($entity->getDadosBancarios()->getNomeTitular() !== null) {
                $entityArrayData['dadosBancarios']['nome_titular'] = $entity->getDadosBancarios()->getNomeTitular();
            }
        }

        return $entityArrayData;
    }


    /**
     * @param array|object|null $request
     *
     * @return ClienteEntityOmieModel[]
     * @throws OmieApiException
     */
    public function listar($request = null): array
    {
        $list = [];

        $page = 0;

        do {
            $page++;

            $param = [
                'pagina' => $page,
                'registros_por_pagina' => 500,
                'apenas_importado_api' => "N",
            ];

            if ($request) {
                if (is_array($request)) {
                    $param = array_merge($param, $request);
                }
            }

            try {
                $result = $this->request(self::ACTION_LISTAR, $param);

                foreach ($result['clientes_cadastro'] as $cadastro) {
                    $list[] = $this->hidrateEntity($cadastro);
                }

                $totalPages = $result['total_de_paginas'];

            } catch (OmieApiException $exception) {
                if ($exception->getOmieErrorCode() == OmieApiException::ERROR_LISTAR_VAZIO) {
                    break;
                }

                throw $exception;
            }

        } while ($page < $totalPages);

        return $list;
    }

    /**
     * @param ClienteConsultarRequestOmieModel $requestModel
     *
     * @return null|ClienteEntityOmieModel
     * @throws OmieApiException
     */
    public function consultar(ClienteConsultarRequestOmieModel $requestModel): ?ClienteEntityOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['codigo_cliente_omie'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['codigo_cliente_integracao'] = $requestModel->getIdIntegracao();
        }

        try {
            $result = $this->request(self::ACTION_CONSULTAR, $param);

            return $this->hidrateEntity($result);

        } catch (OmieApiException $exception) {
            if ($exception->getOmieErrorCode() == OmieApiException::ERROR_CONSULTAR_VAZIO) {
                return null;
            }

            throw $exception;
        }
    }

    /**
     * @param ClienteEntityOmieModel $requestModel
     *
     * @return ClienteStatusOmieModel
     * @throws OmieApiException
     */
    public function incluir(ClienteEntityOmieModel $requestModel): ClienteStatusOmieModel
    {
        $result = $this->request(self::ACTION_INCLUIR, $this->mountArrayFromEntity($requestModel));

        return $this->hidrateStatus($result);
    }

    /**
     * @param ClienteEntityOmieModel $requestModel
     *
     * @return ClienteStatusOmieModel
     * @throws OmieApiException
     */
    public function alterar(ClienteEntityOmieModel $requestModel): ClienteStatusOmieModel
    {
        $result = $this->request(self::ACTION_ALTERAR, $this->mountArrayFromEntity($requestModel));

        return $this->hidrateStatus($result);
    }

    /**
     * @param ClienteExcluirRequestOmieModel $requestModel
     *
     * @return ClienteStatusOmieModel
     * @throws OmieApiException
     */
    public function excluir(ClienteExcluirRequestOmieModel $requestModel): ClienteStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['codigo_cliente_omie'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['codigo_cliente_integracao'] = $requestModel->getIdIntegracao();
        }

        $result = $this->request(self::ACTION_EXCLUIR, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param ClienteEntityOmieModel[] $requestModels
     *
     * @return array
     */
    public function incluirOuAlterarPorLote(array $requestModels): array
    {
        // Separar por lotes de 50 registros
        $chunks = array_chunk($requestModels, 50);
        $chunksResults = [];

        // Processar cada lote
        $chunkNumber = 1;
        foreach ($chunks as $chunkOfRequestModels) {
            $param = [
                "clientes_cadastro" => [],
                "lote" => $chunkNumber,
            ];

            foreach ($chunkOfRequestModels as $requestModel) {
                $array = $this->mountArrayFromEntity($requestModel);

                if (!isset($array['codigo_cliente_integracao'])) {
                    $array['codigo_cliente_integracao'] = $array['codigo_cliente_omie'];
                }

                $param['clientes_cadastro'][] = $array;
            }

            try {
                $chunksResults[$chunkNumber] = $this->request(self::ACTION_INCLUIR_OU_ALTERAR_POR_LOTE, $param);
            } catch (Exception $e) {
                $chunksResults[$chunkNumber] = $e->getMessage();
            }

            $chunkNumber++;
        }

        return $chunksResults;
    }

    /**
     * @param ClienteEntityOmieModel $sourceModel
     * @param ClienteEntityOmieModel $targetModel
     *
     * @return array
     */
    public function comparar(ClienteEntityOmieModel $sourceModel, ClienteEntityOmieModel $targetModel): array
    {
        $sourceModelArray = $this->mountArrayFromEntity($sourceModel);
        $targetModelArray = $this->mountArrayFromEntity($targetModel);

        $clientesStructure = [
            //'codigo_cliente_omie'       => 'codigo_cliente_omie',
            //'codigo_cliente_integracao' => 'codigo_cliente_integracao',
            'razao_social' => 'razao_social',
            'cnpj_cpf' => 'cnpj_cpf',
            'nome_fantasia' => 'nome_fantasia',
            'telefone1_ddd' => 'telefone1_ddd',
            'telefone1_numero' => 'telefone1_numero',
            'contato' => 'contato',
            'endereco' => 'endereco',
            'endereco_numero' => 'endereco_numero',
            'bairro' => 'bairro',
            'complemento' => 'complemento',
            'estado' => 'estado',
            'cidade' => 'cidade',
            'cep' => 'cep',
            'codigo_pais' => 'codigo_pais',
            'telefone2_ddd' => 'telefone2_ddd',
            'telefone2_numero' => 'telefone2_numero',
            'fax_ddd' => 'fax_ddd',
            'fax_numero' => 'fax_numero',
            'email' => 'email',
            'homepage' => 'homepage',
            'inscricao_estadual' => 'inscricao_estadual',
            'inscricao_municipal' => 'inscricao_municipal',
            'inscricao_suframa' => 'inscricao_suframa',
            'optante_simples_nacional' => 'optante_simples_nacional',
            'tipo_atividade' => 'tipo_atividade',
            'cnae' => 'cnae',
            'produtor_rural' => 'produtor_rural',
            'contribuinte' => 'contribuinte',
            'observacao' => 'observacao',
            'obs_detalhadas' => 'obs_detalhadas',
            'recomendacao_atraso' => 'recomendacao_atraso',
            'pessoa_fisica' => 'pessoa_fisica',
            'exterior' => 'exterior',
            'importado_api' => 'importado_api',
            'cidade_ibge' => 'cidade_ibge',
            'valor_limite_credito' => 'valor_limite_credito',
            'bloquear_faturamento' => 'bloquear_faturamento',
            'nif' => 'nif',
            'inativo' => 'inativo',
            'bloquear_exclusao' => 'bloquear_exclusao',

            //'tags' => [],

            'recomendacoes' => [
                'numero_parcelas' => 'numero_parcelas',
                //'codigo_vendedor' => 'codigo_vendedor', // Não comparar código de vendedor, uma vez que os IdOmies serão sempre inconsistentes
                'email_fatura' => 'email_fatura',
                'gerar_boletos' => 'gerar_boletos',
            ],

            'enderecoEntrega' => [
                'entCnpjCpf' => 'entCnpjCpf',
                'entEndereco' => 'entEndereco',
                'entNumero' => 'entNumero',
                'entComplemento' => 'entComplemento',
                'entBairro' => 'entBairro',
                'entCEP' => 'entCEP',
                'entEstado' => 'entEstado',
                'entCidade' => 'entCidade',
            ],

            'dadosBancarios' => [
                'codigo_banco' => 'codigo_banco',
                'agencia' => 'agencia',
                'conta_corrente' => 'conta_corrente',
                'doc_titular' => 'doc_titular',
                'nome_titular' => 'nome_titular',
            ],
        ];

        $comparisonData = [
            'texts' => [],
            'diff' => [
                'notEqual' => [],
                'emptyOnTarget' => [],
                'emptyOnSource' => [],
            ],
        ];
        foreach ($clientesStructure as $key => $value) {
            if (in_array($key, ['recomendacoes', 'enderecoEntrega', 'dadosBancarios'])) {
                foreach ($clientesStructure[$key] as $keyArray => $valueArray) {
                    $indexName = "$key|$keyArray";
                    $sourceIndex = $sourceModelArray[$key][$keyArray];
                    $targetIndex = $targetModelArray[$key][$keyArray];

                    // Ignorar diferenças entre alguns índices dos quais o Omie é incapaz de lidar devido
                    // ao fato de que ele é inconsistente para com as próprias formas de alimentar os campos.
                    // Fazer isso apenas caso existam índices na origem e no alvo
                    if ($sourceIndex && $targetIndex) {
                        if ($key == "enderecoEntrega" && $keyArray == "entCEP") {
                            $sourceIndex = str_replace("-", "", $sourceIndex);
                            $targetIndex = str_replace("-", "", $targetIndex);
                        }
                    }

                    $compareResult = OmieApiCommon::indexComparison($sourceIndex, $targetIndex);
                    if ($compareResult) {
                        $comparisonData = array_merge_recursive($comparisonData, OmieApiCommon::comparisonResultProcessing($compareResult, $indexName));
                    }
                }
            } else {
                $indexName = $key;
                $sourceIndex = $sourceModelArray[$key];
                $targetIndex = $targetModelArray[$key];

                $compareResult = OmieApiCommon::indexComparison($sourceIndex, $targetIndex);
                if ($compareResult) {
                    $comparisonData = array_merge_recursive($comparisonData, OmieApiCommon::comparisonResultProcessing($compareResult, $indexName));
                }
            }
        }

        return $comparisonData;
    }
}
