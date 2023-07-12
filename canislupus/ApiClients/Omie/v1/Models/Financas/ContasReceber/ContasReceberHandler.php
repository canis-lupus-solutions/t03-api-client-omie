<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\BoletoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\OmieApiCommon;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ContasReceberHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber
 * @name    ContasReceberHandler
 * @version 1.0.0
 */
class ContasReceberHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/financas/contareceber/';
    const ACTION_LISTAR = 'ListarContasReceber';


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
     * @return ContaReceberEntityOmieModel
     * @throws Exception
     */
    private function hidrateEntity(array $data): ContaReceberEntityOmieModel
    {
        $object = new ContaReceberEntityOmieModel();

        $object->setIdOmie($data['codigo_lancamento_omie'] ?? null);
        $object->setIdIntegracao($data['codigo_lancamento_integracao'] ?? null);
        $object->setCodigoClienteFornecedor($data['codigo_cliente_fornecedor'] ?? null);
        $object->setCodigoClienteFornecedorIntegracao($data['codigo_cliente_fornecedor_integracao'] ?? null);
        $object->setDataVencimento(isset($data['data_vencimento']) ? OmieApiCommon::dateTimeConverter($data['data_vencimento']) : null);
        $object->setDataPrevisao(isset($data['data_previsao']) ? OmieApiCommon::dateTimeConverter($data['data_previsao']) : null);
        $object->setValorDocumento($data['valor_documento'] ?? null);
        $object->setNumeroPedido($data['numero_pedido'] ?? null);
        $object->setStatusTitulo($data['status_titulo'] ?? null);

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

        // Boleto
        $boletoSubModelo = new BoletoSubModelo();
        $boletoSubModelo->setGerado($data['boleto']['cGerado'] ?? null);
        $boletoSubModelo->setDataEmissao($data['boleto']['dDtEmBol'] ?? null);
        $boletoSubModelo->setNumBoleto($data['boleto']['cNumBoleto'] ?? null);
        $boletoSubModelo->setNumBancario($data['boleto']['cNumBancario'] ?? null);
        $boletoSubModelo->setPerJuros($data['boleto']['nPerJuros'] ?? null);
        $boletoSubModelo->setPerMulta($data['boleto']['nPerMulta'] ?? null);
        $object->setBoleto($boletoSubModelo);

        return $object;
    }

    /**
     * @param ContaReceberEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(ContaReceberEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['codigo_cliente_omie'] = $entity->getIdOmie();
        }
        if ($entity->getIdIntegracao() !== null) {
            $entityArrayData['codigo_cliente_integracao'] = $entity->getIdIntegracao();
        }
        if ($entity->getCodigoClienteFornecedor() !== null) {
            $entityArrayData['codigo_cliente_fornecedor'] = $entity->getCodigoClienteFornecedor();
        }
        if ($entity->getCodigoClienteFornecedorIntegracao() !== null) {
            $entityArrayData['codigo_cliente_fornecedor_integracao'] = $entity->getCodigoClienteFornecedorIntegracao();
        }
        if ($entity->getDataVencimento() !== null) {
            $entityArrayData['data_vencimento'] = $entity->getDataVencimento()->format('d/m/Y');
        }
        if ($entity->getValorDocumento() !== null) {
            $entityArrayData['valor_documento'] = $entity->getValorDocumento();
        }
        if ($entity->getNumeroPedido() !== null) {
            $entityArrayData['numero_pedido'] = $entity->getNumeroPedido();
        }
        if ($entity->getStatusTitulo() !== null) {
            $entityArrayData['status_titulo'] = $entity->getStatusTitulo();
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

        // Boleto
        if ($entity->getBoleto() !== null) {
            $entityArrayData['boleto'] = [];

            if ($entity->getBoleto()->getGerado() !== null) {
                $entityArrayData['boleto']['cGerado'] = $entity->getBoleto()->getGerado();
            }
            if ($entity->getBoleto()->getDataEmissao() !== null) {
                $entityArrayData['boleto']['dDtEmBol'] = $entity->getBoleto()->getDataEmissao();
            }
            if ($entity->getBoleto()->getNumBoleto() !== null) {
                $entityArrayData['boleto']['cNumBoleto'] = $entity->getBoleto()->getNumBoleto();
            }
            if ($entity->getBoleto()->getNumBancario() !== null) {
                $entityArrayData['boleto']['cNumBancario'] = $entity->getBoleto()->getNumBancario();
            }
            if ($entity->getBoleto()->getPerJuros() !== null) {
                $entityArrayData['boleto']['nPerJuros'] = $entity->getBoleto()->getPerJuros();
            }
            if ($entity->getBoleto()->getPerMulta() !== null) {
                $entityArrayData['boleto']['nPerMulta'] = $entity->getBoleto()->getPerMulta();
            }
        }

        return $entityArrayData;
    }


    /**
     * @param array|null|ContaReceberListarRequestOmieModel $request
     *
     * @return ContaReceberEntityOmieModel[]
     * @throws OmieApiException
     */
    public function listar($request = null): array
    {
        $list = [];

        $page = 0;

        do {
            $page++;

            $param = [
                'pagina'               => $page,
                'registros_por_pagina' => 500,
                'apenas_importado_api' => "N",
            ];

            if ($request) {
                if (is_array($request)) {
                    $param = array_merge($param, $request);

                } else if (is_object($request)) {
                    if ($request->getApenasImportadoApi()) {
                        $param['apenas_importado_api'] = $request->getApenasImportadoApi();
                    }
                    if ($request->getFiltrarApenasTitulosEmAberto()) {
                        $param['filtrar_apenas_titulos_em_aberto'] = $request->getFiltrarApenasTitulosEmAberto();
                    }
                    if ($request->getFiltrarCliente()) {
                        $param['filtrar_cliente'] = $request->getFiltrarCliente();
                    }
                }
            }

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['conta_receber_cadastro'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['total_de_paginas'];

        } while ($page < $totalPages);

        return $list;
    }
}
