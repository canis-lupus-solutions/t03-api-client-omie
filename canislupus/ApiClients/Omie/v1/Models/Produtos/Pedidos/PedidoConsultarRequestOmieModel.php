<?php

namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos;

/**
 * Class PedidoConsultarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos
 * @name    PedidoConsultarRequestOmieModel
 * @version 1.0.0
 */
class PedidoConsultarRequestOmieModel
{
    protected ?int $codigoPedido = null;
    protected ?string $codigoPedidoIntegracao = null;
    protected ?string $numeroPedido = null;


    /**
     * @param int|null $codigoPedido
     */
    public function __construct(?int $codigoPedido = null)
    {
        $this->codigoPedido = $codigoPedido;
    }


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getCodigoPedido(): ?int
    {
        return $this->codigoPedido;
    }

    /**
     * @param int|null $codigoPedido
     *
     * @return PedidoConsultarRequestOmieModel
     */
    public function setCodigoPedido(?int $codigoPedido): PedidoConsultarRequestOmieModel
    {
        $this->codigoPedido = $codigoPedido;

        return $this;
    }

    public function getCodigoPedidoIntegracao(): ?string
    {
        return $this->codigoPedidoIntegracao;
    }

    public function setCodigoPedidoIntegracao(?string $codigoPedidoIntegracao): PedidoConsultarRequestOmieModel
    {
        $this->codigoPedidoIntegracao = $codigoPedidoIntegracao;
        return $this;
    }

    public function getNumeroPedido(): ?string
    {
        return $this->numeroPedido;
    }

    public function setNumeroPedido(?string $numeroPedido): PedidoConsultarRequestOmieModel
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }
}
