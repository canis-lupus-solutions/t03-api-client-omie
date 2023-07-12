<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos;

/**
 * Class TagSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos
 * @name    TagSubModelo
 * @version 1.0.0
 */
class TagSubModelo
{
    /**
     * Tag do Cliente ou Fornecedor.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $tag = null;


    /**
     * TagSubModelo constructor.
     *
     * @param string|null $tag
     */
    public function __construct(?string $tag = null)
    {
        $this->tag = $tag;
    }


    /* GETTERS/SETTERS */

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
     * @return TagSubModelo
     */
    public function setTag(?string $tag): TagSubModelo
    {
        $this->tag = $tag;

        return $this;
    }
}
