<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos;

/**
 * Class PedidoListarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos
 * @name    PedidoListarRequestOmieModel
 * @version 1.0.0
 */
class PedidoListarRequestOmieModel
{
    protected string $apenasImportadoApi = "N";
    protected ?int $numeroPedidoDe = null;
    protected ?int $numeroPedidoAte = null;


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
     * @return PedidoListarRequestOmieModel
     */
    public function setApenasImportadoApi(string $apenasImportadoApi): PedidoListarRequestOmieModel
    {
        $this->apenasImportadoApi = $apenasImportadoApi;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeroPedidoDe(): ?int
    {
        return $this->numeroPedidoDe;
    }

    /**
     * @param int|null $numeroPedidoDe
     *
     * @return PedidoListarRequestOmieModel
     */
    public function setNumeroPedidoDe(?int $numeroPedidoDe): PedidoListarRequestOmieModel
    {
        $this->numeroPedidoDe = $numeroPedidoDe;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeroPedidoAte(): ?int
    {
        return $this->numeroPedidoAte;
    }

    /**
     * @param int|null $numeroPedidoAte
     *
     * @return PedidoListarRequestOmieModel
     */
    public function setNumeroPedidoAte(?int $numeroPedidoAte): PedidoListarRequestOmieModel
    {
        $this->numeroPedidoAte = $numeroPedidoAte;

        return $this;
    }
}
