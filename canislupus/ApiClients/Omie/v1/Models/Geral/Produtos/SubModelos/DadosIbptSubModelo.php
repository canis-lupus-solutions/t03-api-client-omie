<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos;

/**
 * Class DadosIbptSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos
 * @name    DadosIbptSubModelo
 * @version 1.0.0
 */
class DadosIbptSubModelo
{
    /**
     * Carga tributária federal para os produtos nacionais.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $aliquotaFederal = null;

    /**
     * Carga tributária estadual.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $aliquotaEstadual = null;

    /**
     * Carga tributária municipal.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $aliquotaMunicipal = null;

    /**
     * Fonte do IBPT.
     * Recomenda-se armazenar como VARCHAR(34).
     */
    protected ?string $fonte = null;

    /**
     * Número da versão do arquivo do IBPT.
     * Recomenda-se armazenar como VARCHAR(6).
     */
    protected ?string $chave = null;

    /**
     * Versão da Tabela IBPT.
     * Recomenda-se armazenar como VARCHAR(6).
     */
    protected ?string $versao = null;

    /**
     * Tabela do IBPT válilda a partir da data.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $validoDe = null;

    /**
     * Tabela do IBPT valida até a data.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $validoAte = null;


    /* GETTERS/SETTERS */

    /**
     * @return float|null
     */
    public function getAliquotaFederal(): ?float
    {
        return $this->aliquotaFederal;
    }

    /**
     * @param float|null $aliquotaFederal
     *
     * @return DadosIbptSubModelo
     */
    public function setAliquotaFederal(?float $aliquotaFederal): DadosIbptSubModelo
    {
        $this->aliquotaFederal = $aliquotaFederal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaEstadual(): ?float
    {
        return $this->aliquotaEstadual;
    }

    /**
     * @param float|null $aliquotaEstadual
     *
     * @return DadosIbptSubModelo
     */
    public function setAliquotaEstadual(?float $aliquotaEstadual): DadosIbptSubModelo
    {
        $this->aliquotaEstadual = $aliquotaEstadual;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaMunicipal(): ?float
    {
        return $this->aliquotaMunicipal;
    }

    /**
     * @param float|null $aliquotaMunicipal
     *
     * @return DadosIbptSubModelo
     */
    public function setAliquotaMunicipal(?float $aliquotaMunicipal): DadosIbptSubModelo
    {
        $this->aliquotaMunicipal = $aliquotaMunicipal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFonte(): ?string
    {
        return $this->fonte;
    }

    /**
     * @param string|null $fonte
     *
     * @return DadosIbptSubModelo
     */
    public function setFonte(?string $fonte): DadosIbptSubModelo
    {
        $this->fonte = $fonte;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChave(): ?string
    {
        return $this->chave;
    }

    /**
     * @param string|null $chave
     *
     * @return DadosIbptSubModelo
     */
    public function setChave(?string $chave): DadosIbptSubModelo
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersao(): ?string
    {
        return $this->versao;
    }

    /**
     * @param string|null $versao
     *
     * @return DadosIbptSubModelo
     */
    public function setVersao(?string $versao): DadosIbptSubModelo
    {
        $this->versao = $versao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValidoDe(): ?string
    {
        return $this->validoDe;
    }

    /**
     * @param string|null $validoDe
     *
     * @return DadosIbptSubModelo
     */
    public function setValidoDe(?string $validoDe): DadosIbptSubModelo
    {
        $this->validoDe = $validoDe;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValidoAte(): ?string
    {
        return $this->validoAte;
    }

    /**
     * @param string|null $validoAte
     *
     * @return DadosIbptSubModelo
     */
    public function setValidoAte(?string $validoAte): DadosIbptSubModelo
    {
        $this->validoAte = $validoAte;

        return $this;
    }
}
