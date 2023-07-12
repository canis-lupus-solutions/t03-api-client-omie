<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class InformacoesCadastroSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    InformacoesCadastroSubModel
 * @version 1.0.0
 */
class InformacoesCadastroSubModel
{
    /**
     * "S" para Ordem de Serviço cancelada.
     *
     * Mapeado através do campo [cCancelada].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $cancelada = null;

    /**
     * "S" para Ordem de Serviço cancelada.
     *
     * Mapeado através do campo [cFaturada].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $faturada = null;

    /**
     * Ambiente de emissão da NFS-e.
     * H - Homologação.
     * P - Produção.
     *
     * Mapeado através do campo [cAmbiente].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $ambiente = null;

    /**
     * Data da Inclusão.
     *
     * Mapeado através do campo [dDtInc].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataInclusao = null;

    /**
     * Hora da Inclusão.
     *
     * Mapeado através do campo [cHrInc].
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    public ?string $horaInclusao = null;

    /**
     * Data da Alteração.
     *
     * Mapeado através do campo [dDtAlt].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataAlteracao = null;

    /**
     * Hora da Alteração.
     *
     * Mapeado através do campo [cHrAlt].
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    public ?string $horaAlteracao = null;

    /**
     * Data de Faturamento.
     *
     * Mapeado através do campo [dDtFat].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataFaturamento = null;

    /**
     * Hora do Faturamento.
     *
     * Mapeado através do campo [cHrFat].
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    public ?string $horaFaturamento = null;

    /**
     * Data de Cancelamento.
     *
     * Mapeado através do campo [dDtCanc].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataCancelamento = null;

    /**
     * Hora do Cancelamento.
     *
     * Mapeado através do campo [cHrCanc].
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    public ?string $horaCancelamento = null;

    /**
     * Origem da Ordem de Serviço.
     *
     * Mapeado através do campo [cOrigem].
     * Recomenda-se armazenar como VARCHAR(3).
     */
    public ?string $origem = null;
}
