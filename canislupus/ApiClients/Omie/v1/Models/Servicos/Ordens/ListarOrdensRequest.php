<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

use CanisLupus\ApiClients\Omie\v1\OmieApiClient;

/**
 * Class ListarOrdensRequest.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    ListarOrdensRequest
 * @version 1.0.0
 */
class ListarOrdensRequest
{
    public ?int $pagina = null;
    public ?int $registrosPorPagina = null;
    public ?string $apenasImportadoApi = null;
    public ?string $ordenarPor = null;
    public ?string $ordemDecrescente = null;
    public ?string $filtrarPorDataDe = null;
    public ?string $filtrarPorDataAte = null;
    public ?string $filtrarApenasInclusao = null;
    public ?string $filtrarApenasAlteracao = null;
    public array $filtrarPorCodigo = [];
    public ?string $filtrarPorStatus = null;
    public ?string $filtrarPorEtapa = null;
    public ?string $filtrarPorCliente = null;
    public ?string $filtrarPorDataPrevisaoDe = null;
    public ?string $filtrarPorDataPrevisaoAte = null;
    public ?string $filtrarPorDataFaturamentoDe = null;
    public ?string $filtrarPorDataFaturamentoAte = null;
    public ?string $filtrarPorDataCancelamentoDe = null;
    public ?string $filtrarPorDataCancelamentoAte = null;
    public ?string $exibirDespesas = null;
    public ?string $exibirProdutos = null;
    public ?string $tipoFat = null;


    public function __construct(
        ?int $pagina = null,
        ?int $registrosPorPagina = null
    )
    {
        $this->pagina = $pagina ?? 1;
        $this->registrosPorPagina = $registrosPorPagina ?? OmieApiClient::$padraoRegistrosPorPagina;
    }
}
