<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos;

/**
 * Class ProdutosSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos
 * @name    ProdutosSubModelo
 * @version 1.0.0
 */
class ProdutosSubModelo
{
    /**
     * Considerar todos os produtos nesta tabela de preços? (S/N)
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $todosProdutos = null;

    /**
     * Código da Familia do Produto.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoFamilia = null;

    /**
     * Código do NCM.
     * Recomenda-se armazenar como VARCHAR(13).
     */
    protected ?string $ncm = null;

    /**
     * Código da característica de produto.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoCaracteristica = null;

    /**
     * Conteúdo da característica.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $conteudoCaracteristica = null;

    /**
     * Código do fornecedor.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoFornecedor = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getTodosProdutos(): ?string
    {
        return $this->todosProdutos;
    }

    /**
     * @param string|null $todosProdutos
     *
     * @return ProdutosSubModelo
     */
    public function setTodosProdutos(?string $todosProdutos): ProdutosSubModelo
    {
        $this->todosProdutos = $todosProdutos;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoFamilia(): ?int
    {
        return $this->codigoFamilia;
    }

    /**
     * @param int|null $codigoFamilia
     *
     * @return ProdutosSubModelo
     */
    public function setCodigoFamilia(?int $codigoFamilia): ProdutosSubModelo
    {
        $this->codigoFamilia = $codigoFamilia;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNcm(): ?string
    {
        return $this->ncm;
    }

    /**
     * @param string|null $ncm
     *
     * @return ProdutosSubModelo
     */
    public function setNcm(?string $ncm): ProdutosSubModelo
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoCaracteristica(): ?int
    {
        return $this->codigoCaracteristica;
    }

    /**
     * @param int|null $codigoCaracteristica
     *
     * @return ProdutosSubModelo
     */
    public function setCodigoCaracteristica(?int $codigoCaracteristica): ProdutosSubModelo
    {
        $this->codigoCaracteristica = $codigoCaracteristica;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConteudoCaracteristica(): ?string
    {
        return $this->conteudoCaracteristica;
    }

    /**
     * @param string|null $conteudoCaracteristica
     *
     * @return ProdutosSubModelo
     */
    public function setConteudoCaracteristica(?string $conteudoCaracteristica): ProdutosSubModelo
    {
        $this->conteudoCaracteristica = $conteudoCaracteristica;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoFornecedor(): ?int
    {
        return $this->codigoFornecedor;
    }

    /**
     * @param int|null $codigoFornecedor
     *
     * @return ProdutosSubModelo
     */
    public function setCodigoFornecedor(?int $codigoFornecedor): ProdutosSubModelo
    {
        $this->codigoFornecedor = $codigoFornecedor;

        return $this;
    }
}
