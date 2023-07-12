<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro;

use CanisLupus\ApiClients\Omie\v1\OmieApiClient;

/**
 * Class ListarServicosRequest.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Servico
 * @name    ListarServicosRequest
 * @version 1.0.0
 */
class ListarServicosRequest
{
    public ?int $pagina = null;
    public ?int $registrosPorPagina = null;
    public ?string $ordenarPor = null;
    public ?string $ordemDecrescente = null;
    public ?string $dataInclusaoInicial = null;
    public ?string $dataInclusaoFinal = null;
    public ?string $dataAlteracaoInicial = null;
    public ?string $dataAlteracaoFinal = null;
    public ?string $horaInclusaoInicial = null;
    public ?string $horaInclusaoFinal = null;
    public ?string $horaAlteracaoInicial = null;
    public ?string $horaAlteracaoFinal = null;
    public ?string $descricao = null;
    public ?string $codigoServico = null;
    public ?string $inativo = null;
    public ?string $exibirProdutos = null;


    public function __construct(
        ?int $pagina = null,
        ?int $registrosPorPagina = null
    )
    {
        $this->pagina = $pagina ?? 1;
        $this->registrosPorPagina = $registrosPorPagina ?? OmieApiClient::$padraoRegistrosPorPagina;
    }
}
