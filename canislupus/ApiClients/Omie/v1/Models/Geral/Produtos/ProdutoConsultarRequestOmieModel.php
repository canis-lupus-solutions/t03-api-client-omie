<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos;

/**
 * Class ProdutoConsultarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos
 * @name    ProdutoConsultarRequestOmieModel
 * @version 1.0.0
 */
class ProdutoConsultarRequestOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;
    protected ?string $codigo = null;


    /**
     * ProdutoConsultarRequestOmieModel constructor.
     *
     * @param int|null    $idOmie
     * @param string|null $idIntegracao
     * @param string|null $codigo
     */
    public function __construct(?int $idOmie = null, ?string $idIntegracao = null, ?string $codigo = null)
    {
        $this->idOmie = $idOmie;
        $this->idIntegracao = $idIntegracao;
        $this->codigo = $codigo;
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
     * @return ProdutoConsultarRequestOmieModel
     */
    public function setIdOmie(?int $idOmie): ProdutoConsultarRequestOmieModel
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
     * @return ProdutoConsultarRequestOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ProdutoConsultarRequestOmieModel
    {
        $this->idIntegracao = $idIntegracao;

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
     * @return ProdutoConsultarRequestOmieModel
     */
    public function setCodigo(?string $codigo): ProdutoConsultarRequestOmieModel
    {
        $this->codigo = $codigo;

        return $this;
    }
}
