<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos;

/**
 * Class PedidoStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos
 * @name    PedidoStatusOmieModel
 * @version 1.0.0
 */
class PedidoStatusOmieModel
{
    protected ?int $codigoPedido = null;
    protected ?string $codigoPedidoIntegracao = null;
    protected ?string $codigoStatus = null;
    protected ?string $descricaoStatus = null;


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
     * @return PedidoStatusOmieModel
     */
    public function setCodigoPedido(?int $codigoPedido): PedidoStatusOmieModel
    {
        $this->codigoPedido = $codigoPedido;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoPedidoIntegracao(): ?string
    {
        return $this->codigoPedidoIntegracao;
    }

    /**
     * @param string|null $codigoPedidoIntegracao
     *
     * @return PedidoStatusOmieModel
     */
    public function setCodigoPedidoIntegracao(?string $codigoPedidoIntegracao): PedidoStatusOmieModel
    {
        $this->codigoPedidoIntegracao = $codigoPedidoIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoStatus(): ?string
    {
        return $this->codigoStatus;
    }

    /**
     * @param string|null $codigoStatus
     *
     * @return PedidoStatusOmieModel
     */
    public function setCodigoStatus(?string $codigoStatus): PedidoStatusOmieModel
    {
        $this->codigoStatus = $codigoStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricaoStatus(): ?string
    {
        return $this->descricaoStatus;
    }

    /**
     * @param string|null $descricaoStatus
     *
     * @return PedidoStatusOmieModel
     */
    public function setDescricaoStatus(?string $descricaoStatus): PedidoStatusOmieModel
    {
        $this->descricaoStatus = $descricaoStatus;

        return $this;
    }
}
