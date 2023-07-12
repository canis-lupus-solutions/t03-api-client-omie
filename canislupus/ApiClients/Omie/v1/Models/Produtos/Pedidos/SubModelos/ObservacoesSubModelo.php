<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class ObservacoesSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    ObservacoesSubModelo
 * @version 1.0.0
 */
class ObservacoesSubModelo
{
    /**
     * Observações da venda (elas não serão exibidas na Nota Fiscal).
     *
     * Preenchimento Opcional.
     * Informação localizada na Aba 'Observações' do Pedido de Venda.
     *
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $obsVenda = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getObsVenda(): ?string
    {
        return $this->obsVenda;
    }

    /**
     * @param string|null $obsVenda
     *
     * @return ObservacoesSubModelo
     */
    public function setObsVenda(?string $obsVenda): ObservacoesSubModelo
    {
        $this->obsVenda = $obsVenda;

        return $this;
    }
}
