<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

/**
 * Class ListarOrdensResponse.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    ListarOrdensResponse
 * @version 1.0.0
 */
class ListarOrdensResponse
{
    public ?int $pagina = null;
    public ?int $totalDePaginas = null;
    public ?int $registros = null;
    public ?int $totalDeRegistros = null;

    /**
     * @var OrdemOmieModel[]
     */
    public array $ordensDeServico = [];
}
