<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class DespesasReembolsaveisSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    DespesasReembolsaveisSubModel
 * @version 1.0.0
 */
class DespesasReembolsaveisSubModel
{
    /**
     * Código da categoria para reembolso.
     *
     * Mapeado através do campo [cCodCategReemb].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoCategoriaReembolso = null;

    /**
     * @var DespesaReembolsavelSubModel[]
     *
     * Despesas reembolsáveis.
     *
     * Mapeado através do campo [despesaReembolsavel].
     */
    public array $despesasReembolsaveis = [];
}
