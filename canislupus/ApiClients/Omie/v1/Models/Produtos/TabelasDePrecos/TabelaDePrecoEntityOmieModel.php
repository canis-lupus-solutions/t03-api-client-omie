<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos;

use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\CaracteristicasSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ClientesSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\OutrasInfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ProdutosSubModelo;

/**
 * Class TabelaDePrecoEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos
 * @name    TabelaDePrecoEntityOmieModel
 * @version 1.0.0
 */
class TabelaDePrecoEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [nCodTabPreco].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código interno de integração do omie, mapeado através do campo [cCodIntTabPreco].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;

    /**
     * Nome da Tabela de Preço.
     * Recomenda-se armazenar como VARCHAR(50).
     */
    protected ?string $nome = null;

    /**
     * Código da Tabela de Preço.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $codigo = null;

    /**
     * Indica se a tabela de preços está ativa (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $ativa = null;

    /**
     * Origem da Tabela de Preços. Pode ser:
     * PRD - Lê o preço do cadastro de produtos.
     * CMC - Lê o preço do CMC do produto.
     * TBL - Lê o preço de uma tablea específica informada na tag 'nCodOrigTab'.
     * Recomenda-se armazenar como VARCHAR(3).
     */
    protected ?string $origem = null;

    /**
     * Dados dos filtros por produto.
     */
    protected ?ProdutosSubModelo $produtos = null;

    /**
     * Dados dos filtros do cliente.
     */
    protected ?ClientesSubModelo $clientes = null;

    /**
     * Outros filtros da tabela de preços.
     */
    protected ?OutrasInfoSubModelo $outrasInfo = null;

    /**
     * Características da tabela de preço.
     */
    protected ?CaracteristicasSubModelo $caracteristicas = null;

    /**
     * Informações do cadastro da tabela de preços.
     */
    protected ?InfoSubModelo $info = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getIdOmie(): ?int
    {
        return $this->idOmie;
    }

    /**
     * @param int|null $idOmie
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): TabelaDePrecoEntityOmieModel
    {
        $this->idOmie = $idOmie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdIntegracao(): ?string
    {
        return $this->idIntegracao;
    }

    /**
     * @param string|null $idIntegracao
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): TabelaDePrecoEntityOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string|null $nome
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setNome(?string $nome): TabelaDePrecoEntityOmieModel
    {
        $this->nome = $nome;

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
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setCodigo(?string $codigo): TabelaDePrecoEntityOmieModel
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAtiva(): ?string
    {
        return $this->ativa;
    }

    /**
     * @param string|null $ativa
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setAtiva(?string $ativa): TabelaDePrecoEntityOmieModel
    {
        $this->ativa = $ativa;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrigem(): ?string
    {
        return $this->origem;
    }

    /**
     * @param string|null $origem
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setOrigem(?string $origem): TabelaDePrecoEntityOmieModel
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ProdutosSubModelo|null
     */
    public function getProdutos(): ?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ProdutosSubModelo
    {
        return $this->produtos;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ProdutosSubModelo|null $produtos
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setProdutos(?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ProdutosSubModelo $produtos): TabelaDePrecoEntityOmieModel
    {
        $this->produtos = $produtos;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ClientesSubModelo|null
     */
    public function getClientes(): ?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ClientesSubModelo
    {
        return $this->clientes;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ClientesSubModelo|null $clientes
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setClientes(?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\ClientesSubModelo $clientes): TabelaDePrecoEntityOmieModel
    {
        $this->clientes = $clientes;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\OutrasInfoSubModelo|null
     */
    public function getOutrasInfo(): ?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\OutrasInfoSubModelo
    {
        return $this->outrasInfo;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\OutrasInfoSubModelo|null $outrasInfo
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setOutrasInfo(?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\OutrasInfoSubModelo $outrasInfo): TabelaDePrecoEntityOmieModel
    {
        $this->outrasInfo = $outrasInfo;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\CaracteristicasSubModelo|null
     */
    public function getCaracteristicas(): ?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\CaracteristicasSubModelo
    {
        return $this->caracteristicas;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\CaracteristicasSubModelo|null $caracteristicas
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setCaracteristicas(?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\CaracteristicasSubModelo $caracteristicas): TabelaDePrecoEntityOmieModel
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\InfoSubModelo|null
     */
    public function getInfo(): ?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\InfoSubModelo
    {
        return $this->info;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\InfoSubModelo|null $info
     *
     * @return TabelaDePrecoEntityOmieModel
     */
    public function setInfo(?\CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos\InfoSubModelo $info): TabelaDePrecoEntityOmieModel
    {
        $this->info = $info;

        return $this;
    }
}
