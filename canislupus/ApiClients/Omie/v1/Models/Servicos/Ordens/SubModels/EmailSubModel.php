<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class EmailSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    EmailSubModel
 * @version 1.0.0
 */
class EmailSubModel
{
    /**
     * Enviar um recibo de prestação de serviços (ao invés da NFS-e).
     * S - Sim.
     * N - Não.
     *
     * Mapeado através do campo [cEnvRecibo].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $enviarRecibo = null;

    /**
     * Enviar ao Cliente e-mail com o link do site da prefeitura para consultar a NFSe emitida.
     * S - Sim.
     * N - Não.
     *
     * Mapeado através do campo [cEnvLink].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $enviarLink = null;

    /**
     * Enviar ao cliente e-mail com os Boletos de Cobrança gerados pelo faturamento.
     * É permitido somente o preenchimento de uma das tags 'cEnvPix' ou 'cEnvBoleto'.
     * S - Sim.
     * N - Não.
     *
     * Mapeado através do campo [cEnvBoleto].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $enviarBoleto = null;

    /**
     * Enviar ao cliente e-mail com o PIX de Cobrança gerado pelo faturamento.
     * É permitido somente o preenchimento de uma das tags 'cEnvPix' ou 'cEnvBoleto'.
     * S - Sim.
     * N - Não.
     *
     * Mapeado através do campo [cEnvPix].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $enviarPix = null;

    /**
     * Utilizar os seguintes endereços de e-mail.
     *
     * Mapeado através do campo [cEnviarPara].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $enviarPara = null;

    /**
     * Enviar ao cliente Via Única (Notas Fiscais Modelos 21 e 22).
     * S - Sim.
     * N - Não.
     *
     * Mapeado através do campo [cEnvViaUnica].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $enviarViaUnica = null;
}
