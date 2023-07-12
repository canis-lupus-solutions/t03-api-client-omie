<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\CabecalhoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetInfAdicSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\IdeSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\InformacoesAdicionaisSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ObservacoesSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\PedidoStatusNfeSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ProdutoSubModelo;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class PedidosHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos
 * @name    PedidosHandler
 * @version 1.0.0
 */
class PedidosHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/produtos/pedido/';
    const ACTION_LISTAR = 'ListarPedidos';
    const ACTION_CONSULTAR = 'ConsultarPedido';
    const ACTION_INCLUIR = 'IncluirPedido';
    const ACTION_STATUS = 'StatusPedido';
    const ACTION_TROCAR_ETAPA = 'TrocarEtapaPedido';
    const ACTION_ALTERAR = 'AlterarPedidoVenda';
    const ACTION_ALTERAR_FATURADO = 'AlterarPedFaturado';


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
     * @return PedidoEntityOmieModel
     */
    private function hidrateEntity(array $data): PedidoEntityOmieModel
    {
        $object = new PedidoEntityOmieModel();

        // Cabeçalho
        $cabecalhoSubModelo = new CabecalhoSubModelo();
        $cabecalhoSubModelo->setCodigoPedido($data['cabecalho']['codigo_pedido'] ?? null);
        $cabecalhoSubModelo->setNumeroPedido($data['cabecalho']['numero_pedido'] ?? null);
        $cabecalhoSubModelo->setEtapa($data['cabecalho']['etapa'] ?? null);
        $cabecalhoSubModelo->setCodigoCenarioImpostos($data['cabecalho']['codigo_cenario_impostos'] ?? null);

        $object->setCabecalho($cabecalhoSubModelo);

        // Det
        $dets = [];
        foreach ($data['det'] as $det) {
            $detSubModelo = new DetSubModelo();

            // Ide
            $ideSubModelo = new IdeSubModelo();
            $ideSubModelo->setCodigoItemIntegracao($det['ide']['codigo_item_integracao']);
            $detSubModelo->setIde($ideSubModelo);

            // Produto
            $produtoSubModelo = new ProdutoSubModelo();
            $produtoSubModelo->setCodigoProduto($det['produto']['codigo_produto']);
            $produtoSubModelo->setCodigo($det['produto']['codigo']);
            $produtoSubModelo->setDescricao($det['produto']['descricao']);
            $produtoSubModelo->setUnidade($det['produto']['unidade']);
            $produtoSubModelo->setQuantidade($det['produto']['quantidade']);
            $produtoSubModelo->setValorUnitario($det['produto']['valor_unitario']);
            $produtoSubModelo->setValorTotal($det['produto']['valor_total']);
            $produtoSubModelo->setValorMercadoria($det['produto']['valor_mercadoria']);
            $detSubModelo->setProduto($produtoSubModelo);

            // Inf Adic
            if (isset($det['inf_adic'])) {
                $infAdicSubModelo = new DetInfAdicSubModelo();
                $infAdicSubModelo->setCodigoLocalEstoque($det['inf_adic']['codigo_local_estoque']);
                $infAdicSubModelo->setCodigoCenarioImpostos($det['inf_adic']['codigo_cenario_impostos_item']);
                $detSubModelo->setInfAdic($infAdicSubModelo);
            }

            $dets[] = $detSubModelo;
        }

        $object->setDet($dets);

        // Informações Adicionais
        $informacoesAdicionaisSubModelo = new InformacoesAdicionaisSubModelo();
        $informacoesAdicionaisSubModelo->setCodigoCategoria($data['informacoes_adicionais']['codigo_categoria'] ?? null);
        $informacoesAdicionaisSubModelo->setCodigoContaCorrente($data['informacoes_adicionais']['codigo_conta_corrente'] ?? null);
        $object->setInformacoesAdicionais($informacoesAdicionaisSubModelo);

        // Observações
        $observacoesSubModelo = new ObservacoesSubModelo();
        $observacoesSubModelo->setObsVenda($data['observacoes']['obs_venda'] ?? null);
        $object->setObservacoes($observacoesSubModelo);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return PedidoStatusEntityOmieModel
     */
    private function hidratePedidoStatusEntity(array $data): PedidoStatusEntityOmieModel
    {
        $object = new PedidoStatusEntityOmieModel();

        $object->setCodigoPedido($data['codigo_pedido'] ?? null);
        $object->setCodigoPedidoIntegracao($data['codigo_pedido_integracao'] ?? null);
        $object->setNumeroPedido($data['numero_pedido'] ?? null);
        $object->setEtapa($data['etapa'] ?? null);

        // Lista NFes
        $nfes = [];
        foreach ($data['ListaNfe'] as $nfe) {
            $nfeSubModelo = new PedidoStatusNfeSubModelo();
            $nfeSubModelo->setChaveNfe($nfe['chave_nfe']);
            $nfeSubModelo->setNumeroNfe($nfe['numero_nfe']);
            $nfeSubModelo->setDanfe($nfe['danfe']);

            $nfes[] = $nfeSubModelo;
        }

        $object->setListaNfe($nfes);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return PedidoStatusOmieModel
     */
    private function hidrateStatus(array $data): PedidoStatusOmieModel
    {
        $object = new PedidoStatusOmieModel();
        $object->setCodigoPedido($data['codigo_pedido'] ?? null);
        $object->setCodigoPedidoIntegracao($data['codigo_pedido_integracao'] ?? null);
        $object->setCodigoStatus($data['codigo_status'] ?? null);
        $object->setDescricaoStatus($data['descricao_status'] ?? null);

        return $object;
    }

    /**
     * @param PedidoEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(PedidoEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        // Cabeçalho
        if ($entity->getCabecalho() !== null) {
            $entityArrayData['cabecalho'] = [];

            if ($entity->getCabecalho()->getCodigoPedido() !== null) {
                $entityArrayData['cabecalho']['codigo_pedido'] = $entity->getCabecalho()->getCodigoPedido();
            }
            if ($entity->getCabecalho()->getCodigoPedidoIntegracao() !== null) {
                $entityArrayData['cabecalho']['codigo_pedido_integracao'] = $entity->getCabecalho()->getCodigoPedidoIntegracao();
            }
            if ($entity->getCabecalho()->getNumeroPedido() !== null) {
                $entityArrayData['cabecalho']['numero_pedido'] = $entity->getCabecalho()->getNumeroPedido();
            }
            if ($entity->getCabecalho()->getCodigoCliente() !== null) {
                $entityArrayData['cabecalho']['codigo_cliente'] = $entity->getCabecalho()->getCodigoCliente();
            }
            if ($entity->getCabecalho()->getDataPrevisao() !== null) {
                $entityArrayData['cabecalho']['data_previsao'] = $entity->getCabecalho()->getDataPrevisao();
            }
            if ($entity->getCabecalho()->getEtapa() !== null) {
                $entityArrayData['cabecalho']['etapa'] = $entity->getCabecalho()->getEtapa();
            }
            if ($entity->getCabecalho()->getCodigoParcela() !== null) {
                $entityArrayData['cabecalho']['codigo_parcela'] = $entity->getCabecalho()->getCodigoParcela();
            }
            if ($entity->getCabecalho()->getQtdeParcelas() !== null) {
                $entityArrayData['cabecalho']['qtde_parcelas'] = $entity->getCabecalho()->getQtdeParcelas();
            }
            if ($entity->getCabecalho()->getOrigemPedido() !== null) {
                $entityArrayData['cabecalho']['origem_pedido'] = $entity->getCabecalho()->getOrigemPedido();
            }
            if ($entity->getCabecalho()->getCodigoCenarioImpostos() !== null) {
                $entityArrayData['cabecalho']['codigo_cenario_impostos'] = $entity->getCabecalho()->getCodigoCenarioImpostos();
            }
        }

        // Det
        if ($entity->getDet() !== null) {
            $entityArrayData['det'] = [];

            foreach ($entity->getDet() as $det) {
                $ide = [];
                $produto = [];
                $infAdic = [];

                if ($det->getIde()) {
                    if ($det->getIde()->getCodigoItemIntegracao() !== null) {
                        $ide['codigo_item_integracao'] = $det->getIde()->getCodigoItemIntegracao();
                    }
                }

                if ($det->getProduto()) {
                    if ($det->getProduto()->getCodigoProduto() !== null) {
                        $produto['codigo_produto'] = $det->getProduto()->getCodigoProduto();
                    }
                    if ($det->getProduto()->getQuantidade() !== null) {
                        $produto['quantidade'] = $det->getProduto()->getQuantidade();
                    }
                    if ($det->getProduto()->getValorUnitario() !== null) {
                        $produto['valor_unitario'] = $det->getProduto()->getValorUnitario();
                    }
                    if ($det->getProduto()->getValorTotal() !== null) {
                        $produto['valor_total'] = $det->getProduto()->getValorTotal();
                    }
                    if ($det->getProduto()->getValorMercadoria() !== null) {
                        $produto['valor_mercadoria'] = $det->getProduto()->getValorMercadoria();
                    }
                }

                if ($det->getInfAdic()) {
                    if ($det->getInfAdic()->getCodigoLocalEstoque() !== null) {
                        $infAdic['codigo_local_estoque'] = $det->getInfAdic()->getCodigoLocalEstoque();
                        $infAdic['codigo_cenario_impostos_item'] = $det->getInfAdic()->getCodigoCenarioImpostos();
                    }
                }

                $entityArrayData['det'][] = [
                    'ide'      => $ide,
                    'produto'  => $produto,
                    'inf_adic' => $infAdic,
                ];
            }
        }

        // Informações Adicionais
        if ($entity->getInformacoesAdicionais() !== null) {
            $entityArrayData['informacoes_adicionais'] = [];

            if ($entity->getInformacoesAdicionais()->getCodigoCategoria() !== null) {
                $entityArrayData['informacoes_adicionais']['codigo_categoria'] = $entity->getInformacoesAdicionais()->getCodigoCategoria();
            }

            if ($entity->getInformacoesAdicionais()->getCodigoContaCorrente() !== null) {
                $entityArrayData['informacoes_adicionais']['codigo_conta_corrente'] = $entity->getInformacoesAdicionais()->getCodigoContaCorrente();
            }
        }

        // Observações
        if ($entity->getObservacoes() !== null) {
            $entityArrayData['observacoes'] = [];

            if ($entity->getObservacoes()->getObsVenda() !== null) {
                $entityArrayData['observacoes']['obs_venda'] = $entity->getObservacoes()->getObsVenda();
            }
        }

        return $entityArrayData;
    }

    /**
     * @param string $action
     * @param array  $entityArray
     *
     * @return array
     */
    private function cleanArray(string $action, array $entityArray): array
    {
        switch ($action) {
            case self::ACTION_INCLUIR:
                break;

            case self::ACTION_ALTERAR:
                break;
        }

        return $entityArray;
    }


    /**
     * @param array|null|PedidoListarRequestOmieModel $request
     *
     * @return PedidoEntityOmieModel[]
     * @throws Exception
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
                    if ($request->getNumeroPedidoDe()) {
                        $param['numero_pedido_de'] = $request->getNumeroPedidoDe();
                    }
                    if ($request->getNumeroPedidoAte()) {
                        $param['numero_pedido_ate'] = $request->getNumeroPedidoAte();
                    }
                }
            }

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['pedido_venda_produto'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['total_de_paginas'];

        } while ($page < $totalPages);

        return $list;
    }

    /**
     * @param PedidoConsultarRequestOmieModel $requestModel
     *
     * @return PedidoEntityOmieModel
     * @throws Exception
     */
    public function consultar(PedidoConsultarRequestOmieModel $requestModel): PedidoEntityOmieModel
    {
        $param = [];

        if ($requestModel->getCodigoPedido()) {
            $param['codigo_pedido'] = $requestModel->getCodigoPedido();
        }

        $result = $this->request(self::ACTION_CONSULTAR, $param);

        return $this->hidrateEntity($result['pedido_venda_produto']);
    }

    /**
     * @param PedidoStatusRequestOmieModel $requestModel
     *
     * @return PedidoStatusEntityOmieModel
     * @throws Exception
     */
    public function status(PedidoStatusRequestOmieModel $requestModel): PedidoStatusEntityOmieModel
    {
        $param = [];

        if ($requestModel->getCodigoPedido()) {
            $param['codigo_pedido'] = $requestModel->getCodigoPedido();
        }

        $result = $this->request(self::ACTION_STATUS, $param);

        return $this->hidratePedidoStatusEntity($result);
    }

    /**
     * @param PedidoEntityOmieModel $requestModel
     *
     * @return PedidoStatusOmieModel
     * @throws Exception
     */
    public function incluir(PedidoEntityOmieModel $requestModel): PedidoStatusOmieModel
    {
        $cleanedArray = $this->cleanArray(self::ACTION_INCLUIR, $this->mountArrayFromEntity($requestModel));

        $result = $this->request(self::ACTION_INCLUIR, $cleanedArray);

        return $this->hidrateStatus($result);
    }
}


