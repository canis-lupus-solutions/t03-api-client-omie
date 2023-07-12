<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class ProdutoSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    ProdutoSubModelo
 * @version 1.0.0
 */
class ProdutoSubModelo
{
    /**
     * ID do Produto.
     *
     * Preenchimento Obrigatório.
     * Esse campo não é exibido na tela do Pedido de Vendas.
     * É uma informação interna, utilizada apenas nas APIs.
     * Utilize a tag 'codigo_produto' do método 'ListarProdutos' da API
     * /api/v1/geral/produtos/ para obter essa informação.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoProduto = null;

    /**
     * Código do Produto exibido na tela do Pedido de Vendas.
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $codigo = null;

    /**
     * Descrição do Produto.
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como VARCHAR(120).
     */
    protected ?string $descricao = null;

    /**
     * Unidade.
     * Utilize a tag 'codigo' do método 'ListarUnidades' da API
     * /api/v1/geral/unidade/ para obter essa informação.
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como VARCHAR(6).
     */
    protected ?string $unidade = null;

    /**
     * Quantidade.
     *
     * Preenchimento Obrigatório.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $quantidade = null;

    /**
     * Valor Unitário.
     *
     * Preenchimento Obrigatório.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $valorUnitario = null;

    /**
     * Valor Total.
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $valorTotal = null;

    /**
     * Valor da Mercadoria.
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $valorMercadoria = null;


    /**
     * @param int|null   $codigoProduto
     * @param float|null $quantidade
     * @param float|null $valorUnitario
     */
    public function __construct(
        ?int   $codigoProduto = null,
        ?float $quantidade = null,
        ?float $valorUnitario = null
    ) {
        $this->codigoProduto = $codigoProduto;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getCodigoProduto(): ?int
    {
        return $this->codigoProduto;
    }

    /**
     * @param int|null $codigoProduto
     *
     * @return ProdutoSubModelo
     */
    public function setCodigoProduto(?int $codigoProduto): ProdutoSubModelo
    {
        $this->codigoProduto = $codigoProduto;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    /**
     * @param string|null $codigo
     *
     * @return ProdutoSubModelo
     */
    public function setCodigo(?string $codigo): ProdutoSubModelo
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    /**
     * @param string|null $descricao
     *
     * @return ProdutoSubModelo
     */
    public function setDescricao(?string $descricao): ProdutoSubModelo
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnidade(): ?string
    {
        return $this->unidade;
    }

    /**
     * @param string|null $unidade
     *
     * @return ProdutoSubModelo
     */
    public function setUnidade(?string $unidade): ProdutoSubModelo
    {
        $this->unidade = $unidade;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQuantidade(): ?float
    {
        return $this->quantidade;
    }

    /**
     * @param float|null $quantidade
     *
     * @return ProdutoSubModelo
     */
    public function setQuantidade(?float $quantidade): ProdutoSubModelo
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorUnitario(): ?float
    {
        return $this->valorUnitario;
    }

    /**
     * @param float|null $valorUnitario
     *
     * @return ProdutoSubModelo
     */
    public function setValorUnitario(?float $valorUnitario): ProdutoSubModelo
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorTotal(): ?float
    {
        return $this->valorTotal;
    }

    /**
     * @param float|null $valorTotal
     *
     * @return ProdutoSubModelo
     */
    public function setValorTotal(?float $valorTotal): ProdutoSubModelo
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorMercadoria(): ?float
    {
        return $this->valorMercadoria;
    }

    /**
     * @param float|null $valorMercadoria
     *
     * @return ProdutoSubModelo
     */
    public function setValorMercadoria(?float $valorMercadoria): ProdutoSubModelo
    {
        $this->valorMercadoria = $valorMercadoria;

        return $this;
    }
}
