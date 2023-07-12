<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class CabecalhoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    CabecalhoSubModel
 * @version 1.0.0
 */
class CabecalhoSubModel
{
    /**
     * Código interno do omie.
     *
     * Mapeado através do campo [nCodOS].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmie = null;

    /**
     * Código de Integração.
     *
     * Mapeado através do campo [cCodIntOS].
     * Recomenda-se armazenar como VARCHAR(60).
     */
    public ?string $idIntegracao = null;

    /**
     * Número da Ordem de Serviço.
     *
     * Mapeado através do campo [cNumOS].
     * Recomenda-se armazenar como VARCHAR(15).
     */
    public ?string $numeroOs = null;

    /**
     * Código do Cliente.
     *
     * Mapeado através do campo [nCodCli].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieCliente = null;

    /**
     * Código de Integração do Cliente.
     *
     * Mapeado através do campo [cCodIntCli].
     * Recomenda-se armazenar como VARCHAR(60).
     */
    public ?string $idIntegracaoCliente = null;

    /**
     * Data de Previsão.
     *
     * Mapeado através do campo [dDtPrevisao].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataPrevisao = null;

    /**
     * Código da etapa do processo, sendo:
     * 10 - Primeira coluna
     * 20 - Segunda coluna
     * 30 - Terceira coluna
     * 40 - Quarta coluna
     * 50 - Faturar
     *
     * Mapeado através do campo [cEtapa].
     * Recomenda-se armazenar como VARCHAR(2).
     */
    public ?string $etapa = null;

    /**
     * Código do Vendedor.
     *
     * Mapeado através do campo [nCodVend].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieVendedor = null;

    /**
     * Quantidade de Parcelas.
     *
     * Mapeado através do campo [nQtdeParc].
     * Recomenda-se armazenar como INT.
     */
    public ?int $quantidadeParcelas = null;

    /**
     * Código da parcela/Condição de pagamento.
     *
     * Mapeado através do campo [cCodParc].
     * Recomenda-se armazenar como VARCHAR(3).
     */
    public ?string $codigoParcela = null;

    /**
     * Valor total da Ordem de Serviço.
     * Não deve ser informado na inclusão ou alteração.
     * Campo calculado automaticamente.
     *
     * Mapeado através do campo [nValorTotal].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorTotal = null;

    /**
     * Valor Total de Impostos Retidos.
     *
     * Mapeado através do campo [nValorTotalImpRet].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorTotalImpostosRetidos = null;

    /**
     * Código do Contrato.
     *
     * Mapeado através do campo [nCodCtr].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieContrato = null;
}
