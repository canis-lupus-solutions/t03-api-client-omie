<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos;

/**
 * Class TabelaDePrecoAtivarRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos
 * @name    TabelaDePrecoAtivarRequestOmieModel
 * @version 1.0.0
 */
class TabelaDePrecoAtivarRequestOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;


    /**
     * TabelaDePrecoAtivarRequestOmieModel constructor.
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
     * @return TabelaDePrecoAtivarRequestOmieModel
     */
    public function setIdOmie(?int $idOmie): TabelaDePrecoAtivarRequestOmieModel
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
     * @return TabelaDePrecoAtivarRequestOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): TabelaDePrecoAtivarRequestOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }
}
