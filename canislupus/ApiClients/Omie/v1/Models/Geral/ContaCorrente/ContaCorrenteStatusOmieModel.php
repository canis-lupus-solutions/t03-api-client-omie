<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente;

/**
 * Class ContaCorrenteStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente
 * @name    ContaCorrenteStatusOmieModel
 * @version 1.0.0
 */
class ContaCorrenteStatusOmieModel
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
     * @return ContaCorrenteStatusOmieModel
     */
    public function setIdOmie(?int $idOmie): ContaCorrenteStatusOmieModel
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
     * @return ContaCorrenteStatusOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ContaCorrenteStatusOmieModel
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
     * @return ContaCorrenteStatusOmieModel
     */
    public function setCodigoStatus(?string $codigoStatus): ContaCorrenteStatusOmieModel
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
     * @return ContaCorrenteStatusOmieModel
     */
    public function setDescricaoStatus(?string $descricaoStatus): ContaCorrenteStatusOmieModel
    {
        $this->descricaoStatus = $descricaoStatus;

        return $this;
    }
}
