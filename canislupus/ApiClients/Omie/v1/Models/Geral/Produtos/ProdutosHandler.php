<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\CaracteristicaSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\DadosIbptSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\ImagemSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\RecomendacoesFiscaisSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\VideoSubModelo;
use CanisLupus\ApiClients\Omie\v1\OmieApiCommon;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ProdutosHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos
 * @name    ProdutosHandler
 * @version 1.0.0
 */
class ProdutosHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/geral/produtos/';
    const ACTION_LISTAR = 'ListarProdutos';
    const ACTION_CONSULTAR = 'ConsultarProduto';
    const ACTION_INCLUIR = 'IncluirProduto';
    const ACTION_ALTERAR = 'AlterarProduto';
    const ACTION_EXCLUIR = 'ExcluirProduto';
    const ACTION_INCLUIR_OU_ALTERAR_POR_LOTE = 'UpsertProdutosPorLote';


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
     * @return ProdutoEntityOmieModel
     */
    private function hidrateEntity(array $data): ProdutoEntityOmieModel
    {
        $object = new ProdutoEntityOmieModel();
        $object->setIdOmie($data['codigo_produto'] ?? null);
        $object->setIdIntegracao($data['codigo_produto_integracao'] ?? null);
        $object->setDescricao($data['descricao'] ?? null);
        $object->setCodigo($data['codigo'] ?? null);
        $object->setUnidade($data['unidade'] ?? null);
        $object->setNcm($data['ncm'] ?? null);
        $object->setEan($data['ean'] ?? null);
        $object->setValorUnitario($data['valor_unitario'] ?? null);
        $object->setCodigoFamilia($data['codigo_familia'] ?? null);
        $object->setTipoItem($data['tipoItem'] ?? null);
        $object->setPesoLiquido($data['peso_liq'] ?? null);
        $object->setPesoBruto($data['peso_bruto'] ?? null);
        $object->setAltura($data['altura'] ?? null);
        $object->setLargura($data['largura'] ?? null);
        $object->setProfundidade($data['profundidade'] ?? null);
        $object->setMarca($data['marca'] ?? null);
        $object->setDiasGarantia($data['dias_garantia'] ?? null);
        $object->setDiasCrossdocking($data['dias_crossdocking'] ?? null);
        $object->setDescricaoDetalhada($data['descr_detalhada'] ?? null);
        $object->setObservacoesInternas($data['obs_internas'] ?? null);
        $object->setExibirDescricaoNfe($data['exibir_descricao_nfe'] ?? null);
        $object->setExibirDescricaoPedido($data['exibir_descricao_pedido'] ?? null);
        $object->setCstIcms($data['cst_icms'] ?? null);
        $object->setModalidadeIcms($data['modalidade_icms'] ?? null);
        $object->setCsosnIcms($data['csosn_icms'] ?? null);
        $object->setAliquotaIcms($data['aliquota_icms'] ?? null);
        $object->setReducaoBaseIcms($data['red_base_icms'] ?? null);
        $object->setMotivoDesoneracaoIcms($data['motivo_deson_icms'] ?? null);
        $object->setPercentualFcpIcms($data['per_icms_fcp'] ?? null);
        $object->setCodigoBeneficio($data['codigo_beneficio'] ?? null);
        $object->setCstPis($data['cst_pis'] ?? null);
        $object->setAliquotaPis($data['aliquota_pis'] ?? null);
        $object->setCstCofins($data['cst_cofins'] ?? null);
        $object->setAliquotaCofins($data['aliquota_cofins'] ?? null);
        $object->setCfop($data['cfop'] ?? null);
        $object->setCodigoIntegracaoFamilia($data['codInt_familia'] ?? null);
        $object->setDescricaoFamilia($data['descricao_familia'] ?? null);
        $object->setBloqueado($data['bloqueado'] ?? null);
        $object->setBloquearExclusao($data['bloquear_exclusao'] ?? null);
        $object->setImportadoApi($data['importado_api'] ?? null);
        $object->setInativo($data['inativo'] ?? null);

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

        // Recomendações Fiscais
        $recomendacoesFiscaisSubModelo = new RecomendacoesFiscaisSubModelo();
        $recomendacoesFiscaisSubModelo->setOrigemMercadoria($data['recomendacoes_fiscais']['origem_mercadoria'] ?? null);
        $recomendacoesFiscaisSubModelo->setIdPrecoTabelado($data['recomendacoes_fiscais']['id_preco_tabelado'] ?? null);
        $recomendacoesFiscaisSubModelo->setIdCest($data['recomendacoes_fiscais']['id_cest'] ?? null);
        $recomendacoesFiscaisSubModelo->setCupomFiscal($data['recomendacoes_fiscais']['cupom_fiscal'] ?? null);
        $recomendacoesFiscaisSubModelo->setMarketPlace($data['recomendacoes_fiscais']['market_place'] ?? null);
        $recomendacoesFiscaisSubModelo->setIndicadorEscala($data['recomendacoes_fiscais']['indicador_escala'] ?? null);
        $recomendacoesFiscaisSubModelo->setCnpjFabricante($data['recomendacoes_fiscais']['cnpj_fabricante'] ?? null);
        $object->setRecomendacoesFiscais($recomendacoesFiscaisSubModelo);

        // Dados Ibpt
        $dadosIbptSubModelo = new DadosIbptSubModelo();
        $dadosIbptSubModelo->setAliquotaFederal($data['dadosIbpt']['aliqFederal'] ?? null);
        $dadosIbptSubModelo->setAliquotaEstadual($data['dadosIbpt']['aliqEstadual'] ?? null);
        $dadosIbptSubModelo->setAliquotaMunicipal($data['dadosIbpt']['aliqMunicipal'] ?? null);
        $dadosIbptSubModelo->setFonte($data['dadosIbpt']['fonte'] ?? null);
        $dadosIbptSubModelo->setChave($data['dadosIbpt']['chave'] ?? null);
        $dadosIbptSubModelo->setVersao($data['dadosIbpt']['versao'] ?? null);
        $dadosIbptSubModelo->setValidoDe($data['dadosIbpt']['valido_de'] ?? null);
        $dadosIbptSubModelo->setValidoAte($data['dadosIbpt']['valido_ate'] ?? null);
        $object->setDadosIbpt($dadosIbptSubModelo);

        // Imagens
        $imagens = [];
        if (isset($data['imagens'])) {
            foreach ($data['imagens'] as $imagem) {
                $imagemSubModelo = new ImagemSubModelo();
                $imagemSubModelo->setUrlImagem($imagem['url_imagem'] ?? null);

                $imagens[] = $imagemSubModelo;
            }
        }
        $object->setImagens($imagens);

        // Vídeos
        $videos = [];
        if (isset($data['videos'])) {
            foreach ($data['videos'] as $video) {
                $videoSubModelo = new VideoSubModelo();
                $videoSubModelo->setUrlVideo($video['url_video'] ?? null);

                $videos[] = $videoSubModelo;
            }
        }
        $object->setVideos($videos);

        // Características
        $caracteristicas = [];
        if (isset($data['caracteristicas'])) {
            foreach ($data['caracteristicas'] as $caracteristica) {
                $caracteristicaSubModelo = new CaracteristicaSubModelo();
                $caracteristicaSubModelo->setIdOmie($caracteristica['nCodCaract'] ?? null);
                $caracteristicaSubModelo->setIdIntegracao($caracteristica['cCodIntCaract'] ?? null);
                $caracteristicaSubModelo->setNome($caracteristica['cNomeCaract'] ?? null);
                $caracteristicaSubModelo->setConteudo($caracteristica['cConteudo'] ?? null);
                $caracteristicaSubModelo->setExibeItemNF($caracteristica['cExibirItemNF'] ?? null);
                $caracteristicaSubModelo->setExibeItemPedido($caracteristica['cExibirItemPedido'] ?? null);

                $caracteristicas[] = $caracteristicaSubModelo;
            }
        }
        $object->setCaracteristicas($caracteristicas);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return ProdutoStatusOmieModel
     */
    private function hidrateStatus(array $data): ProdutoStatusOmieModel
    {
        $object = new ProdutoStatusOmieModel();
        $object->setIdOmie($data['codigo_produto'] ?? null);
        $object->setIdIntegracao($data['codigo_produto_integracao'] ?? null);
        $object->setCodigoStatus($data['codigo_status'] ?? null);
        $object->setDescricaoStatus($data['descricao_status'] ?? null);

        return $object;
    }

    /**
     * @param ProdutoEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(ProdutoEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['codigo_produto'] = $entity->getIdOmie();
        }
        if ($entity->getIdIntegracao() !== null) {
            $entityArrayData['codigo_produto_integracao'] = $entity->getIdIntegracao();
        }
        if ($entity->getDescricao() !== null) {
            $entityArrayData['descricao'] = $entity->getDescricao();
        }
        if ($entity->getCodigo() !== null) {
            $entityArrayData['codigo'] = $entity->getCodigo();
        }
        if ($entity->getUnidade() !== null) {
            $entityArrayData['unidade'] = $entity->getUnidade();
        }
        if ($entity->getNcm() !== null) {
            $entityArrayData['ncm'] = $entity->getNcm();
        }
        if ($entity->getEan() !== null) {
            $entityArrayData['ean'] = $entity->getEan();
        }
        if ($entity->getValorUnitario() !== null) {
            $entityArrayData['valor_unitario'] = $entity->getValorUnitario();
        }
        if ($entity->getCodigoFamilia() !== null) {
            $entityArrayData['codigo_familia'] = $entity->getCodigoFamilia();
        }
        if ($entity->getTipoItem() !== null) {
            $entityArrayData['tipoItem'] = $entity->getTipoItem();
        }
        if ($entity->getPesoLiquido() !== null) {
            $entityArrayData['peso_liq'] = $entity->getPesoLiquido();
        }
        if ($entity->getPesoBruto() !== null) {
            $entityArrayData['peso_bruto'] = $entity->getPesoBruto();
        }
        if ($entity->getAltura() !== null) {
            $entityArrayData['altura'] = $entity->getAltura();
        }
        if ($entity->getLargura() !== null) {
            $entityArrayData['largura'] = $entity->getLargura();
        }
        if ($entity->getProfundidade() !== null) {
            $entityArrayData['profundidade'] = $entity->getProfundidade();
        }
        if ($entity->getMarca() !== null) {
            $entityArrayData['marca'] = $entity->getMarca();
        }
        if ($entity->getDiasGarantia() !== null) {
            $entityArrayData['dias_garantia'] = $entity->getDiasGarantia();
        }
        if ($entity->getDiasCrossdocking() !== null) {
            $entityArrayData['dias_crossdocking'] = $entity->getDiasCrossdocking();
        }
        if ($entity->getDescricaoDetalhada() !== null) {
            $entityArrayData['descr_detalhada'] = $entity->getDescricaoDetalhada();
        }
        if ($entity->getObservacoesInternas() !== null) {
            $entityArrayData['obs_internas'] = $entity->getObservacoesInternas();
        }
        if ($entity->getExibirDescricaoNfe() !== null) {
            $entityArrayData['exibir_descricao_nfe'] = $entity->getExibirDescricaoNfe();
        }
        if ($entity->getExibirDescricaoPedido() !== null) {
            $entityArrayData['exibir_descricao_pedido'] = $entity->getExibirDescricaoPedido();
        }
        if ($entity->getCstIcms() !== null) {
            $entityArrayData['cst_icms'] = $entity->getCstIcms();
        }
        if ($entity->getModalidadeIcms() !== null) {
            $entityArrayData['modalidade_icms'] = $entity->getModalidadeIcms();
        }
        if ($entity->getCsosnIcms() !== null) {
            $entityArrayData['csosn_icms'] = $entity->getCsosnIcms();
        }
        if ($entity->getAliquotaIcms() !== null) {
            $entityArrayData['aliquota_icms'] = $entity->getAliquotaIcms();
        }
        if ($entity->getReducaoBaseIcms() !== null) {
            $entityArrayData['red_base_icms'] = $entity->getReducaoBaseIcms();
        }
        if ($entity->getMotivoDesoneracaoIcms() !== null) {
            $entityArrayData['motivo_deson_icms'] = $entity->getMotivoDesoneracaoIcms();
        }
        if ($entity->getPercentualFcpIcms() !== null) {
            $entityArrayData['per_icms_fcp'] = $entity->getPercentualFcpIcms();
        }
        if ($entity->getCodigoBeneficio() !== null) {
            $entityArrayData['codigo_beneficio'] = $entity->getCodigoBeneficio();
        }
        if ($entity->getCstPis() !== null) {
            $entityArrayData['cst_pis'] = $entity->getCstPis();
        }
        if ($entity->getAliquotaPis() !== null) {
            $entityArrayData['aliquota_pis'] = $entity->getAliquotaPis();
        }
        if ($entity->getCstCofins() !== null) {
            $entityArrayData['cst_cofins'] = $entity->getCstCofins();
        }
        if ($entity->getAliquotaCofins() !== null) {
            $entityArrayData['aliquota_cofins'] = $entity->getAliquotaCofins();
        }
        if ($entity->getCfop() !== null) {
            $entityArrayData['cfop'] = $entity->getCfop();
        }
        if ($entity->getCodigoIntegracaoFamilia() !== null) {
            $entityArrayData['codInt_familia'] = $entity->getCodigoIntegracaoFamilia();
        }
        if ($entity->getDescricaoFamilia() !== null) {
            $entityArrayData['descricao_familia'] = $entity->getDescricaoFamilia();
        }
        if ($entity->getBloqueado() !== null) {
            $entityArrayData['bloqueado'] = $entity->getBloqueado();
        }
        if ($entity->getBloquearExclusao() !== null) {
            $entityArrayData['bloquear_exclusao'] = $entity->getBloquearExclusao();
        }
        if ($entity->getImportadoApi() !== null) {
            $entityArrayData['importado_api'] = $entity->getImportadoApi();
        }
        if ($entity->getInativo() !== null) {
            $entityArrayData['inativo'] = $entity->getInativo();
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

        // Recomendações Fiscais
        if ($entity->getRecomendacoesFiscais() !== null) {
            $entityArrayData['recomendacoes_fiscais'] = [];

            if ($entity->getRecomendacoesFiscais()->getOrigemMercadoria() !== null) {
                $entityArrayData['recomendacoes_fiscais']['origem_mercadoria'] = $entity->getRecomendacoesFiscais()->getOrigemMercadoria();
            }
            if ($entity->getRecomendacoesFiscais()->getIdPrecoTabelado() !== null) {
                $entityArrayData['recomendacoes_fiscais']['id_preco_tabelado'] = $entity->getRecomendacoesFiscais()->getIdPrecoTabelado();
            }
            if ($entity->getRecomendacoesFiscais()->getIdCest() !== null) {
                $entityArrayData['recomendacoes_fiscais']['id_cest'] = $entity->getRecomendacoesFiscais()->getIdCest();
            }
            if ($entity->getRecomendacoesFiscais()->getCupomFiscal() !== null) {
                $entityArrayData['recomendacoes_fiscais']['cupom_fiscal'] = $entity->getRecomendacoesFiscais()->getCupomFiscal();
            }
            if ($entity->getRecomendacoesFiscais()->getMarketPlace() !== null) {
                $entityArrayData['recomendacoes_fiscais']['market_place'] = $entity->getRecomendacoesFiscais()->getMarketPlace();
            }
            if ($entity->getRecomendacoesFiscais()->getIndicadorEscala() !== null) {
                $entityArrayData['recomendacoes_fiscais']['indicador_escala'] = $entity->getRecomendacoesFiscais()->getIndicadorEscala();
            }
            if ($entity->getRecomendacoesFiscais()->getCnpjFabricante() !== null) {
                $entityArrayData['recomendacoes_fiscais']['cnpj_fabricante'] = $entity->getRecomendacoesFiscais()->getCnpjFabricante();
            }
        }

        // Dados Ibpt
        if ($entity->getDadosIbpt() !== null) {
            $entityArrayData['dadosIbpt'] = [];

            if ($entity->getDadosIbpt()->getAliquotaFederal() !== null) {
                $entityArrayData['dadosIbpt']['aliqFederal'] = $entity->getDadosIbpt()->getAliquotaFederal();
            }
            if ($entity->getDadosIbpt()->getAliquotaEstadual() !== null) {
                $entityArrayData['dadosIbpt']['aliqEstadual'] = $entity->getDadosIbpt()->getAliquotaEstadual();
            }
            if ($entity->getDadosIbpt()->getAliquotaMunicipal() !== null) {
                $entityArrayData['dadosIbpt']['aliqMunicipal'] = $entity->getDadosIbpt()->getAliquotaMunicipal();
            }
            if ($entity->getDadosIbpt()->getFonte() !== null) {
                $entityArrayData['dadosIbpt']['fonte'] = $entity->getDadosIbpt()->getFonte();
            }
            if ($entity->getDadosIbpt()->getChave() !== null) {
                $entityArrayData['dadosIbpt']['chave'] = $entity->getDadosIbpt()->getChave();
            }
            if ($entity->getDadosIbpt()->getVersao() !== null) {
                $entityArrayData['dadosIbpt']['versao'] = $entity->getDadosIbpt()->getVersao();
            }
            if ($entity->getDadosIbpt()->getValidoDe() !== null) {
                $entityArrayData['dadosIbpt']['valido_de'] = $entity->getDadosIbpt()->getValidoDe();
            }
            if ($entity->getDadosIbpt()->getValidoAte() !== null) {
                $entityArrayData['dadosIbpt']['valido_ate'] = $entity->getDadosIbpt()->getValidoAte();
            }
        }

        // Imagens
        if ($entity->getImagens() !== null) {
            $entityArrayData['imagens'] = [];

            foreach ($entity->getImagens() as $imagem) {
                $entityArrayData['imagens'][] = ['url_imagem' => $imagem->getUrlImagem()];
            }
        }

        // Vídeos
        if ($entity->getVideos() !== null) {
            $entityArrayData['videos'] = [];

            foreach ($entity->getVideos() as $video) {
                $entityArrayData['videos'][] = ['url_video' => $video->getUrlVideo()];
            }
        }

        // Características
        if ($entity->getCaracteristicas() !== null) {
            $entityArrayData['caracteristicas'] = [];

            foreach ($entity->getCaracteristicas() as $caracteristica) {
                $entityArrayData['caracteristicas'][] = ['nCodCaract' => $caracteristica->getIdOmie()];
                $entityArrayData['caracteristicas'][] = ['cCodIntCaract' => $caracteristica->getIdIntegracao()];
                $entityArrayData['caracteristicas'][] = ['cNomeCaract' => $caracteristica->getNome()];
                $entityArrayData['caracteristicas'][] = ['cConteudo' => $caracteristica->getConteudo()];
                $entityArrayData['caracteristicas'][] = ['cExibirItemNF' => $caracteristica->getExibeItemNF()];
                $entityArrayData['caracteristicas'][] = ['cExibirItemPedido' => $caracteristica->getExibeItemPedido()];
            }
        }

        return $entityArrayData;
    }


    /**
     * @param array|null|ProdutoListarRequestOmieModel $request
     *
     * @return array
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
                'filtrar_apenas_omiepdv' => "N",
            ];

            if ($request) {
                if (is_array($request)) {
                    $param = array_merge($param, $request);

                } else if (is_object($request)) {
                    if ($request->getApenasImportadoApi()) {
                        $param['apenas_importado_api'] = $request->getApenasImportadoApi();
                    }
                    if ($request->getFiltrarApenasOmiepdv()) {
                        $param['filtrar_apenas_omiepdv'] = $request->getFiltrarApenasOmiepdv();
                    }
                    if ($request->getFiltrarApenasMarketPlace()) {
                        $param['filtrar_apenas_marketplace'] = $request->getFiltrarApenasMarketPlace();
                    }
                    if ($request->getInativo()) {
                        $param['inativo'] = $request->getInativo();
                    }
                }
            }

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['produto_servico_cadastro'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['total_de_paginas'];

        } while ($page < $totalPages);

        return $list;
    }

    /**
     * @param ProdutoConsultarRequestOmieModel $requestModel
     *
     * @return ProdutoEntityOmieModel
     * @throws OmieApiException
     */
    public function consultar(ProdutoConsultarRequestOmieModel $requestModel): ProdutoEntityOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['codigo_produto'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['codigo_produto_integracao'] = $requestModel->getIdIntegracao();
        }

        if ($requestModel->getCodigo()) {
            $param['codigo'] = $requestModel->getCodigo();
        }

        $result = $this->request(self::ACTION_CONSULTAR, $param);

        return $this->hidrateEntity($result);
    }

    /**
     * @param ProdutoEntityOmieModel $requestModel
     *
     * @return ProdutoStatusOmieModel
     * @throws OmieApiException
     */
    public function incluir(ProdutoEntityOmieModel $requestModel): ProdutoStatusOmieModel
    {
        $result = $this->request(self::ACTION_INCLUIR, $this->mountArrayFromEntity($requestModel));

        return $this->hidrateStatus($result);
    }

    /**
     * @param ProdutoEntityOmieModel $requestModel
     *
     * @return ProdutoStatusOmieModel
     * @throws OmieApiException
     */
    public function alterar(ProdutoEntityOmieModel $requestModel): ProdutoStatusOmieModel
    {
        $result = $this->request(self::ACTION_ALTERAR, $this->mountArrayFromEntity($requestModel));

        return $this->hidrateStatus($result);
    }

    /**
     * @param ProdutoExcluirRequestOmieModel $requestModel
     *
     * @return ProdutoStatusOmieModel
     * @throws OmieApiException
     */
    public function excluir(ProdutoExcluirRequestOmieModel $requestModel): ProdutoStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmie()) {
            $param['codigo_produto'] = $requestModel->getIdOmie();
        }

        if ($requestModel->getIdIntegracao()) {
            $param['codigo_produto_integracao'] = $requestModel->getIdIntegracao();
        }

        if ($requestModel->getCodigo()) {
            $param['codigo'] = $requestModel->getCodigo();
        }

        $result = $this->request(self::ACTION_EXCLUIR, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param ProdutoEntityOmieModel[] $requestModels
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
                "produto_servico_cadastro" => [],
                "lote" => $chunkNumber,
            ];

            foreach ($chunkOfRequestModels as $requestModel) {
                $array = $this->mountArrayFromEntity($requestModel);

                if (isset($array['codigo_produto'])) {
                    unset($array['codigo_produto']);
                }

                if (!isset($array['codigo_produto_integracao'])) {
                    $array['codigo_produto_integracao'] = $array['codigo'];
                }

                $param['produto_servico_cadastro'][] = $array;
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
     * @param ProdutoEntityOmieModel $sourceModel
     * @param ProdutoEntityOmieModel $targetModel
     *
     * @return array
     */
    public function comparar(ProdutoEntityOmieModel $sourceModel, ProdutoEntityOmieModel $targetModel): array
    {
        $sourceModelArray = $this->mountArrayFromEntity($sourceModel);
        $targetModelArray = $this->mountArrayFromEntity($targetModel);

        $produtosStructure = [
            //'codigo_produto'            => 'codigo_produto',
            //'codigo_produto_integracao' => 'codigo_produto_integracao',
            'descricao' => 'descricao',
            'codigo' => 'codigo',
            'unidade' => 'unidade',
            'ncm' => 'ncm',
            'ean' => 'ean',
            'valor_unitario' => 'valor_unitario',
            'codigo_familia' => 'codigo_familia',
            'tipoItem' => 'tipoItem',
            'peso_liq' => 'peso_liq',
            'peso_bruto' => 'peso_bruto',
            'altura' => 'altura',
            'largura' => 'largura',
            'profundidade' => 'profundidade',
            'marca' => 'marca',
            'dias_garantia' => 'dias_garantia',
            'dias_crossdocking' => 'dias_crossdocking',
            'descr_detalhada' => 'descr_detalhada',
            'obs_internas' => 'obs_internas',
            'exibir_descricao_nfe' => 'exibir_descricao_nfe',
            'exibir_descricao_pedido' => 'exibir_descricao_pedido',
            //'cst_icms'                => 'cst_icms',
            //'modalidade_icms'         => 'modalidade_icms',
            //'csosn_icms'              => 'csosn_icms',
            //'aliquota_icms'           => 'aliquota_icms',
            //'red_base_icms'           => 'red_base_icms',
            //'motivo_deson_icms'       => 'motivo_deson_icms',
            //'per_icms_fcp'            => 'per_icms_fcp',
            //'codigo_beneficio'        => 'codigo_beneficio',
            //'cst_pis'                 => 'cst_pis',
            //'aliquota_pis'            => 'aliquota_pis',
            //'cst_cofins'              => 'cst_cofins',
            //'aliquota_cofins'         => 'aliquota_cofins',
            //'cfop'                    => 'cfop',
            //'codInt_familia'          => 'codInt_familia',
            //'descricao_familia'       => 'descricao_familia',
            'bloqueado' => 'bloqueado',
            'bloquear_exclusao' => 'bloquear_exclusao',
            //'importado_api'           => 'importado_api',
            //'inativo'                 => 'inativo',

            'recomendacoes_fiscais' => [
                'origem_mercadoria' => 'origem_mercadoria',
                'id_preco_tabelado' => 'id_preco_tabelado',
                'id_cest' => 'id_cest',
                'cupom_fiscal' => 'cupom_fiscal',
                'market_place' => 'market_place',
                'indicador_escala' => 'indicador_escala',
                'cnpj_fabricante' => 'cnpj_fabricante',
            ],

            /*
            'dadosIbpt' => [
                'aliqFederal'   => 'aliqFederal',
                'aliqEstadual'  => 'aliqEstadual',
                'aliqMunicipal' => 'aliqMunicipal',
                'fonte'         => 'fonte',
                'chave'         => 'chave',
                'versao'        => 'versao',
                'valido_de'     => 'valido_de',
                'valido_ate'    => 'valido_ate',
            ],
            */

            //'imagens'         => [],
            //'videos'          => [],
            //'caracteristicas' => [],
        ];

        $comparisonData = [
            'texts' => [],
            'diff' => [
                'notEqual' => [],
                'emptyOnTarget' => [],
                'emptyOnSource' => [], '',
            ],
        ];
        foreach ($produtosStructure as $key => $value) {
            if (in_array($key, ['recomendacoes_fiscais', 'dadosIbpt'])) {
                foreach ($produtosStructure[$key] as $keyArray => $valueArray) {
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


