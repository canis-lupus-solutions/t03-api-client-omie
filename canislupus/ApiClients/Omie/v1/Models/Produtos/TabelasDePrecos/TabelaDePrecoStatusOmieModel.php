<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos;

/**
 * Class TabelaDePrecoStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos
 * @name    TabelaDePrecoStatusOmieModel
 * @version 1.0.0
 */
class TabelaDePrecoStatusOmieModel
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
     * @return TabelaDePrecoStatusOmieModel
     */
    public function setIdOmie(?int $idOmie): TabelaDePrecoStatusOmieModel
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
     * @return TabelaDePrecoStatusOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): TabelaDePrecoStatusOmieModel
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
     * @return TabelaDePrecoStatusOmieModel
     */
    public function setCodigoStatus(?string $codigoStatus): TabelaDePrecoStatusOmieModel
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
     * @return TabelaDePrecoStatusOmieModel
     */
    public function setDescricaoStatus(?string $descricaoStatus): TabelaDePrecoStatusOmieModel
    {
        $this->descricaoStatus = $descricaoStatus;

        return $this;
    }
}
