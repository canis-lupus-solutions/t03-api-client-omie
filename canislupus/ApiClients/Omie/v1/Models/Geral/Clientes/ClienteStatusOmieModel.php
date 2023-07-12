<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes;

/**
 * Class ClienteStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes
 * @name    ClienteStatusOmieModel
 * @version 1.0.0
 */
class ClienteStatusOmieModel
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
     * @return ClienteStatusOmieModel
     */
    public function setIdOmie(?int $idOmie): ClienteStatusOmieModel
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
     * @return ClienteStatusOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ClienteStatusOmieModel
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
     * @return ClienteStatusOmieModel
     */
    public function setCodigoStatus(?string $codigoStatus): ClienteStatusOmieModel
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
     * @return ClienteStatusOmieModel
     */
    public function setDescricaoStatus(?string $descricaoStatus): ClienteStatusOmieModel
    {
        $this->descricaoStatus = $descricaoStatus;

        return $this;
    }
}
