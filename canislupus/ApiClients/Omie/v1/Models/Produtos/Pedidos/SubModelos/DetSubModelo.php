<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class DetSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    DetSubModelo
 * @version 1.0.0
 */
class DetSubModelo
{
    /**
     * Identificação do Item do Pedido de Vendas.
     *
     * Preenchimento Obrigatório.
     */
    protected ?IdeSubModelo $ide = null;

    /**
     * Identificação do Produto do Item do Pedido de Vendas.
     *
     * Preenchimento Obrigatório.
     */
    protected ?ProdutoSubModelo $produto = null;

    /**
     * Dados da aba 'Informações Adicionais' do Item do Pedido de Vendas.
     *
     * Preenchimento Opcional.
     */
    protected ?DetInfAdicSubModelo $infAdic = null;


    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\IdeSubModelo|null     $ide
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ProdutoSubModelo|null $produto
     */
    public function __construct(
        ?IdeSubModelo     $ide = null,
        ?ProdutoSubModelo $produto = null
    ) {
        $this->ide = $ide;
        $this->produto = $produto;
    }


    /* GETTERS/SETTERS */

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\IdeSubModelo|null
     */
    public function getIde(): ?IdeSubModelo
    {
        return $this->ide;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\IdeSubModelo|null $ide
     *
     * @return DetSubModelo
     */
    public function setIde(?IdeSubModelo $ide): DetSubModelo
    {
        $this->ide = $ide;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ProdutoSubModelo|null
     */
    public function getProduto(): ?ProdutoSubModelo
    {
        return $this->produto;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ProdutoSubModelo|null $produto
     *
     * @return DetSubModelo
     */
    public function setProduto(?ProdutoSubModelo $produto): DetSubModelo
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetInfAdicSubModelo|null
     */
    public function getInfAdic(): ?DetInfAdicSubModelo
    {
        return $this->infAdic;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetInfAdicSubModelo|null $infAdic
     *
     * @return DetSubModelo
     */
    public function setInfAdic(?DetInfAdicSubModelo $infAdic): DetSubModelo
    {
        $this->infAdic = $infAdic;

        return $this;
    }
}
