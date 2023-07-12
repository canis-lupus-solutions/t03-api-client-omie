<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos;

/**
 * Class OutrasInfoSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos
 * @name    OutrasInfoSubModelo
 * @version 1.0.0
 */
class OutrasInfoSubModelo
{
    /**
     * Código da Tabela de Preço Original.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoTabelaOriginal = null;

    /**
     * Percentual de Acréscimo da tabela de preços.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $percentualAcrescimo = null;

    /**
     * Percentual de Desconto da tabela de preços.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $percentualDesconto = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getCodigoTabelaOriginal(): ?int
    {
        return $this->codigoTabelaOriginal;
    }

    /**
     * @param int|null $codigoTabelaOriginal
     *
     * @return OutrasInfoSubModelo
     */
    public function setCodigoTabelaOriginal(?int $codigoTabelaOriginal): OutrasInfoSubModelo
    {
        $this->codigoTabelaOriginal = $codigoTabelaOriginal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercentualAcrescimo(): ?float
    {
        return $this->percentualAcrescimo;
    }

    /**
     * @param float|null $percentualAcrescimo
     *
     * @return OutrasInfoSubModelo
     */
    public function setPercentualAcrescimo(?float $percentualAcrescimo): OutrasInfoSubModelo
    {
        $this->percentualAcrescimo = $percentualAcrescimo;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercentualDesconto(): ?float
    {
        return $this->percentualDesconto;
    }

    /**
     * @param float|null $percentualDesconto
     *
     * @return OutrasInfoSubModelo
     */
    public function setPercentualDesconto(?float $percentualDesconto): OutrasInfoSubModelo
    {
        $this->percentualDesconto = $percentualDesconto;

        return $this;
    }
}
