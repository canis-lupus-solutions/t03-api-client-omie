<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

/**
 * Class TrocarEtapaOrdemRequest.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    TrocarEtapaOrdemRequest
 * @version 1.0.0
 */
class TrocarEtapaOrdemRequest
{
    public ?int $idOmie = null;
    public ?string $idIntegracao = null;
    public ?string $numeroOs = null;
    public ?string $etapa = null;


    public function __construct(
        ?int    $idOmie = null,
        ?string $idIntegracao = null,
        ?string $numeroOs = null,
        ?string $etapa = null
    )
    {
        $this->idOmie = $idOmie;
        $this->idIntegracao = $idIntegracao;
        $this->numeroOs = $numeroOs;
        $this->etapa = $etapa;
    }
}
