<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class IdeSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    IdeSubModelo
 * @version 1.0.0
 */
class IdeSubModelo
{
    /**
     * Código de Integração do Item do Pedido de Venda.
     *
     * Preenchimento Obrigatório.
     * Informe a identificação do Item do Pedido de Venda.
     * Caso você não tenha essa informação no seu aplicativo, informe o
     * número sequencial de cada item do pedido.
     * Informa de 1 a 199.
     *
     * Recomenda-se armazenar como VARCHAR(30).
     */
    protected ?string $codigoItemIntegracao = null;


    /**
     * @param string|null $codigoItemIntegracao
     */
    public function __construct(?string $codigoItemIntegracao = null)
    {
        $this->codigoItemIntegracao = $codigoItemIntegracao;
    }


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getCodigoItemIntegracao(): ?string
    {
        return $this->codigoItemIntegracao;
    }

    /**
     * @param string|null $codigoItemIntegracao
     *
     * @return IdeSubModelo
     */
    public function setCodigoItemIntegracao(?string $codigoItemIntegracao): IdeSubModelo
    {
        $this->codigoItemIntegracao = $codigoItemIntegracao;

        return $this;
    }
}
