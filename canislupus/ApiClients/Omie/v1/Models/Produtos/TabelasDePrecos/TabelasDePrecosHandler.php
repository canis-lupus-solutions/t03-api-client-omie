<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\CaracteristicasSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ClientesSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\OutrasInfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ProdutosSubModelo;
use CanisLupus\ApiClients\Omie\v1\OmieApiCommon;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class TabelasDePrecosHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos
 * @name    TabelasDePrecosHandler
 * @version 1.0.0
 */
class TabelasDePrecosHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/produtos/tabelaprecos/';
    const ACTION_LISTAR = 'ListarTabelasPreco';
    const ACTION_CONSULTAR = 'ConsultarTabelaPreco';
    const ACTION_INCLUIR = 'IncluirTabelaPreco';
    const ACTION_ALTERAR = 'AlterarTabelaPreco';
    const ACTION_EXCLUIR = 'ExcluirTabelaPreco';
    const ACTION_ATIVAR = 'AtivarTabelaPreco';
    const ACTION_SUSPENDER = 'SuspenderTabelaPreco';


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
     * @return TabelaDePrecoEntityOmieModel
     */
    private function hidrateEntity(array $data): TabelaDePrecoEntityOmieModel
    {
        $object = new TabelaDePrecoEntityOmieModel();
        $object->setIdOmie($data['nCodTabPreco'] ?? null);
        $object->setIdIntegracao($data['cCodIntTabPreco'] ?? null);
        $object->setNome($data['cNome'] ?? null);
        $object->setCodigo($data['cCodigo'] ?? null);
        $object->setAtiva($data['cAtiva'] ?? null);
        $object->setOrigem($data['cOrigem'] ?? null);

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

        // Produtos
        $produtosSubModelo = new ProdutosSubModelo();
        $produtosSubModelo->setTodosProdutos($data['produtos']['cTodosProdutos'] ?? null);
        $produtosSubModelo->setCodigoFamilia($data['produtos']['nCodFamilia'] ?? null);
        $produtosSubModelo->setNcm($data['produtos']['cNCM'] ?? null);
        $produtosSubModelo->setCodigoCaracteristica($data['produtos']['nCodCaract'] ?? null);
        $produtosSubModelo->setConteudoCaracteristica($data['produtos']['cConteudo'] ?? null);
        $produtosSubModelo->setCodigoFornecedor($data['produtos']['nCodFornec'] ?? null);
        $object->setProdutos($produtosSubModelo);

        // Clientes
        $clientesSubModelo = new ClientesSubModelo();
        $clientesSubModelo->setTodosClientes($data['clientes']['cTodosClientes'] ?? null);
        $clientesSubModelo->setCodigoTag($data['clientes']['nCodTag'] ?? null);
        $clientesSubModelo->setDescricaoTag($data['clientes']['cTag'] ?? null);
        $clientesSubModelo->setUf($data['clientes']['cUF'] ?? null);
        $object->setClientes($clientesSubModelo);

        // Outras Info
        $outrasInfoSubModelo = new OutrasInfoSubModelo();
        $outrasInfoSubModelo->setCodigoTabelaOriginal($data['outrasInfo']['nCodOrigTab'] ?? null);
        $outrasInfoSubModelo->setPercentualAcrescimo($data['outrasInfo']['nPercAcrescimo'] ?? null);
        $outrasInfoSubModelo->setPercentualDesconto($data['outrasInfo']['nPercDesconto'] ?? null);
        $object->setOutrasInfo($outrasInfoSubModelo);

        // Características
        $caracteristicasSubModelo = new CaracteristicasSubModelo();
        $caracteristicasSubModelo->setTemValidade($data['caracteristicas']['cTemValidade'] ?? null);
        $caracteristicasSubModelo->setDataInicialValidade($data['caracteristicas']['dDtInicial'] ?? null);
        $caracteristicasSubModelo->setDataFinalValidade($data['caracteristicas']['dDtFinal'] ?? null);
        $caracteristicasSubModelo->setTemDesconto($data['caracteristicas']['cTemDesconto'] ?? null);
        $caracteristicasSubModelo->setDescontoSugerido($data['caracteristicas']['nDescSugerido'] ?? null);
        $caracteristicasSubModelo->setPercentualDescontoMaximo($data['caracteristicas']['nPercDescMax'] ?? null);
        $caracteristicasSubModelo->setArredondaPreco($data['caracteristicas']['cArredPreco'] ?? null);
        $object->setCaracteristicas($caracteristicasSubModelo);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return TabelaDePrecoStatusOmieModel
     */
    private function hidrateStatus(array $data): TabelaDePrecoStatusOmieModel
    {
        $object = new TabelaDePrecoStatusOmieModel();
        $object->setIdOmie($data['nCodTabPreco'] ?? null);
        $object->setIdIntegracao($data['cCodIntTabPreco'] ?? null);
        $object->setCodigoStatus($data['cCodStatus'] ?? null);
        $object->setDescricaoStatus($data['cDesStatus'] ?? null);

        return $object;
    }

    /**
     * @param TabelaDePrecoEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(TabelaDePrecoEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['nCodTabPreco'] = $entity->getIdOmie();
        }
        if ($entity->getIdIntegracao() !== null) {
            $entityArrayData['cCodIntTabPreco'] = $entity->getIdIntegracao();
        }
        if ($entity->getNome() !== null) {
            $entityArrayData['cNome'] = $entity->getNome();
        }
        if ($entity->getCodigo() !== null) {
            $entityArrayData['cCodigo'] = $entity->getCodigo();
        }
        if ($entity->getAtiva() !== null) {
            $entityArrayData['cAtiva'] = $entity->getAtiva();
        }
        if ($entity->getOrigem() !== null) {
            $entityArrayData['cOrigem'] = $entity->getOrigem();
        }

        // Produtos
        if ($entity->getProdutos() !== null) {
            $entityArrayData['produtos'] = [];

            if ($entity->getProdutos()->getTodosProdutos() !== null) {
                $entityArrayData['produtos']['cTodosProdutos'] = $entity->getProdutos()->getTodosProdutos();
            }
            if ($entity->getProdutos()->getCodigoFamilia() !== null) {
                $entityArrayData['produtos']['nCodFamilia'] = $entity->getProdutos()->getCodigoFamilia();
            }
            if ($entity->getProdutos()->getNcm() !== null) {
                $entityArrayData['produtos']['cNCM'] = $entity->getProdutos()->getNcm();
            }
            if ($entity->getProdutos()->getCodigoCaracteristica() !== null) {
                $entityArrayData['produtos']['nCodCaract'] = $entity->getProdutos()->getCodigoCaracteristica();
            }
            if ($entity->getProdutos()->getConteudoCaracteristica() !== null) {
                $entityArrayData['produtos']['cConteudo'] = $entity->getProdutos()->getConteudoCaracteristica();
            }
            if ($entity->getProdutos()->getCodigoFornecedor() !== null) {
                $entityArrayData['produtos']['nCodFornec'] = $entity->getProdutos()->getCodigoFornecedor();
            }
        }

        // Clientes
        if ($entity->getClientes() !== null) {
            $entityArrayData['clientes'] = [];

            if ($entity->getClientes()->getTodosClientes() !== null) {
                $entityArrayData['clientes']['cTodosClientes'] = $entity->getClientes()->getTodosClientes();
            }
            if ($entity->getClientes()->getCodigoTag() !== null) {
                $entityArrayData['clientes']['nCodTag'] = $entity->getClientes()->getCodigoTag();
            }
            if ($entity->getClientes()->getDescricaoTag() !== null) {
                $entityArrayData['clientes']['cTag'] = $entity->getClientes()->getDescricaoTag();
            }
            if ($entity->getClientes()->getUf() !== null) {
                $entityArrayData['clientes']['cUF'] = $entity->getClientes()->getUf();
            }
        }

        // Outras Info
        if ($entity->getOutrasInfo() !== null) {
            $entityArrayData['outrasInfo'] = [];

            if ($entity->getOutrasInfo()->getCodigoTabelaOriginal() !== null) {
                $entityArrayData['outrasInfo']['nCodOrigTab'] = $entity->getOutrasInfo()->getCodigoTabelaOriginal();
            }
            if ($entity->getOutrasInfo()->getPercentualAcrescimo() !== null) {
                $entityArrayData['outrasInfo']['nPercAcrescimo'] = $entity->getOutrasInfo()->getPercentualAcrescimo();
            }
            if ($entity->getOutrasInfo()->getPercentualDesconto() !== null) {
                $entityArrayData['outrasInfo']['nPercDesconto'] = $entity->getOutrasInfo()->getPercentualDesconto();
            }
        }

        // Características
        if ($entity->getCaracteristicas() !== null) {
            $entityArrayData['caracteristicas'] = [];

            if ($entity->getCaracteristicas()->getTemValidade() !== null) {
                $entityArrayData['caracteristicas']['cTemValidade'] = $entity->getCaracteristicas()->getTemValidade();
            }
            if ($entity->getCaracteristicas()->getDataInicialValidade() !== null) {
                $entityArrayData['caracteristicas']['dDtInicial'] = $entity->getCaracteristicas()->getDataInicialValidade();
            }
            if ($entity->getCaracteristicas()->getDataFinalValidade() !== null) {
                $entityArrayData['caracteristicas']['dDtFinal'] = $entity->getCaracteristicas()->getDataFinalValidade();
            }
            if ($entity->getCaracteristicas()->getTemDesconto() !== null) {
                $entityArrayData['caracteristicas']['cTemDesconto'] = $entity->getCaracteristicas()->getTemDesconto();
            }
            if ($entity->getCaracteristicas()->getDescontoSugerido() !== null) {
                $entityArrayData['caracteristicas']['nDescSugerido'] = $entity->getCaracteristicas()->getDescontoSugerido();
            }
            if ($entity->getCaracteristicas()->getPercentualDescontoMaximo() !== null) {
                $entityArrayData['caracteristicas']['nPercDescMax'] = $entity->getCaracteristicas()->getPercentualDescontoMaximo();
            }
            if ($entity->getCaracteristicas()->getArredondaPreco() !== null) {
                $entityArrayData['caracteristicas']['cArredPreco'] = $entity->getCaracteristicas()->getArredondaPreco();
            }
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
                // Tag [nCodTabPreco] não faz parte da estrutura do tipo complexo [tprIncluirRequest]!
                if ($entityArray['nCodTabPreco']) {
                    unset($entityArray['nCodTabPreco']);
                }

                break;

            case self::ACTION_ALTERAR:
                break;
        }


        // Tag [cAtiva] não faz parte da estrutura dos tipos complexos [tprIncluirRequest] e [tprAlterarRequest]!
        if ($entityArray['cAtiva']) {
            unset($entityArray['cAtiva']);
        }

        // Tag [INFO] não faz parte da estrutura dos tipos complexos [tprIncluirRequest] e [tprAlterarRequest]!
        if ($entityArray['info']) {
            unset($entityArray['info']);
        }

        // A tag [nCodOrigTab] não deve ser preenchida quando a origem não for [TBL]!
        if ($entityArray['cOrigem'] != 'TBL') {
            unset($entityArray['outrasInfo']['nCodOrigTab']);
        }

        // Quando informar [S] na tag [cTodosProdutos] as tags [nCodFamilia,cNCM,nCodCaract,nCodFornec] não devem ser preenchidas!
        if ($entityArray['produtos']['cTodosProdutos'] != 'TBL') {
            unset($entityArray['produtos']['nCodFamilia']);
            unset($entityArray['produtos']['cNCM']);
            unset($entityArray['produtos']['nCodCaract']);
            unset($entityArray['produtos']['nCodFornec']);
        }

        return $entityArray;
    }


    /**
     * @return TabelaDePrecoEntityOmieModel[]
     * @throws OmieApiException
     */
    public function listar(): array
    {
        $list = [];

        $page = 0;

        do {
            $page++;

            $param = [
                'nPagina' => $page,
                'nRegPorPagina' => 500,
            ];

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['listaTabelasPreco'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['nTotPaginas'];

        } while ($page < $totalPages);

        return $list;
    }

    /**
     * @param TabelaDePrecoConsultarRequestOmieModel $requestModel
     *
     * @return TabelaDePrecoEntityOmieModel
     * @throws OmieApiException
     */
    public function consultar(TabelaDePrecoConsultarRequestOmieModel $requestModel): TabelaDePrecoEntityOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['nCodTabPreco'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['cCodIntTabPreco'] = $requestModel->getIdIntegracao();
        }

        $result = $this->request(self::ACTION_CONSULTAR, $param);

        return $this->hidrateEntity($result);
    }

    /**
     * @param TabelaDePrecoEntityOmieModel $requestModel
     *
     * @return TabelaDePrecoStatusOmieModel
     * @throws OmieApiException
     */
    public function incluir(TabelaDePrecoEntityOmieModel $requestModel): TabelaDePrecoStatusOmieModel
    {
        $cleanedArray = $this->cleanArray(self::ACTION_INCLUIR, $this->mountArrayFromEntity($requestModel));

        $result = $this->request(self::ACTION_INCLUIR, $cleanedArray);

        return $this->hidrateStatus($result);
    }

    /**
     * @param TabelaDePrecoEntityOmieModel $requestModel
     *
     * @return TabelaDePrecoStatusOmieModel
     * @throws OmieApiException
     */
    public function alterar(TabelaDePrecoEntityOmieModel $requestModel): TabelaDePrecoStatusOmieModel
    {
        $cleanedArray = $this->cleanArray(self::ACTION_ALTERAR, $this->mountArrayFromEntity($requestModel));

        $result = $this->request(self::ACTION_ALTERAR, $cleanedArray);

        return $this->hidrateStatus($result);
    }

    /**
     * @param TabelaDePrecoExcluirRequestOmieModel $requestModel
     *
     * @return TabelaDePrecoStatusOmieModel
     * @throws OmieApiException
     */
    public function excluir(TabelaDePrecoExcluirRequestOmieModel $requestModel): TabelaDePrecoStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['nCodTabPreco'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['cCodIntTabPreco'] = $requestModel->getIdIntegracao();
        }

        $result = $this->request(self::ACTION_EXCLUIR, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param TabelaDePrecoAtivarRequestOmieModel $requestModel
     *
     * @return TabelaDePrecoStatusOmieModel
     * @throws OmieApiException
     */
    public function ativar(TabelaDePrecoAtivarRequestOmieModel $requestModel): TabelaDePrecoStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['nCodTabPreco'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['cCodIntTabPreco'] = $requestModel->getIdIntegracao();
        }

        $result = $this->request(self::ACTION_ATIVAR, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param TabelaDePrecoSuspenderRequestOmieModel $requestModel
     *
     * @return TabelaDePrecoStatusOmieModel
     * @throws OmieApiException
     */
    public function suspender(TabelaDePrecoSuspenderRequestOmieModel $requestModel): TabelaDePrecoStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['nCodTabPreco'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['cCodIntTabPreco'] = $requestModel->getIdIntegracao();
        }

        $result = $this->request(self::ACTION_SUSPENDER, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param TabelaDePrecoEntityOmieModel $sourceModel
     * @param TabelaDePrecoEntityOmieModel $targetModel
     *
     * @return array
     */
    public function comparar(TabelaDePrecoEntityOmieModel $sourceModel, TabelaDePrecoEntityOmieModel $targetModel): array
    {
        $sourceModelArray = $this->mountArrayFromEntity($sourceModel);
        $targetModelArray = $this->mountArrayFromEntity($targetModel);

        $tabelaDePrecosStructure = [
            //'nCodTabPreco'    => 'nCodTabPreco',
            //'cCodIntTabPreco' => 'cCodIntTabPreco',
            'cNome' => 'cNome',
            'cCodigo' => 'cCodigo',
            //'cAtiva'          => 'cAtiva',
            'cOrigem' => 'cOrigem',
            'produtos' => [
                'cTodosProdutos' => 'cTodosProdutos',
                'nCodFamilia' => 'nCodFamilia',
                'cNCM' => 'cNCM',
                'nCodCaract' => 'nCodCaract',
                'cConteudo' => 'cConteudo',
                'nCodFornec' => 'nCodFornec',
            ],
            'clientes' => [
                'cTodosClientes' => 'cTodosClientes',
                'nCodTag' => 'nCodTag',
                'cTag' => 'cTag',
                'cUF' => 'cUF',
            ],
            'outrasInfo' => [
                'nCodOrigTab' => 'nCodOrigTab',
                'nPercAcrescimo' => 'nPercAcrescimo',
                'nPercDesconto' => 'nPercDesconto',
            ],
            'caracteristicas' => [
                'cTemValidade' => 'cTemValidade',
                'dDtInicial' => 'dDtInicial',
                'dDtFinal' => 'dDtFinal',
                'cTemDesconto' => 'cTemDesconto',
                'nDescSugerido' => 'nDescSugerido',
                'nPercDescMax' => 'nPercDescMax',
                'cArredPreco' => 'cArredPreco',
            ],
        ];

        // Definir exclusões
        $ignorarProdutos = false;
        $ignorarClientes = false;
        if ($sourceModel->getProdutos()->getTodosProdutos() == "S"
            && $targetModel->getProdutos()->getTodosProdutos() == "S") {
            $ignorarProdutos = true;
        }
        if ($sourceModel->getClientes()->getTodosClientes() == "S"
            && $targetModel->getClientes()->getTodosClientes() == "S") {
            $ignorarClientes = true;
        }

        $comparisonData = [
            'texts' => [],
            'diff' => [
                'notEqual' => [],
                'emptyOnTarget' => [],
                'emptyOnSource' => [],
            ],
        ];
        foreach ($tabelaDePrecosStructure as $key => $value) {
            if (in_array($key, ['produtos', 'clientes', 'outrasInfo', 'caracteristicas'])) {
                if ($key == 'produtos' && $ignorarProdutos) {
                    continue;
                }
                if ($key == 'clientes' && $ignorarClientes) {
                    continue;
                }

                foreach ($tabelaDePrecosStructure[$key] as $keyArray => $valueArray) {
                    $indexName = "$key|$keyArray";
                    $sourceIndex = $sourceModelArray[$key][$keyArray];
                    $targetIndex = $targetModelArray[$key][$keyArray];

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


