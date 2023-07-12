<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber;

/**
 * Class ContaReceberListarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber
 * @name    ContaReceberListarRequestOmieModel
 * @version 1.0.0
 */
class ContaReceberListarRequestOmieModel
{
    protected string $apenasImportadoApi = "N";
    protected string $filtrarApenasTitulosEmAberto = "S";
    protected ?string $filtrarCliente = null;


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
     * @return ContaReceberListarRequestOmieModel
     */
    public function setApenasImportadoApi(string $apenasImportadoApi): ContaReceberListarRequestOmieModel
    {
        $this->apenasImportadoApi = $apenasImportadoApi;

        return $this;
    }

    /**
     * @return string
     */
    public function getFiltrarApenasTitulosEmAberto(): string
    {
        return $this->filtrarApenasTitulosEmAberto;
    }

    /**
     * @param string $filtrarApenasTitulosEmAberto
     *
     * @return ContaReceberListarRequestOmieModel
     */
    public function setFiltrarApenasTitulosEmAberto(string $filtrarApenasTitulosEmAberto): ContaReceberListarRequestOmieModel
    {
        $this->filtrarApenasTitulosEmAberto = $filtrarApenasTitulosEmAberto;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarCliente(): ?string
    {
        return $this->filtrarCliente;
    }

    /**
     * @param string|null $filtrarCliente
     *
     * @return ContaReceberListarRequestOmieModel
     */
    public function setFiltrarCliente(?string $filtrarCliente): ContaReceberListarRequestOmieModel
    {
        $this->filtrarCliente = $filtrarCliente;

        return $this;
    }
}
