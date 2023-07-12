<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class MensagemSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    MensagemSubModel
 * @version 1.0.0
 */
class MensagemSubModel
{
    /**
     * Código da mensagem de Erro/Aviso.
     *
     * Mapeado através do campo [cCodigo].
     * Recomenda-se armazenar como TEXT.
     */
    public ?int $codigo = null;

    /**
     * Descrição da mensagem de erro/aviso.
     *
     * Mapeado através do campo [cDescricao].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $descricao = null;

    /**
     * Correção da descrição de mensagem de erro/aviso.
     *
     * Mapeado através do campo [cCorrecao].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $correcao = null;
}
