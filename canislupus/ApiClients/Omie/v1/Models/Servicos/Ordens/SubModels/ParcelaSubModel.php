<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ParcelaSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ParcelaSubModel
 * @version 1.0.0
 */
class ParcelaSubModel
{
    /**
     * Número da Parcela.
     * Ex.:
     * 1 para indicar a parcela 1.
     * 2 para indicar a parcela 2.
     *
     * Mapeado através do campo [nParcela].
     * Recomenda-se armazenar como INT.
     */
    public ?int $parcela = null;

    /**
     * Data de Vencimento da parcela.
     *
     * Mapeado através do campo [dDtVenc].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataVencimento = null;

    /**
     * Valor da Parcela.
     *
     * Mapeado através do campo [nValor].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?string $valor = null;

    /**
     * Percentual do valor da parcela.
     *
     * Mapeado através do campo [nPercentual].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?string $percentual = null;

    /**
     * Número de dias até o vencimento.
     * O preenchimento deste campo não é obrigatório.
     * Ex.: 28 para vencimento para 28 dias
     *
     * Mapeado através do campo [nDias].
     * Recomenda-se armazenar como INT.
     */
    public ?int $dias = null;

    /**
     * Tipo de Documento.
     * Preenchimento opcional.
     * Informação localizada na Aba "Parcelas" da Ordem de Serviço.
     *
     * Mapeado através do campo [tipo_documento].
     * Recomenda-se armazenar como VARCHAR(5).
     */
    public ?string $tipoDocumento = null;

    /**
     * Meio de Pagamento - Utilizado apenas para emissão de NFS-e (campo "tPag" do XML).
     * Esse campo indica como a parcela da nota será paga.
     * Preenchimento opcional.
     * Informação localizada na Aba "Parcelas" da Ordem de Serviço.
     *
     * Mapeado através do campo [meio_pagamento].
     * Recomenda-se armazenar como VARCHAR(100).
     */
    public ?string $meioPagamento = null;

    /**
     * Número Sequencial Único NSU - Para identificar vendas por cartões ou
     * TransactionID TID - Para identificar vendas de comércio eletrônico.
     *
     * Mapeado através do campo [nsu].
     * Recomenda-se armazenar como VARCHAR(100).
     */
    public ?string $numeroSequencialUnico = null;

    /**
     * Não gerar boleto para esta parcela ao emitir a nota fiscal.
     * Informe "S" para não gerar o boleto. O padrão é "N".
     * Preenchimento opcional.
     * Informação localizada na Aba "Parcelas" da Ordem de Serviço.
     *
     * Mapeado através do campo [nao_gerar_boleto].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $naoGerarBoleto = null;

    /**
     * Esta é uma parcela de Adiantamento do Cliente.
     * Informe "S" para indicar que é uma parcela de adiantamento. O padrão é "N".
     * Preenchimento opcional.
     * Informação localizada na Aba "Parcelas" da Ordem de Serviço.
     *
     * Mapeado através do campo [parcela_adiantamento].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $parcelaAdiantamento = null;

    /**
     * Código da Categoria para o Adiantamento.
     * Será utilizada na conta a receber que representa o adiantamento desta parcela.
     * Preenchimento opcional.
     * Informação localizada na Aba "Parcelas" da Ordem de Serviço.
     *
     * Mapeado através do campo [categoria_adiantamento].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $categoriaAdiantamento = null;

    /**
     * Conta Corrente de Adiantamento.
     * Preenchimento opcional.
     * Informação localizada na Aba "Parcelas" da Ordem de Serviço.
     *
     * Mapeado através do campo [conta_corrente_adiantamento].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieContaCorrenteAdiantamento = null;
}
