<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Estoque\Consultas;

/**
 * Class PosicaoEstoqueOmie.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Estoque\Consultas
 * @name    PosicaoEstoqueOmie
 * @version 1.0.0
 */
class PosicaoEstoqueOmie
{
    /**
     * Código do local do estoque.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoLocalEstoque = null;

    /**
     * Id Omie do Produto [nCodProd].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmieProduto = null;

    /**
     * Código do produto [cCodigo].
     *
     * Conforme informado na tela de cadastro de Produtos.
     *
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $codigoProduto = null;

    /**
     * Descrição do Produto.
     *
     * Recomenda-se armazenar como VARCHAR(120).
     */
    protected ?string $descricao = null;

    /**
     * Preço Unitário de venda.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $precoUnitario = null;

    /**
     * Custo Médio Contábil [nCMC].
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $custoMedioContabil = null;

    /**
     * Saldo do produto.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $saldo = null;

    /**
     * Saldo pendente em pedidos de venda em aberto (não faturados) e não cancelados [nPendente].
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $saldoPendente = null;

    /**
     * Indica a quantidade reservada do estoque para o produto.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $reservado = null;

    /**
     * Indica a quantidade física em estoque para o produto.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $fisico = null;

    /**
     * Estoque mínimo para o produto.
     *
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $estoqueMinimo = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getCodigoLocalEstoque(): ?int
    {
        return $this->codigoLocalEstoque;
    }

    /**
     * @param int|null $codigoLocalEstoque
     *
     * @return PosicaoEstoqueOmie
     */
    public function setCodigoLocalEstoque(?int $codigoLocalEstoque): PosicaoEstoqueOmie
    {
        $this->codigoLocalEstoque = $codigoLocalEstoque;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdOmieProduto(): ?int
    {
        return $this->idOmieProduto;
    }

    /**
     * @param int|null $idOmieProduto
     *
     * @return PosicaoEstoqueOmie
     */
    public function setIdOmieProduto(?int $idOmieProduto): PosicaoEstoqueOmie
    {
        $this->idOmieProduto = $idOmieProduto;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoProduto(): ?string
    {
        return $this->codigoProduto;
    }

    /**
     * @param string|null $codigoProduto
     *
     * @return PosicaoEstoqueOmie
     */
    public function setCodigoProduto(?string $codigoProduto): PosicaoEstoqueOmie
    {
        $this->codigoProduto = $codigoProduto;

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
     * @return PosicaoEstoqueOmie
     */
    public function setDescricao(?string $descricao): PosicaoEstoqueOmie
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrecoUnitario(): ?float
    {
        return $this->precoUnitario;
    }

    /**
     * @param float|null $precoUnitario
     *
     * @return PosicaoEstoqueOmie
     */
    public function setPrecoUnitario(?float $precoUnitario): PosicaoEstoqueOmie
    {
        $this->precoUnitario = $precoUnitario;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCustoMedioContabil(): ?float
    {
        return $this->custoMedioContabil;
    }

    /**
     * @param float|null $custoMedioContabil
     *
     * @return PosicaoEstoqueOmie
     */
    public function setCustoMedioContabil(?float $custoMedioContabil): PosicaoEstoqueOmie
    {
        $this->custoMedioContabil = $custoMedioContabil;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSaldo(): ?float
    {
        return $this->saldo;
    }

    /**
     * @param float|null $saldo
     *
     * @return PosicaoEstoqueOmie
     */
    public function setSaldo(?float $saldo): PosicaoEstoqueOmie
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSaldoPendente(): ?float
    {
        return $this->saldoPendente;
    }

    /**
     * @param float|null $saldoPendente
     *
     * @return PosicaoEstoqueOmie
     */
    public function setSaldoPendente(?float $saldoPendente): PosicaoEstoqueOmie
    {
        $this->saldoPendente = $saldoPendente;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getReservado(): ?float
    {
        return $this->reservado;
    }

    /**
     * @param float|null $reservado
     *
     * @return PosicaoEstoqueOmie
     */
    public function setReservado(?float $reservado): PosicaoEstoqueOmie
    {
        $this->reservado = $reservado;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFisico(): ?float
    {
        return $this->fisico;
    }

    /**
     * @param float|null $fisico
     *
     * @return PosicaoEstoqueOmie
     */
    public function setFisico(?float $fisico): PosicaoEstoqueOmie
    {
        $this->fisico = $fisico;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getEstoqueMinimo(): ?float
    {
        return $this->estoqueMinimo;
    }

    /**
     * @param float|null $estoqueMinimo
     *
     * @return PosicaoEstoqueOmie
     */
    public function setEstoqueMinimo(?float $estoqueMinimo): PosicaoEstoqueOmie
    {
        $this->estoqueMinimo = $estoqueMinimo;

        return $this;
    }
}
