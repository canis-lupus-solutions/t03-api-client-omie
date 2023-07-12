<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

/**
 * Class OrdemStatusOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    OrdemStatusOmieModel
 * @version 1.0.0
 */
class OrdemStatusOmieModel
{
    public ?int $idOmie = null;
    public ?string $idIntegracao = null;
    public ?string $numeroOs = null;
    public ?string $codigoStatus = null;
    public ?string $descricaoStatus = null;
}
