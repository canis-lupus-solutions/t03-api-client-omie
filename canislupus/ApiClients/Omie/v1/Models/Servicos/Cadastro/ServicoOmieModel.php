<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro;

use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos\CabecalhoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos\InfoSubModel;

/**
 * Class ServicoOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Servico
 * @name    ServicoOmieModel
 * @version 1.0.0
 */
class ServicoOmieModel
{
    /**
     * Código interno do omie.
     *
     * Mapeado através do campo [intListar][nCodServ].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmie = null;

    /**
     * Código de Integração.
     *
     * Mapeado através do campo [intListar][cCodIntServ].
     * Recomenda-se armazenar como VARCHAR(60).
     */
    public ?string $idIntegracao = null;

    /**
     * Dados do Serviço.
     *
     * Mapeado através do campo [cabecalho]
     */
    public ?CabecalhoSubModel $cabecalho = null;

    /**
     * Dados do registro do Serviço.
     *
     * Mapeado através do campo [info]
     */
    public ?InfoSubModel $infoCadastro = null;
}
