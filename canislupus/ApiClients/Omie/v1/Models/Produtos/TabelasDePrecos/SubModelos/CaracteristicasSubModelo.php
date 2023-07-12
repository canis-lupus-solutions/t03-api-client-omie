<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos;

/**
 * Class CaracteristicasSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos
 * @name    CaracteristicasSubModelo
 * @version 1.0.0
 */
class CaracteristicasSubModelo
{
    /**
     * Indica se a Tabela de Preço possui Validade (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $temValidade = null;

    /**
     * Data Inicial da Validade da Tabela de Preço.
     * Formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $dataInicialValidade = null;

    /**
     * Data Final de Validade Tabela de Preço.
     * Formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $dataFinalValidade = null;

    /**
     * Indica se a Tabela de Preço possui Desconto Sugerido ou Máximo (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $temDesconto = null;

    /**
     * Percentual de Desconto Sugerido.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $descontoSugerido = null;

    /**
     * Percentual de Desconto Máximo Permitido.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $percentualDescontoMaximo = null;

    /**
     * Indica se deve Arredondar o preço dos produtos (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $arredondaPreco = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getTemValidade(): ?string
    {
        return $this->temValidade;
    }

    /**
     * @param string|null $temValidade
     *
     * @return CaracteristicasSubModelo
     */
    public function setTemValidade(?string $temValidade): CaracteristicasSubModelo
    {
        $this->temValidade = $temValidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataInicialValidade(): ?string
    {
        return $this->dataInicialValidade;
    }

    /**
     * @param string|null $dataInicialValidade
     *
     * @return CaracteristicasSubModelo
     */
    public function setDataInicialValidade(?string $dataInicialValidade): CaracteristicasSubModelo
    {
        $this->dataInicialValidade = $dataInicialValidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataFinalValidade(): ?string
    {
        return $this->dataFinalValidade;
    }

    /**
     * @param string|null $dataFinalValidade
     *
     * @return CaracteristicasSubModelo
     */
    public function setDataFinalValidade(?string $dataFinalValidade): CaracteristicasSubModelo
    {
        $this->dataFinalValidade = $dataFinalValidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTemDesconto(): ?string
    {
        return $this->temDesconto;
    }

    /**
     * @param string|null $temDesconto
     *
     * @return CaracteristicasSubModelo
     */
    public function setTemDesconto(?string $temDesconto): CaracteristicasSubModelo
    {
        $this->temDesconto = $temDesconto;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDescontoSugerido(): ?float
    {
        return $this->descontoSugerido;
    }

    /**
     * @param float|null $descontoSugerido
     *
     * @return CaracteristicasSubModelo
     */
    public function setDescontoSugerido(?float $descontoSugerido): CaracteristicasSubModelo
    {
        $this->descontoSugerido = $descontoSugerido;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercentualDescontoMaximo(): ?float
    {
        return $this->percentualDescontoMaximo;
    }

    /**
     * @param float|null $percentualDescontoMaximo
     *
     * @return CaracteristicasSubModelo
     */
    public function setPercentualDescontoMaximo(?float $percentualDescontoMaximo): CaracteristicasSubModelo
    {
        $this->percentualDescontoMaximo = $percentualDescontoMaximo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArredondaPreco(): ?string
    {
        return $this->arredondaPreco;
    }

    /**
     * @param string|null $arredondaPreco
     *
     * @return CaracteristicasSubModelo
     */
    public function setArredondaPreco(?string $arredondaPreco): CaracteristicasSubModelo
    {
        $this->arredondaPreco = $arredondaPreco;

        return $this;
    }
}
