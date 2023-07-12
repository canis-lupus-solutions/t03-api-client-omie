<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags;

/**
 * Class TagExcluirTodasRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags
 * @name    TagExcluirTodasRequestOmieModel
 * @version 1.0.0
 */
class TagExcluirTodasRequestOmieModel
{
    protected ?int $idOmieCliente = null;


    /**
     * TagExcluirTodasRequestOmieModel constructor.
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
     * @return TagExcluirTodasRequestOmieModel
     */
    public function setIdOmieCliente(?int $idOmieCliente): TagExcluirTodasRequestOmieModel
    {
        $this->idOmieCliente = $idOmieCliente;

        return $this;
    }
}
