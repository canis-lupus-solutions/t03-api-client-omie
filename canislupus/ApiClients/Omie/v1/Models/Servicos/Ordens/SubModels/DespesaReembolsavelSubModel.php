<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class DespesaReembolsavelSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    DespesaReembolsavelSubModel
 * @version 1.0.0
 */
class DespesaReembolsavelSubModel
{
    /**
     * Código interno do omie.
     *
     * Mapeado através do campo [nCodReemb].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmie = null;

    /**
     * Pode ser:
     * "A" - Alterar a despesa.
     * "E" - Excluir a despesa.
     * "I" - Incluir a despesa na alteração.
     *
     * Mapeado através do campo [cAcaoReemb].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $acaoReembolso = null;

    /**
     * Descrição da despesa.
     *
     * Mapeado através do campo [cDescReemb].
     * Recomenda-se armazenar como VARCHAR(200).
     */
    public ?string $descricaoReembolso = null;

    /**
     * Valor da despesa.
     *
     * Mapeado através do campo [nValorReemb].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorReembolso = null;

    /**
     * Data da despesa.
     *
     * Mapeado através do campo [dDataReemb].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataReembolso = null;
}
