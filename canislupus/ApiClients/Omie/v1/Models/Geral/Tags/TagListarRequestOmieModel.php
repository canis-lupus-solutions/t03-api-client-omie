<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags;

/**
 * Class TagListarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags
 * @name    TagListarRequestOmieModel
 * @version 1.0.0
 */
class TagListarRequestOmieModel
{
    protected ?int $idOmieCliente = null;


    /**
     * TagListarRequestOmieModel constructor.
     *
     * @param int|null $idOmieCliente
     */
    public function __construct(?int $idOmieCliente = null)
    {
        $this->idOmieCliente = $idOmieCliente;
    }


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
     * @return TagListarRequestOmieModel
     */
    public function setIdOmieCliente(?int $idOmieCliente): TagListarRequestOmieModel
    {
        $this->idOmieCliente = $idOmieCliente;

        return $this;
    }
}
