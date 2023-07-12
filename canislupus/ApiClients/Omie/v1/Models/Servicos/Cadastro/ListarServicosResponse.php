<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro;

/**
 * Class ListarServicosResponse.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro
 * @name    ListarServicosResponse
 * @version 1.0.0
 */
class ListarServicosResponse
{
    public ?int $pagina = null;
    public ?int $totalDePaginas = null;
    public ?int $registros = null;
    public ?int $totalDeRegistros = null;

    /**
     * @var ServicoOmieModel[]
     */
    public array $servicos = [];
}
