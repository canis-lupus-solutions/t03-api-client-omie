<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\RpsNfseSubModel;

/**
 * Class VerificarStatusOrdemResponse.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    VerificarStatusOrdemResponse
 * @version 1.0.0
 */
class VerificarStatusOrdemResponse
{
    public ?int $idOmie = null;
    public ?string $idIntegracao = null;
    public ?string $numeroOs = null;
    public ?string $numeroContrato = null;
    public ?string $numeroRecibo = null;
    public ?string $numeroPedido = null;
    public ?string $etapa = null;
    public ?string $cancelada = null;
    public ?string $faturada = null;
    public ?string $ambiente = null;
    public ?string $dataInclusao = null;
    public ?string $horaInclusao = null;
    public ?string $dataAlteracao = null;
    public ?string $horaAlteracao = null;
    public ?string $dataFaturamento = null;
    public ?string $horaFaturamento = null;
    public ?string $dataCancelamento = null;
    public ?string $horaCancelamento = null;
    public ?float $valorTotal = null;
    public ?string $urlPdfRecibo = null;

    /**
     * @var RpsNfseSubModel[]
     */
    public array $listaRpsNfse = [];
}
