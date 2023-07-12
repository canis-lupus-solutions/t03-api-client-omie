<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class InformacoesAdicionaisSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    InformacoesAdicionaisSubModel
 * @version 1.0.0
 */
class InformacoesAdicionaisSubModel
{
    /**
     * Categoria.
     *
     * Mapeado através do campo [cCodCateg].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoCategoria = null;

    /**
     * Código da Conta Corrente.
     *
     * Mapeado através do campo [nCodCC].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieContaCorrente = null;

    /**
     * Número do Pedido do Cliente.
     *
     * Mapeado através do campo [cNumPedido].
     * Recomenda-se armazenar como VARCHAR(30).
     */
    public ?string $numeroPedido = null;

    /**
     * Número do Contrato de Venda.
     *
     * Mapeado através do campo [cNumContrato].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $numeroContrato = null;

    /**
     * Contato.
     *
     * Mapeado através do campo [cContato].
     * Recomenda-se armazenar como VARCHAR(100).
     */
    public ?string $contato = null;

    /**
     * Dados Adicionais da Nota Fiscal.
     *
     * Mapeado através do campo [cDadosAdicNF].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $dadosAdicionaisNF = null;

    /**
     * Código da Obra.
     *
     * Mapeado através do campo [cCodObra].
     * Recomenda-se armazenar como VARCHAR(15).
     */
    public ?string $codigoObra = null;

    /**
     * Código ART.
     *
     * Mapeado através do campo [cCodART].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoArt = null;

    /**
     * Código do Projeto.
     *
     * Mapeado através do campo [nCodProj].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieProjeto = null;

    /**
     * Cidade da Prestação do Serviço.
     *
     * Mapeado através do campo [cCidPrestServ].
     * Recomenda-se armazenar como VARCHAR(40).
     */
    public ?string $cidadeDePrestacaoDoServico = null;

    /**
     * Data da RPS.
     *
     * Mapeado através do campo [dDataRps].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataRps = null;

    /**
     * Número do Recibo gerado.
     * Gerado automaticamente. Se informado na inclusão será ignorado.
     *
     * Mapeado através do campo [cNumRecibo].
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $numeroRecibo = null;
}
