<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags;

/**
 * Class TagEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags
 * @name    TagEntityOmieModel
 * @version 1.0.0
 */
class TagEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [nCodTag].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Nome/Descrição da Tag.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $tag = null;


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
     * @return TagEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): TagEntityOmieModel
    {
        $this->idOmie = $idOmie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string|null $tag
     *
     * @return TagEntityOmieModel
     */
    public function setTag(?string $tag): TagEntityOmieModel
    {
        $this->tag = $tag;

        return $this;
    }
}
