<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos;

/**
 * Class RecomendacoesFiscaisSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos
 * @name    RecomendacoesFiscaisSubModelo
 * @version 1.0.0
 */
class RecomendacoesFiscaisSubModelo
{
    /**
     * Origem da Mercadoria.
     * Pode ser:
     * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8
     * 1 - Estrangeira - Importação direta, exceto a indicada no código 6
     * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7
     * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70
     * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam
     * as legislações citadas nos Ajustes
     * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40
     * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural
     * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX e gás natural
     * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $origemMercadoria = null;

    /**
     * ID do Preço tabelado (Pauta).
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idPrecoTabelado = null;

    /**
     * Código do CEST.
     * No formato: 99.999.99
     * Recomenda-se armazenar como VARCHAR(9).
     */
    protected ?string $idCest = null;

    /**
     * Indica se o produto é comercializado via PDV (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $cupomFiscal = null;

    /**
     * Indica se o produto será comercializado via Market Place ou e-commerce (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $marketPlace = null;

    /**
     * Indicador de Produção em Escala Relevante (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $indicadorEscala = null;

    /**
     * CNPJ do Fabricante da Mercadoria.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $cnpjFabricante = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getOrigemMercadoria(): ?string
    {
        return $this->origemMercadoria;
    }

    /**
     * @param string|null $origemMercadoria
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setOrigemMercadoria(?string $origemMercadoria): RecomendacoesFiscaisSubModelo
    {
        $this->origemMercadoria = $origemMercadoria;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdPrecoTabelado(): ?int
    {
        return $this->idPrecoTabelado;
    }

    /**
     * @param int|null $idPrecoTabelado
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setIdPrecoTabelado(?int $idPrecoTabelado): RecomendacoesFiscaisSubModelo
    {
        $this->idPrecoTabelado = $idPrecoTabelado;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdCest(): ?string
    {
        return $this->idCest;
    }

    /**
     * @param string|null $idCest
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setIdCest(?string $idCest): RecomendacoesFiscaisSubModelo
    {
        $this->idCest = $idCest;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCupomFiscal(): ?string
    {
        return $this->cupomFiscal;
    }

    /**
     * @param string|null $cupomFiscal
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setCupomFiscal(?string $cupomFiscal): RecomendacoesFiscaisSubModelo
    {
        $this->cupomFiscal = $cupomFiscal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMarketPlace(): ?string
    {
        return $this->marketPlace;
    }

    /**
     * @param string|null $marketPlace
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setMarketPlace(?string $marketPlace): RecomendacoesFiscaisSubModelo
    {
        $this->marketPlace = $marketPlace;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndicadorEscala(): ?string
    {
        return $this->indicadorEscala;
    }

    /**
     * @param string|null $indicadorEscala
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setIndicadorEscala(?string $indicadorEscala): RecomendacoesFiscaisSubModelo
    {
        $this->indicadorEscala = $indicadorEscala;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnpjFabricante(): ?string
    {
        return $this->cnpjFabricante;
    }

    /**
     * @param string|null $cnpjFabricante
     *
     * @return RecomendacoesFiscaisSubModelo
     */
    public function setCnpjFabricante(?string $cnpjFabricante): RecomendacoesFiscaisSubModelo
    {
        $this->cnpjFabricante = $cnpjFabricante;

        return $this;
    }
}
