<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

/**
 * Class TrocarEtapaOrdemResponse.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    TrocarEtapaOrdemResponse
 * @version 1.0.0
 */
class TrocarEtapaOrdemResponse
{
    public ?int $idOmie = null;
    public ?string $idIntegracao = null;
    public ?string $numeroOs = null;
    public ?string $codigoStatus = null;
    public ?string $descricaoStatus = null;
}
