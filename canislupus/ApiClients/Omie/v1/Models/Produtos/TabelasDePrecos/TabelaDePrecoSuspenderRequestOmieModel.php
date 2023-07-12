<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos;

/**
 * Class TabelaDePrecoSuspenderRequestOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos
 * @name    TabelaDePrecoSuspenderRequestOmieModel
 * @version 1.0.0
 */
class TabelaDePrecoSuspenderRequestOmieModel
{
    protected ?int $idOmie = null;
    protected ?string $idIntegracao = null;


    /**
     * TabelaDePrecoSuspenderRequestOmieModel constructor.
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
     * @return TabelaDePrecoSuspenderRequestOmieModel
     */
    public function setIdOmie(?int $idOmie): TabelaDePrecoSuspenderRequestOmieModel
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
     * @return TabelaDePrecoSuspenderRequestOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): TabelaDePrecoSuspenderRequestOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }
}
