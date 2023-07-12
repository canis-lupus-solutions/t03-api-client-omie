<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes;

/**
 * Class ClienteConsultarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes
 * @name    ClienteConsultarRequestOmieModel
 * @version 1.0.0
 */
class ClienteConsultarRequestOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;


    /**
     * ClienteConsultarRequestOmieModel constructor.
     *
     * @param int|null    $idOmie
     * @param string|null $idIntegracao
     */
    public function __construct(?int $idOmie = null, ?string $idIntegracao = null)
    {
        $this->idOmie = $idOmie;
        $this->idIntegracao = $idIntegracao;
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
     * @return ClienteConsultarRequestOmieModel
     */
    public function setIdOmie(?int $idOmie): ClienteConsultarRequestOmieModel
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
     * @return ClienteConsultarRequestOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ClienteConsultarRequestOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }
}
