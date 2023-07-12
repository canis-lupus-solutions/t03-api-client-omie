<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class PedidoStatusNfeSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    PedidoStatusNfeSubModelo
 * @version 1.0.0
 */
class PedidoStatusNfeSubModelo
{
    /**
     * Chave de Acesso da NF-e.
     *
     * Recomenda-se armazenar como VARCHAR(44).
     */
    protected ?string $chaveNfe = null;

    /**
     * Número da NF-e gerada.
     *
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $numeroNfe = null;

    /**
     * Link para o DANFE da NF-e gerada.
     *
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $danfe = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getChaveNfe(): ?string
    {
        return $this->chaveNfe;
    }

    /**
     * @param string|null $chaveNfe
     *
     * @return PedidoStatusNfeSubModelo
     */
    public function setChaveNfe(?string $chaveNfe): PedidoStatusNfeSubModelo
    {
        $this->chaveNfe = $chaveNfe;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroNfe(): ?string
    {
        return $this->numeroNfe;
    }

    /**
     * @param string|null $numeroNfe
     *
     * @return PedidoStatusNfeSubModelo
     */
    public function setNumeroNfe(?string $numeroNfe): PedidoStatusNfeSubModelo
    {
        $this->numeroNfe = $numeroNfe;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDanfe(): ?string
    {
        return $this->danfe;
    }

    /**
     * @param string|null $danfe
     *
     * @return PedidoStatusNfeSubModelo
     */
    public function setDanfe(?string $danfe): PedidoStatusNfeSubModelo
    {
        $this->danfe = $danfe;

        return $this;
    }
}
