<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ViaUnicaSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ViaUnicaSubModel
 * @version 1.0.0
 */
class ViaUnicaSubModel
{
    /**
     * Indica qual modelo de NF será emitida para o serviço.
     * Obrigatório quando a tag cEnvViaUnica for igual a 'S'.
     * 21 - Nota Fiscal de Serviço de Comunicação.
     * 22 - Nota Fiscal de Serviço de Telecomunicação.
     *
     * Mapeado através do campo [cModeloNF].
     * Recomenda-se armazenar como VARCHAR(2).
     */
    public ?string $modeloNF = null;

    /**
     * Código CFOP para NF Via Única (Modelos 21 e 22).
     *
     * Mapeado através do campo [cCFOP].
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $cfop = null;

    /**
     * Código da Classificação para NF Via Única (Modelos 21 e 22).
     *
     * Mapeado através do campo [cClassifServico].
     * Recomenda-se armazenar como VARCHAR(4).
     */
    public ?string $classificacaoServico = null;

    /**
     * Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22).
     * 0 - Receita própria - serviços prestados.
     * 1 - Receita própria - cobrança de débitos.
     * 2 - Receita própria - venda de mercadorias.
     * 3 - Receita própria - venda de serviço pré-pago.
     * 4 - Outras receitas próprias.
     * 5 - Receitas de terceiros (co-faturamento).
     * 9 - Outras receitas de terceiros.
     *
     * Mapeado através do campo [cTipoReceita].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $tipoReceita = null;

    /**
     * Código do tipo de utilização para NF Via Única (Modelos 21 e 22).
     *
     * Mapeado através do campo [cTipoUtilizacao].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $tipoUtilizacao = null;
}
