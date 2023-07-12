<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos;

/**
 * Class ProdutoExcluirRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos
 * @name    ProdutoExcluirRequestOmieModel
 * @version 1.0.0
 */
class ProdutoExcluirRequestOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;
    protected ?string $codigo = null;


    /**
     * ProdutoExcluirRequestOmieModel constructor.
     *
     * @param int|null    $idOmie
     * @param string|null $idIntegracao
     * @param string|null $codigo
     */
    public function __construct(?int $idOmie = null, ?string $idIntegracao = null, ?string $codigo = null)
    {
        $this->idOmie = $idOmie;
        $this->idIntegracao = $idIntegracao;
        $this->codigo = $codigo;
    }


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
     * @return ProdutoExcluirRequestOmieModel
     */
    public function setIdOmie(?int $idOmie): ProdutoExcluirRequestOmieModel
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
     * @return ProdutoExcluirRequestOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ProdutoExcluirRequestOmieModel
    {
        $this->idIntegracao = $idIntegracao;

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
     * @return ProdutoExcluirRequestOmieModel
     */
    public function setCodigo(?string $codigo): ProdutoExcluirRequestOmieModel
    {
        $this->codigo = $codigo;

        return $this;
    }
}
