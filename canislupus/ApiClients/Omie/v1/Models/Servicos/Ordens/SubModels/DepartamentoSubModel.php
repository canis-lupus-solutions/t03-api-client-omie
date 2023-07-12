<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class DepartamentoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    DepartamentoSubModel
 * @version 1.0.0
 */
class DepartamentoSubModel
{
    /**
     * ID do Departamento.
     *
     * Mapeado através do campo [cCodDepto].
     * Recomenda-se armazenar como VARCHAR(40).
     */
    public ?string $codigoDepartamento = null;

    /**
     * Valor do Rateio.
     * Preenchimento Obrigatório.
     * Informação localizada na Aba "Departamentos" do Pedido de Venda.
     *
     * Mapeado através do campo [nValor].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?string $valor = null;

    /**
     * Percentual de Rateio.
     * Preenchimento Obrigatório.
     * Informação localizada na Aba "Departamentos" do Pedido de Venda.
     *
     * Mapeado através do campo [nPerc].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?string $percentual = null;

    /**
     * Indica que o valor foi fixado na distribuição do rateio.
     * Preenchimento Obrigatório.
     * Informar "S" ou "N".
     * Informação localizada na Aba "Departamentos" do Pedido de Venda.
     *
     * Mapeado através do campo [nValorFixo].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $valorFixo = null;
}
