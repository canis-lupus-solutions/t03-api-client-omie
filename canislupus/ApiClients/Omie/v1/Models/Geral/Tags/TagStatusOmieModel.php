<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags;

/**
 * Class TagStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags
 * @name    TagStatusOmieModel
 * @version 1.0.0
 */
class TagStatusOmieModel
{
    protected ?int $idOmieCliente = null;
    protected ?string $idIntegracaoCliente = null;
    protected ?string $codigoStatus = null;
    protected ?string $descricaoStatus = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getIdOmieCliente(): ?int
    {
        return $this->idOmieCliente;
    }

    /**
     * @param int|null $idOmieCliente
     *
     * @return TagStatusOmieModel
     */
    public function setIdOmieCliente(?int $idOmieCliente): TagStatusOmieModel
    {
        $this->idOmieCliente = $idOmieCliente;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdIntegracaoCliente(): ?string
    {
        return $this->idIntegracaoCliente;
    }

    /**
     * @param string|null $idIntegracaoCliente
     *
     * @return TagStatusOmieModel
     */
    public function setIdIntegracaoCliente(?string $idIntegracaoCliente): TagStatusOmieModel
    {
        $this->idIntegracaoCliente = $idIntegracaoCliente;

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
     * @return TagStatusOmieModel
     */
    public function setCodigoStatus(?string $codigoStatus): TagStatusOmieModel
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
     * @return TagStatusOmieModel
     */
    public function setDescricaoStatus(?string $descricaoStatus): TagStatusOmieModel
    {
        $this->descricaoStatus = $descricaoStatus;

        return $this;
    }
}
