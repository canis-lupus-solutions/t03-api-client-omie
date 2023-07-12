<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos;

/**
 * Class BoletoSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos
 * @name    BoletoSubModelo
 * @version 1.0.0
 */
class BoletoSubModelo
{
    /**
     * Gerou boleto (S/N)?
     * Mapeado do campo [cGerado].
     *
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $gerado = null;

    /**
     * Número do boleto.
     * Mapeado do campo [cNumBoleto].
     *
     * Recomenda-se armazenar como VARCHAR(30).
     */
    protected ?string $numBoleto = null;

    /**
     * Número bancário do boleto.
     * Mapeado do campo [cNumBancario].
     *
     * Recomenda-se armazenar como VARCHAR(30).
     */
    protected ?string $numBancario = null;

    /**
     * Data de emissão do boleto.
     * Mapeado do campo [dDtEmBol].
     * No formato: dd/mm/aaaa.
     *
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $dataEmissao = null;

    /**
     * Percentual de juros.
     * Mapeado do campo [nPerJuros].
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $perJuros = null;

    /**
     * Percentual de multa.
     * Mapeado do campo [nPerMulta].
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $perMulta = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getGerado(): ?string
    {
        return $this->gerado;
    }

    /**
     * @param string|null $gerado
     *
     * @return BoletoSubModelo
     */
    public function setGerado(?string $gerado): BoletoSubModelo
    {
        $this->gerado = $gerado;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumBoleto(): ?string
    {
        return $this->numBoleto;
    }

    /**
     * @param string|null $numBoleto
     *
     * @return BoletoSubModelo
     */
    public function setNumBoleto(?string $numBoleto): BoletoSubModelo
    {
        $this->numBoleto = $numBoleto;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumBancario(): ?string
    {
        return $this->numBancario;
    }

    /**
     * @param string|null $numBancario
     *
     * @return BoletoSubModelo
     */
    public function setNumBancario(?string $numBancario): BoletoSubModelo
    {
        $this->numBancario = $numBancario;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataEmissao(): ?string
    {
        return $this->dataEmissao;
    }

    /**
     * @param string|null $dataEmissao
     *
     * @return BoletoSubModelo
     */
    public function setDataEmissao(?string $dataEmissao): BoletoSubModelo
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerJuros(): ?float
    {
        return $this->perJuros;
    }

    /**
     * @param float|null $perJuros
     *
     * @return BoletoSubModelo
     */
    public function setPerJuros(?float $perJuros): BoletoSubModelo
    {
        $this->perJuros = $perJuros;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPerMulta(): ?float
    {
        return $this->perMulta;
    }

    /**
     * @param float|null $perMulta
     *
     * @return BoletoSubModelo
     */
    public function setPerMulta(?float $perMulta): BoletoSubModelo
    {
        $this->perMulta = $perMulta;

        return $this;
    }
}
