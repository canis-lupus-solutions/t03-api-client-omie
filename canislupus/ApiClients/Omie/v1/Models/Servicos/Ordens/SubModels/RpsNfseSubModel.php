<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class RpsNfseSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    RpsNfseSubModel
 * @version 1.0.0
 */
class RpsNfseSubModel
{
    /**
     * Número do Lote de Envio da RPS.
     *
     * Mapeado através do campo [nLote].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $numeroLote = null;

    /**
     * Código do status do lote enviado para a prefeitura.
     * 001 - Aguardando envio para a prefeitura.
     * 002 - Enviado para a prefeitura, aguardando processamento.
     * 003 - Processado com erro.
     * 004 - Processado com sucesso.
     * 005 - Cancelado com sucesso.
     *
     * Mapeado através do campo [cStatusLote].
     * Recomenda-se armazenar como VARCHAR(3).
     */
    public ?string $statusLote = null;

    /**
     * Número do protocolo do envio do lote.
     *
     * Mapeado através do campo [cProtocolo].
     * Recomenda-se armazenar como VARCHAR(50).
     */
    public ?string $protocolo = null;

    /**
     * Número do Recibo Provisório de Serviços (RPS).
     *
     * Mapeado através do campo [nRps].
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $numeroRps = null;

    /**
     * Código do status da RPS.
     * 001 - Aguardando envio para a prefeitura.
     * 002 - Enviado para a prefeitura, aguardando processamento.
     * 003 - Processado com erro.
     * 004 - Processado com sucesso.
     * 005 - Cancelado com sucesso.
     *
     * Mapeado através do campo [cStatusRps].
     * Recomenda-se armazenar como VARCHAR(3).
     */
    public ?string $statusRps = null;

    /**
     * Número da NFS-e gerada.
     *
     * Mapeado através do campo [nNfse].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $numeroNfse = null;

    /**
     * Código de Verificação da NFS-e gerada.
     *
     * Mapeado através do campo [cCodVerif].
     * Recomenda-se armazenar como VARCHAR(50).
     */
    public ?string $codigoVerificacao = null;

    /**
     * CNPJ do Prestador.
     *
     * Mapeado através do campo [cCNPJ].
     * Recomenda-se armazenar como VARCHAR(14).
     */
    public ?string $cnpjPrestador = null;

    /**
     * Inscrição Municipal do Prestador.
     *
     * Mapeado através do campo [cInscrMunicipal].
     * Recomenda-se armazenar como INTEGER.
     */
    public ?int $inscricaoMunicipal = null;

    /**
     * @var MensagemSubModel[]
     *
     * Mensagens de comunicação com a Prefeitura.
     *
     * Mapeado através do campo [mensagens].
     */
    public array $mensagens = [];

    /**
     * XML de distribuição da NF-e.
     *
     * Mapeado através do campo [xml_distr].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $xmlDistribuicao = null;

    /**
     * Link para o DANFE da NF-e gerada.
     *
     * Mapeado através do campo [danfe].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $urlDanfe = null;

    /**
     * Link para obter a NFS-e na prefeitura.
     *
     * Mapeado através do campo [cUrlNfse].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $urlNfse = null;

    /**
     * Link para obter o PDF do Demonstrativo da NFS-e.
     *
     * Mapeado através do campo [cUrlPdfDemo].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $urlPdfDemonstrativo = null;

    /**
     * Link para obter o PDF da nota do Destinatário.
     *
     * Mapeado através do campo [cUrlPdfDest].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $urlPdfDestinatario = null;

    /**
     * Link para obter a RPS.
     *
     * Mapeado através do campo [cUrlRps].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $urlRps = null;
}
