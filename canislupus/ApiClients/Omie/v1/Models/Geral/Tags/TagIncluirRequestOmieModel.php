<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags;

use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo;

/**
 * Class TagIncluirRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags
 * @name    TagIncluirRequestOmieModel
 * @version 1.0.0
 */
class TagIncluirRequestOmieModel
{
    protected ?int $idOmieCliente = null;

    /**
     * @var TagSubModelo[]|null
     *
     * Tags do Cliente ou Fornecedor.
     */
    protected ?array $tags = null;


    /**
     * TagIncluirRequestOmieModel constructor.
     *
     * @param int|null   $idOmieCliente
     * @param array|null $tags
     */
    public function __construct(?int $idOmieCliente = null, ?array $tags = null)
    {
        $this->idOmieCliente = $idOmieCliente;
        $this->$tags = $tags;
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
     * @return TagIncluirRequestOmieModel
     */
    public function setIdOmieCliente(?int $idOmieCliente): TagIncluirRequestOmieModel
    {
        $this->idOmieCliente = $idOmieCliente;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo[]|null $tags
     *
     * @return TagIncluirRequestOmieModel
     */
    public function setTags(?array $tags): TagIncluirRequestOmieModel
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo $tag
     *
     * @return $this
     */
    public function addTag(TagSubModelo $tag): TagIncluirRequestOmieModel
    {
        $this->tags[] = $tag;

        return $this;
    }
}
