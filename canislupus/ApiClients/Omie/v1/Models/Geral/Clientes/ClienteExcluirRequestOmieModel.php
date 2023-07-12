<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes;

/**
 * Class ClienteExcluirRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes
 * @name    ClienteExcluirRequestOmieModel
 * @version 1.0.0
 */
class ClienteExcluirRequestOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;


    /**
     * ClienteExcluirRequestOmieModel constructor.
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
     * @return ClienteExcluirRequestOmieModel
     */
    public function setIdOmie(?int $idOmie): ClienteExcluirRequestOmieModel
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
     * @return ClienteExcluirRequestOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ClienteExcluirRequestOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }
}
