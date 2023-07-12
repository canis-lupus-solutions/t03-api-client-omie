<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class DetInfAdicSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    DetInfAdicSubModelo
 * @version 1.0.0
 */
class DetInfAdicSubModelo
{
    /**
     * Código do Local do Estoque.
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoLocalEstoque = null;

    /**
     * Código do Cenário de Impostos, mapeado através do campo [codigo_cenario_impostos_item]
     *
     * Preenchimento Opcional.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoCenarioImpostos = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getCodigoLocalEstoque(): ?int
    {
        return $this->codigoLocalEstoque;
    }

    /**
     * @param int|null $codigoLocalEstoque
     *
     * @return DetInfAdicSubModelo
     */
    public function setCodigoLocalEstoque(?int $codigoLocalEstoque): DetInfAdicSubModelo
    {
        $this->codigoLocalEstoque = $codigoLocalEstoque;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoCenarioImpostos(): ?int
    {
        return $this->codigoCenarioImpostos;
    }

    /**
     * @param int|null $codigoCenarioImpostos
     *
     * @return DetInfAdicSubModelo
     */
    public function setCodigoCenarioImpostos(?int $codigoCenarioImpostos): DetInfAdicSubModelo
    {
        $this->codigoCenarioImpostos = $codigoCenarioImpostos;

        return $this;
    }
}
