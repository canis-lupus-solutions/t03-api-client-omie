<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos;

/**
 * Class CabecalhoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos
 * @name    CabecalhoSubModelo
 * @version 1.0.0
 */
class CabecalhoSubModelo
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
     * Código do cliente.
     *
     * Preenchimento Obrigatório.
     * Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API
     * /api/v1/geral/clientes/ para obter essa informação
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoCliente = null;

    /**
     * Data de Previsão de Faturamento.
     *
     * Preenchimento Obrigatório.
     * Utilize o formato 'dd/mm/aaaa'.
     * Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma
     * data igual ou superior a data corrente.
     *
     * Recomenda-se armazenar como VARCHAR(15).
     */
    protected ?string $dataPrevisao = null;

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
     * Código da parcela/Condição de pagamento.
     *
     * Preenchimento Obrigatório.
     * Utilize a tag 'nCodigo' do método 'ListarFormasPagVendas' da API
     * /api/v1/produtos/formaspagvendas/ para obter essa informação.
     * O código '999' é o único que permite uma definição de forma de pagamento customizada.
     * Caso você escolha essa opção, deve também informar a tag 'qtde_parcelas' e a
     * estrutura 'lista_parcelas'.
     * Alguns dos valores disponíveis são:
     * '000' - A Vista
     * 'A03' - Para 3 dias
     * 'A10' - Para 10 dias
     * 'A40' - Para 40 dias
     * 'B20' - Para 120 dias
     * '001' - 1 Parcela (para 30 dias)
     * '002' - 2 Parcelas
     * '003' - 3 Parcelas
     * '006' - 6 Parcelas
     * '012' - 12 Parcelas
     * '024' - 24 Parcelas
     * '048' - 48 Parcelas
     * '999' - Informar o número de parcelas
     *
     * Recomenda-se armazenar como VARCHAR(3).
     */
    protected ?string $codigoParcela = null;

    /**
     * Quantidade de parcelas.
     *
     * Preenchimento Obrigatório quando o conteúdo da tag 'codigo_parcela' for '999'.
     * Valores permitidos de 1 a 999.
     *
     * Recomenda-se armazenar como INTENGER.
     */
    protected ?int $qtdeParcelas = null;

    /**
     * Origem do Pedido.
     *
     * Default:
     * API - Importado via API.
     * MLV - Mercado Livre.
     *
     * Recomenda-se armazenar como VARCHAR(3).
     */
    protected ?string $origemPedido = null;

    /**
     * Código do Cenário de Impostos (Cenário Fiscal).
     *
     * Se não informado, será assumido o cenário padrão.
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoCenarioImpostos = null;


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
     * @return CabecalhoSubModelo
     */
    public function setCodigoPedido(?int $codigoPedido): CabecalhoSubModelo
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
     * @return CabecalhoSubModelo
     */
    public function setCodigoPedidoIntegracao(?string $codigoPedidoIntegracao): CabecalhoSubModelo
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
     * @return CabecalhoSubModelo
     */
    public function setNumeroPedido(?string $numeroPedido): CabecalhoSubModelo
    {
        $this->numeroPedido = $numeroPedido;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoCliente(): ?int
    {
        return $this->codigoCliente;
    }

    /**
     * @param int|null $codigoCliente
     *
     * @return CabecalhoSubModelo
     */
    public function setCodigoCliente(?int $codigoCliente): CabecalhoSubModelo
    {
        $this->codigoCliente = $codigoCliente;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataPrevisao(): ?string
    {
        return $this->dataPrevisao;
    }

    /**
     * @param string|null $dataPrevisao
     *
     * @return CabecalhoSubModelo
     */
    public function setDataPrevisao(?string $dataPrevisao): CabecalhoSubModelo
    {
        $this->dataPrevisao = $dataPrevisao;

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
     * @return CabecalhoSubModelo
     */
    public function setEtapa(?string $etapa): CabecalhoSubModelo
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoParcela(): ?string
    {
        return $this->codigoParcela;
    }

    /**
     * @param string|null $codigoParcela
     *
     * @return CabecalhoSubModelo
     */
    public function setCodigoParcela(?string $codigoParcela): CabecalhoSubModelo
    {
        $this->codigoParcela = $codigoParcela;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQtdeParcelas(): ?int
    {
        return $this->qtdeParcelas;
    }

    /**
     * @param int|null $qtdeParcelas
     *
     * @return CabecalhoSubModelo
     */
    public function setQtdeParcelas(?int $qtdeParcelas): CabecalhoSubModelo
    {
        $this->qtdeParcelas = $qtdeParcelas;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrigemPedido(): ?string
    {
        return $this->origemPedido;
    }

    /**
     * @param string|null $origemPedido
     *
     * @return CabecalhoSubModelo
     */
    public function setOrigemPedido(?string $origemPedido): CabecalhoSubModelo
    {
        $this->origemPedido = $origemPedido;

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
     * @return CabecalhoSubModelo
     */
    public function setCodigoCenarioImpostos(?int $codigoCenarioImpostos): CabecalhoSubModelo
    {
        $this->codigoCenarioImpostos = $codigoCenarioImpostos;

        return $this;
    }
}
