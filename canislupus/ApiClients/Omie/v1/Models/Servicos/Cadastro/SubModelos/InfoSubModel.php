<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos;

/**
 * Class InfoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Servico\SubModelos
 * @name    InfoSubModel
 * @version 1.0.0
 */
class InfoSubModel
{
    /**
     * Data da Inclusão.
     *
     * Mapeado através do campo [dInc].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataInclusao = null;

    /**
     * Hora da Inclusão.
     *
     * Mapeado através do campo [hInc].
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    public ?string $horaInclusao = null;

    /**
     * Usuário da Inclusão.
     *
     * Mapeado através do campo [uInc].
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $usuarioInclusao = null;

    /**
     * Data da Alteração.
     *
     * Mapeado através do campo [dAlt].
     * No formato: dd/mm/aaaa.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $dataAlteracao = null;

    /**
     * Hora da Alteração.
     *
     * Mapeado através do campo [hAlt].
     * No formato: hh:mm:ss.
     * Recomenda-se armazenar como VARCHAR(8).
     */
    public ?string $horaAlteracao = null;

    /**
     * Usuário da Alteração.
     *
     * Mapeado através do campo [uAlt].
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $usuarioAlteracao = null;

    /**
     * Importado pela API (S/N).
     *
     * Mapeado através do campo [cImpAPI].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $importadoPelaApi = null;

    /**
     * Indica se o serviço está inativo (S/N).
     *
     * Mapeado através do campo [inativo]
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $inativo = null;
}
