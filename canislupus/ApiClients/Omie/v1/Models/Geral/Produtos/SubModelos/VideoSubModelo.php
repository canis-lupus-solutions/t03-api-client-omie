<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos;

/**
 * Class VideoSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos
 * @name    VideoSubModelo
 * @version 1.0.0
 */
class VideoSubModelo
{
    /**
     * URL do Video do produto.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $urlVideo = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getUrlVideo(): ?string
    {
        return $this->urlVideo;
    }

    /**
     * @param string|null $urlVideo
     *
     * @return VideoSubModelo
     */
    public function setUrlVideo(?string $urlVideo): VideoSubModelo
    {
        $this->urlVideo = $urlVideo;

        return $this;
    }
}
