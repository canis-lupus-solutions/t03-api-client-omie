<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Estoque\Locais;

/**
 * Class LocaisOmie.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Estoque\Locais
 * @name    LocaisOmie
 * @version 1.0.0
 */
class LocaisOmie
{
    /**
     * Código interno do omie, mapeado através do campo [codigo_local_estoque].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código do Local do Estoque.
     *
     * Conforme informado na tela de cadastro do Local do Estoque.
     *
     * Recomenda-se armazenar como VARCHAR(50).
     */
    protected ?string $codigo = null;

    /**
     * Descrição do Local de Estoque.
     *
     * Recomenda-se armazenar como VARCHAR(250).
     */
    protected ?string $descricao = null;


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
     * @return LocaisOmie
     */
    public function setIdOmie(?int $idOmie): LocaisOmie
    {
        $this->idOmie = $idOmie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    /**
     * @param string|null $codigo
     *
     * @return LocaisOmie
     */
    public function setCodigo(?string $codigo): LocaisOmie
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    /**
     * @param string|null $descricao
     *
     * @return LocaisOmie
     */
    public function setDescricao(?string $descricao): LocaisOmie
    {
        $this->descricao = $descricao;

        return $this;
    }
}
