<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos;

/**
 * Class ProdutoListarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos
 * @name    ProdutoListarRequestOmieModel
 * @version 1.0.0
 */
class ProdutoListarRequestOmieModel
{
    protected string $apenasImportadoApi = "N";
    protected string $filtrarApenasOmiepdv = "N";
    protected ?string $filtrarApenasMarketPlace = null;
    protected ?string $inativo = null;


    /* GETTERS/SETTERS */

    /**
     * @return string
     */
    public function getApenasImportadoApi(): string
    {
        return $this->apenasImportadoApi;
    }

    /**
     * @param string $apenasImportadoApi
     *
     * @return ProdutoListarRequestOmieModel
     */
    public function setApenasImportadoApi(string $apenasImportadoApi): ProdutoListarRequestOmieModel
    {
        $this->apenasImportadoApi = $apenasImportadoApi;

        return $this;
    }

    /**
     * @return string
     */
    public function getFiltrarApenasOmiepdv(): string
    {
        return $this->filtrarApenasOmiepdv;
    }

    /**
     * @param string $filtrarApenasOmiepdv
     *
     * @return ProdutoListarRequestOmieModel
     */
    public function setFiltrarApenasOmiepdv(string $filtrarApenasOmiepdv): ProdutoListarRequestOmieModel
    {
        $this->filtrarApenasOmiepdv = $filtrarApenasOmiepdv;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarApenasMarketPlace(): ?string
    {
        return $this->filtrarApenasMarketPlace;
    }

    /**
     * @param string|null $filtrarApenasMarketPlace
     *
     * @return ProdutoListarRequestOmieModel
     */
    public function setFiltrarApenasMarketPlace(?string $filtrarApenasMarketPlace): ProdutoListarRequestOmieModel
    {
        $this->filtrarApenasMarketPlace = $filtrarApenasMarketPlace;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInativo(): ?string
    {
        return $this->inativo;
    }

    /**
     * @param string|null $inativo
     *
     * @return ProdutoListarRequestOmieModel
     */
    public function setInativo(?string $inativo): ProdutoListarRequestOmieModel
    {
        $this->inativo = $inativo;

        return $this;
    }
}
