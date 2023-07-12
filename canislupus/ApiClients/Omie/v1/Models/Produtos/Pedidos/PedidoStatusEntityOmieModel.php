<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos;

use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\PedidoStatusNfeSubModelo;

/**
 * Class PedidoStatusEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos
 * @name    PedidoStatusEntityOmieModel
 * @version 1.0.0
 */
class PedidoStatusEntityOmieModel
{
    /**
     * ID do pedido da venda.
     *
     * Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.
     * Esse campo não é exibido na tela do Pedido de Vendas.
     * É uma informação interna, utilizada apenas nas APIs.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoPedido = null;

    /**
     * Código de integração do pedido de venda.
     *
     * Preenchimento Obrigatório na inclusão/alteração.
     * Preenchimento Opcional na Consulta/Pesquisa.
     * Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie.
     * A função dele é servir como uma mapa de relacionamento entre as aplicações.
     * Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do
     * pedido gerado no Omie e o código de pedido existente em sua aplicação.
     *
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $codigoPedidoIntegracao = null;

    /**
     * Número do pedido de venda.
     *
     * Preenchimento automático na inclusão/alteração.
     * Preenchimento disponível apenas na consulta/pesquisa.
     * Esse é o número do pedido de venda no Omie, que é gerado automaticamente e exibido na tela.
     *
     * Recomenda-se armazenar como VARCHAR(15).
     */
    protected ?string $numeroPedido = null;

    /**
     * Etapa do pedido de venda.
     *
     * Preenchimento Obrigatório.
     * Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.
     * Utilize a tag 'codigo' do método 'ListarEtapasFaturamento' da API
     * /api/v1/produtos/etapafat/ para obter essa informação.
     * Os valores são fixos, mas as descrições (funções atribuídas a cada coluna) pode mudar.
     * A API irá indicar a descrição de cada coluna.
     *
     * Os valores disponíveis para esse campo podem ser:
     *
     * '10' - Primeira coluna
     * '20' - Segunda coluna
     * '30' - Terceira coluna
     * '40' - Quarta coluna
     * '50' - Faturar
     *
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $etapa = null;

    /**
     * @var PedidoStatusNfeSubModelo[]
     */
    protected array $listaNfe = [];


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getCodigoPedido(): ?int
    {
        return $this->codigoPedido;
    }

    /**
     * @param int|null $codigoPedido
     *
     * @return PedidoStatusEntityOmieModel
     */
    public function setCodigoPedido(?int $codigoPedido): PedidoStatusEntityOmieModel
    {
        $this->codigoPedido = $codigoPedido;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoPedidoIntegracao(): ?string
    {
        return $this->codigoPedidoIntegracao;
    }

    /**
     * @param string|null $codigoPedidoIntegracao
     *
     * @return PedidoStatusEntityOmieModel
     */
    public function setCodigoPedidoIntegracao(?string $codigoPedidoIntegracao): PedidoStatusEntityOmieModel
    {
        $this->codigoPedidoIntegracao = $codigoPedidoIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroPedido(): ?string
    {
        return $this->numeroPedido;
    }

    /**
     * @param string|null $numeroPedido
     *
     * @return PedidoStatusEntityOmieModel
     */
    public function setNumeroPedido(?string $numeroPedido): PedidoStatusEntityOmieModel
    {
        $this->numeroPedido = $numeroPedido;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEtapa(): ?string
    {
        return $this->etapa;
    }

    /**
     * @param string|null $etapa
     *
     * @return PedidoStatusEntityOmieModel
     */
    public function setEtapa(?string $etapa): PedidoStatusEntityOmieModel
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\PedidoStatusNfeSubModelo[]
     */
    public function getListaNfe(): array
    {
        return $this->listaNfe;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\PedidoStatusNfeSubModelo[] $listaNfe
     *
     * @return PedidoStatusEntityOmieModel
     */
    public function setListaNfe(array $listaNfe): PedidoStatusEntityOmieModel
    {
        $this->listaNfe = $listaNfe;

        return $this;
    }
}
