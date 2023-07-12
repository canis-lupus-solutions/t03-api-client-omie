<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos;

/**
 * Class ProdutoStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos
 * @name    ProdutoStatusOmieModel
 * @version 1.0.0
 */
class ProdutoStatusOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;
    protected ?string $codigoStatus = null;
    protected ?string $descricaoStatus = null;


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
     * @return ProdutoStatusOmieModel
     */
    public function setIdOmie(?int $idOmie): ProdutoStatusOmieModel
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
     * @return ProdutoStatusOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ProdutoStatusOmieModel
    {
        $this->idIntegracao = $idIntegracao;

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
     * @return ProdutoStatusOmieModel
     */
    public function setCodigoStatus(?string $codigoStatus): ProdutoStatusOmieModel
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
     * @return ProdutoStatusOmieModel
     */
    public function setDescricaoStatus(?string $descricaoStatus): ProdutoStatusOmieModel
    {
        $this->descricaoStatus = $descricaoStatus;

        return $this;
    }
}
