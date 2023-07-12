<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ObservacoesSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ObservacoesSubModel
 * @version 1.0.0
 */
class ObservacoesSubModel
{
    /**
     * Observações da Ordem de Serviço.
     * Essas informações não serão exibidas na Nota Fiscal.
     *
     * Mapeado através do campo [cObsOS].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $observacao = null;
}
