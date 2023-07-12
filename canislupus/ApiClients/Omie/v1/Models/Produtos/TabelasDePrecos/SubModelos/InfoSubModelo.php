<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos;

/**
 * Class InfoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos
 * @name    InfoSubModelo
 * @version 1.0.0
 */
class InfoSubModelo
{
    /**
     * Data da Inclusão.
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $dataInclusao = null;

    /**
     * Hora da Inclusão.
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    protected ?string $horaInclusao = null;

    /**
     * Usuário da Inclusão.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $usuarioInclusao = null;

    /**
     * Data da Alteração.
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $dataAlteracao = null;

    /**
     * Hora da Alteração.
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    protected ?string $horaAlteracao = null;

    /**
     * Usuário da Alteração.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $usuarioAlteracao = null;

    /**
     * Importado pela API (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $importadoPelaApi = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getDataInclusao(): ?string
    {
        return $this->dataInclusao;
    }

    /**
     * @param string|null $dataInclusao
     *
     * @return InfoSubModelo
     */
    public function setDataInclusao(?string $dataInclusao): InfoSubModelo
    {
        $this->dataInclusao = $dataInclusao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHoraInclusao(): ?string
    {
        return $this->horaInclusao;
    }

    /**
     * @param string|null $horaInclusao
     *
     * @return InfoSubModelo
     */
    public function setHoraInclusao(?string $horaInclusao): InfoSubModelo
    {
        $this->horaInclusao = $horaInclusao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsuarioInclusao(): ?string
    {
        return $this->usuarioInclusao;
    }

    /**
     * @param string|null $usuarioInclusao
     *
     * @return InfoSubModelo
     */
    public function setUsuarioInclusao(?string $usuarioInclusao): InfoSubModelo
    {
        $this->usuarioInclusao = $usuarioInclusao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataAlteracao(): ?string
    {
        return $this->dataAlteracao;
    }

    /**
     * @param string|null $dataAlteracao
     *
     * @return InfoSubModelo
     */
    public function setDataAlteracao(?string $dataAlteracao): InfoSubModelo
    {
        $this->dataAlteracao = $dataAlteracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHoraAlteracao(): ?string
    {
        return $this->horaAlteracao;
    }

    /**
     * @param string|null $horaAlteracao
     *
     * @return InfoSubModelo
     */
    public function setHoraAlteracao(?string $horaAlteracao): InfoSubModelo
    {
        $this->horaAlteracao = $horaAlteracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsuarioAlteracao(): ?string
    {
        return $this->usuarioAlteracao;
    }

    /**
     * @param string|null $usuarioAlteracao
     *
     * @return InfoSubModelo
     */
    public function setUsuarioAlteracao(?string $usuarioAlteracao): InfoSubModelo
    {
        $this->usuarioAlteracao = $usuarioAlteracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImportadoPelaApi(): ?string
    {
        return $this->importadoPelaApi;
    }

    /**
     * @param string|null $importadoPelaApi
     *
     * @return InfoSubModelo
     */
    public function setImportadoPelaApi(?string $importadoPelaApi): InfoSubModelo
    {
        $this->importadoPelaApi = $importadoPelaApi;

        return $this;
    }
}
