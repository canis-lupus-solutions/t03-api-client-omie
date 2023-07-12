<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class InformacoesAdicionaisSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    InformacoesAdicionaisSubModelo
 * @version 1.0.0
 */
class InformacoesAdicionaisSubModelo
{
    /**
     * Código da categoria.
     *
     * Preenchimento Obrigatório.
     * Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
     * Utilize a tag 'codigo' do método 'ListarCategorias' da API
     * /api/v1/geral/categorias/ para obter essa informação.
     *
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $codigoCategoria = null;

    /**
     * Código da Conta Corrente.
     *
     * Preenchimento Obrigatório.
     * Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
     * Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API
     * /api/v1/geral/contacorrente/ para obter essa informação.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoContaCorrente = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getCodigoCategoria(): ?string
    {
        return $this->codigoCategoria;
    }

    /**
     * @param string|null $codigoCategoria
     *
     * @return InformacoesAdicionaisSubModelo
     */
    public function setCodigoCategoria(?string $codigoCategoria): InformacoesAdicionaisSubModelo
    {
        $this->codigoCategoria = $codigoCategoria;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoContaCorrente(): ?int
    {
        return $this->codigoContaCorrente;
    }

    /**
     * @param int|null $codigoContaCorrente
     *
     * @return InformacoesAdicionaisSubModelo
     */
    public function setCodigoContaCorrente(?int $codigoContaCorrente): InformacoesAdicionaisSubModelo
    {
        $this->codigoContaCorrente = $codigoContaCorrente;

        return $this;
    }
}
