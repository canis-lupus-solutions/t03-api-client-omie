<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos;

/**
 * Class ImagemSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos
 * @name    ImagemSubModelo
 * @version 1.0.0
 */
class ImagemSubModelo
{
    /**
     * URL da Imagem do produto.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $urlImagem = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getUrlImagem(): ?string
    {
        return $this->urlImagem;
    }

    /**
     * @param string|null $urlImagem
     *
     * @return ImagemSubModelo
     */
    public function setUrlImagem(?string $urlImagem): ImagemSubModelo
    {
        $this->urlImagem = $urlImagem;

        return $this;
    }
}
