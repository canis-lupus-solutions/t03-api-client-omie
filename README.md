# API CLIENT - OMIE

Cliente para integração com a API do sistema ERP Omie. [Conheça o Omie](https://www.omie.com.br/sistema-erp)

## Instalação

### Composer

```
"canislupus/api-client-omie": "dev-master"
```

## Utilização

~~~php
use CanisLupus\ApiClients\Omie\v1\OmieApiClient;
use CanisLupus\ApiClients\Omie\v1\OmieApiConfig;

$clientOmie = new OmieApiClient(new OmieApiConfig('#appKey', '#appSecret'));

// A variável $clientOmie agora poderá ser utilizada para chamar os métodos da API

// Exemplo para a API de serviços

// LISTAR SERVIÇOS
// Irá trazer a primeira página de registros de serviços do Omie, permitindo filtros.
$servicos = $clientOmie->servicos->cadastro->listar();

// Há duas formas de filtrar a listagem, usando o objeto ListarServicosRequest.
$request = new ListarServicosRequest();
$request->inativo = 'N';
$servicosFiltrados = $clientOmie->servicos->cadastro->listar($request);

// Ou passando um array
$servicosFiltrados = $clientOmie->servicos->cadastro->listar(['inativo' => 'N']);


// LISTAR TODOS
// Irá trazer todos os serviços do Omie. Também permite os mesmos filtros do método listar. 
$servicos = $clientOmie->servicos->cadastro->listarTodos();
$servicosFiltrados = $clientOmie->servicos->cadastro->listarTodos($request);

~~~


## Exemplos

### Ordens de Serviço

~~~php
use CanisLupus\ApiClients\Omie\v1\OmieApiClient;
use CanisLupus\ApiClients\Omie\v1\OmieApiConfig;

$clientOmie = new OmieApiClient(new OmieApiConfig('#appKey', '#appSecret'));

// LISTAR
// Irá trazer a primeira página de registros de ordens de serviço do Omie, permitindo filtros.
$ordensDeServico = $clientOmie->servicos->ordens->listar();

// Há duas formas de filtrar a listagem, usando o objeto ListarOrdensRequest
$request = new ListarOrdensRequest();
$request->ordenarPor = 'DATA_LANCAMENTO';
$request->filtrarPorEtapa = '50';
$ordensDeServicoFiltrados = $clientOmie->servicos->ordens->listar($request);

// Ou passando um array
$ordensDeServicoFiltrados = $clientOmie->servicos->ordens->listar([
    'ordenarPor'      => 'DATA_LANCAMENTO',
    'filtrarPorEtapa' => '50',
]);


// LISTAR TODOS
// Irá trazer todos os serviços do Omie. Também permite os mesmos filtros do método listar.
$ordensDeServico = $clientOmie->servicos->ordens->listarTodos();
$ordensDeServicoFiltrados = $clientOmie->servicos->ordens->listarTodos($request);


// INCLUIR
$ordemDeServico = new OrdemOmieModel();
$ordemDeServico->cabecalho->idIntegracao = '2';
$ordemDeServico->cabecalho->etapa = 10;
$ordemDeServico->cabecalho->dataPrevisao = '11/07/2023';
$ordemDeServico->cabecalho->idOmieCliente = '1266115471';
$ordemDeServico->cabecalho->quantidadeParcelas = 1;
$ordemDeServico->cabecalho->codigoParcela = '000';

$ordemDeServico->informacoesAdicionais->codigoCategoria = '1.01.02';
$ordemDeServico->informacoesAdicionais->idOmieContaCorrente = 1266022922;
$ordemDeServico->informacoesAdicionais->dadosAdicionaisNF = 'OS incluída via API';
$ordemDeServico->informacoesAdicionais->cidadeDePrestacaoDoServico = 'JUIZ DE FORA (MG)';

$servico1 = new ServicoPrestadoSubModel();
$servico1->idOmieServico = 2021517985;
$servico1->quantidade = 1;
$servico1->valorUnitario = 11.85;
$servico1->tipoDesconto = 'V';
$servico1->valorDesconto = 0;

$ordemDeServico->servicosPrestados[] = $servico1;

$result = $clientOmie->servicos->ordens->incluir($ordemDeServico);


// EXCLUIR
// Pegaremos uma OS qualquer para testar a exclusão
$ordensDeServico = $clientOmie->servicos->ordens->listarTodos();
$os = $ordensDeServico[0];

// É possível excluir passando 1 dos 3 tipos de identificadores possíveis
// O idOmie, podendo omitir o segundo argumento para este caso
$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->idOmie, 'idOmie');
$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->idOmie);

// idIntegracao ou numeroOs, devendo passar o segundo argumento de acordo
$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->idIntegracao, 'idIntegracao');
$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->numeroOs, 'numeroOs');


// ALTERAR
$os = $clientOmie->servicos->ordens->consultar(118, 'numeroOs');
$os->informacoesAdicionais->dadosAdicionaisNF = "Dados alterados pela API";

$result = $clientOmie->servicos->ordens->alterar($os);


// CONSULTAR
// É possível consultar passando 1 dos 3 tipos de identificadores possíveis
// O idOmie, podendo omitir o segundo argumento para este caso
$result = $clientOmie->servicos->ordens->consultar(2036552875, 'idOmie');
$result = $clientOmie->servicos->ordens->consultar(2036552875);

// idIntegracao ou numeroOs, devendo passar o segundo argumento de acordo
$result = $clientOmie->servicos->ordens->consultar('1222', 'idIntegracao');
$result = $clientOmie->servicos->ordens->consultar(102, 'numeroOs');


// VERIFICAR STATUS    
// Há duas formas de verificar o status, passando o objeto VerificarStatusOrdemRequest
$request = new VerificarStatusOrdemRequest('2036552875');
$request->exibirRecibo = true;
$statusOs = $clientOmie->servicos->ordens->verificarStatus($request);

// ou passando um array
$statusOs = $clientOmie->servicos->ordens->verificarStatus([
    'nCodOS' => '2036552875',
    'lRps'   => true,
]);


// TROCAR ETAPA
// Há duas formas de trocar o status, passando o objeto TrocarEtapaOrdemRequest
$request = new TrocarEtapaOrdemRequest('2036552875');
$request->etapa = 30;
$result = $clientOmie->servicos->ordens->trocarEtapa($request);

// ou passando um array
$result = $clientOmie->servicos->ordens->trocarEtapa([
    'nCodOS' => '2036552875',
    'cEtapa'   => 20,
]);
~~~

Em breve exemplos de utilização aqui. 


## Abrangência das API's

<table>
<tr>
    <td>Total de API's</td>
    <td>128</td>
</tr>
<tr>
    <td>Total de API's abrangidas 100%</td>
    <td>1</td>
</tr>
<tr>
    <td>Percentual abrangido 100%</td>
    <td>1,28%</td>
</tr>
</table>



### Lista de API's

| **Grupo** | **SubGrupo** | **Recurso**                                  | **Situação** |
|-----------|--------------|----------------------------------------------|:------------:|
| Geral     |              | Clientes, Fornecedores, Transportadoras, etc |     75%      |
| Geral     |              | Clientes - Características                   |      0%      |
| Geral     |              | Clientes - Tags                              |     75%      |
| Geral     |              | Vendedores                                   |      0%      |
| Geral     |              | Projetos                                     |      0%      |
| Geral     |              | Empresas                                     |     50%      |
| Geral     |              | Departamentos                                |      0%      |
| Geral     |              | Categorias                                   |      0%      |
| Geral     |              | Parcelas                                     |      0%      |
| Geral     |              | Tipos de Atividade da Empresa                |      0%      |
| Geral     |              | Cidades                                      |      5%      |
| Geral     |              | Países                                       |      0%      |
| Geral     |              | Documentos Anexos                            |      0%      |
| Geral     |              | Tipos de Anexos                              |      0%      |
| Geral     |              | Tipo de Entrega                              |      0%      |
| Geral     |              | Tipo de Assinante                            |      0%      |
| Geral     | Finanças     | Tipos de Documento                           |      0%      |
| Geral     | Finanças     | Tipos de Contas Correntes                    |      0%      |
| Geral     | Finanças     | Contas Correntes                             |     25%      |
| Geral     | Finanças     | Bancos                                       |      0%      |
| Geral     | Finanças     | Contas do DRE                                |      0%      |
| Geral     | Finanças     | Finalidade de Transferência                  |      0%      |
| Geral     | Finanças     | Origem de títulos                            |      0%      |
| Geral     | Finanças     | Bandeiras de Cartão                          |      0%      |
| Geral     | Produtos     | Produtos                                     |     25%      |
| Geral     | Produtos     | Produtos - Características                   |      0%      |
| Geral     | Produtos     | Produtos - Estrutura                         |      0%      |
| Geral     | Produtos     | Produtos - Kit                               |      0%      |
| Geral     | Produtos     | Familias de Produto                          |      0%      |
| Geral     | Produtos     | Unidades                                     |      0%      |
| Geral     | Produtos     | Cenário de Impostos                          |     50%      |
| Geral     | Produtos     | Características                              |      0%      |
| Geral     | Produtos     | Meios de Pagamento                           |      0%      |
| Geral     | Produtos     | Origem do Pedido                             |      0%      |
| Geral     | Produtos     | Motivos de Devolução                         |      0%      |
| CRM       |              | Contas                                       |      0%      |
| CRM       |              | Contas - Características                     |      0%      |
| CRM       |              | Contatos                                     |      0%      |
| CRM       |              | Oportunidades                                |      0%      |
| CRM       |              | Oportunidades - Resumo                       |      0%      |
| CRM       |              | Tarefas                                      |      0%      |
| CRM       |              | Tarefas - Resumo                             |      0%      |
| CRM       | Auxiliares   | Soluções                                     |      0%      |
| CRM       | Auxiliares   | Fases                                        |      0%      |
| CRM       | Auxiliares   | Usuários                                     |      0%      |
| CRM       | Auxiliares   | Status                                       |      0%      |
| CRM       | Auxiliares   | Motivos                                      |      0%      |
| CRM       | Auxiliares   | Tipos                                        |      0%      |
| CRM       | Auxiliares   | Parceiros                                    |      0%      |
| CRM       | Auxiliares   | Finders                                      |      0%      |
| CRM       | Auxiliares   | Origens                                      |      0%      |
| CRM       | Auxiliares   | Concorrentes                                 |      0%      |
| CRM       | Auxiliares   | Verticais                                    |      0%      |
| CRM       | Auxiliares   | Tipos de Tarefas                             |      0%      |
| Finanças  |              | Contas Correntes - Lançamentos               |      0%      |
| Finanças  |              | Contas a Pagar - Lançamentos                 |      0%      |
| Finanças  |              | Contas a Receber - Lançamentos               |     25%      |
| Finanças  |              | Contas a Receber - Boletos                   |     25%      |
| Finanças  |              | Contas a Receber - PIX                       |      0%      |
| Finanças  |              | Extrato de Conta Corrente                    |      0%      |
| Finanças  |              | Orçamento de Caixa                           |      0%      |
| Finanças  |              | Pesquisar Títulos                            |      0%      |
| Finanças  |              | Movimentos Financeiros                       |      0%      |
| Finanças  |              | Resumo                                       |      0%      |
| Produtos  | Compras      | Requisições de Compra                        |      0%      |
| Produtos  | Compras      | Pedidos de Compra                            |      0%      |
| Produtos  | Compras      | Ordens de Produção                           |      0%      |
| Produtos  | Compras      | Nota de Entrada                              |      0%      |
| Produtos  | Compras      | Nota de Entrada - Faturamento                |      0%      |
| Produtos  | Compras      | Recebimento de Nota Fiscal                   |      0%      |
| Produtos  | Compras      | Resumo                                       |      0%      |
| Produtos  | Auxiliares   | Formas de Pagamento                          |      0%      |
| Produtos  | Auxiliares   | NCM                                          |      0%      |
| Produtos  | Auxiliares   | Etapas de Faturamento                        |      0%      |
| Produtos  | Auxiliares   | Tabela de Preços                             |     75%      |
| Produtos  | Impostos     | CFOP                                         |      0%      |
| Produtos  | Impostos     | CNAE                                         |      0%      |
| Produtos  | Impostos     | ICMS - CST                                   |      0%      |
| Produtos  | Impostos     | ICMS - CSOSN                                 |      0%      |
| Produtos  | Impostos     | ICMS - Origem da Mercadoria                  |      0%      |
| Produtos  | Impostos     | PIS - CST                                    |      0%      |
| Produtos  | Impostos     | COFINS - CST                                 |      0%      |
| Produtos  | Impostos     | IPI - CST                                    |      0%      |
| Produtos  | Impostos     | IPI - Enquadramento                          |      0%      |
| Produtos  | Impostos     | Tipo de Cálculo                              |      0%      |
| Produtos  | Impostos     | CEST                                         |      0%      |
| Produtos  | Venda        | Pedidos de Venda - Resumido                  |      0%      |
| Produtos  | Venda        | Pedidos de Venda                             |     75%      |
| Produtos  | Venda        | Pedidos de Venda - Faturamento               |      0%      |
| Produtos  | Venda        | Pedidos de Venda - Etapas                    |      0%      |
| Produtos  | Venda        | CT-e / CT-e OS                               |      0%      |
| Produtos  | Venda        | Remessa de Produtos                          |      0%      |
| Produtos  | Venda        | Remessa de Produtos - Faturamento            |      0%      |
| Produtos  | Venda        | Resumo                                       |      0%      |
| Produtos  | Venda        | Obter Documentos                             |      0%      |
| Produtos  | Cupom Fiscal | Adicionar                                    |      0%      |
| Produtos  | Cupom Fiscal | Cancelar ou excluir                          |      0%      |
| Produtos  | Cupom Fiscal | Consultar                                    |      0%      |
| Produtos  | Cupom Fiscal | Importar NFC-e                               |      0%      |
| Produtos  | Cupom Fiscal | Importar CFe-Sat                             |      0%      |
| Produtos  | NF-e         | Consultas                                    |      0%      |
| Produtos  | NF-e         | Utilitários                                  |      0%      |
| Produtos  | NF-e         | Importar                                     |      0%      |
| Estoque   |              | Ajustes de Estoque                           |      0%      |
| Estoque   |              | Consulta Estoque                             |     25%      |
| Estoque   |              | Movimento Estoque                            |      0%      |
| Estoque   |              | Locais de Estoque                            |     25%      |
| Estoque   |              | Resumo do Estoque                            |      0%      |
| Estoque   | Auxiliares   | Compradores                                  |      0%      |
| Estoque   | Auxiliares   | Produto x Fornecedor                         |      0%      |
| Serviços  |              | Serviços                                     |     25%      |
| Serviços  |              | Ordens de Serviço                            |     100%     |
| Serviços  |              | Ordens de Serviço - Faturamento              |      0%      |
| Serviços  |              | Contratos de Serviço                         |      0%      |
| Serviços  |              | Contratos de Serviço - Faturamento           |      0%      |
| Serviços  |              | Resumo                                       |      0%      |
| Serviços  |              | Obter Documentos                             |      0%      |
| Serviços  | NFS-e        | Consultas                                    |      0%      |
| Serviços  | Auxiliares   | Serviços no Município                        |      0%      |
| Serviços  | Auxiliares   | Tipos de Tributação                          |      0%      |
| Serviços  | Auxiliares   | LC 116                                       |      0%      |
| Serviços  | Auxiliares   | NBS                                          |      0%      |
| Serviços  | Auxiliares   | IBPT                                         |      0%      |
| Serviços  | Auxiliares   | Tipo de Faturamento de Contrato              |      0%      |
| Serviços  | Auxiliares   | Tipo de utilização                           |      0%      |
| Serviços  | Auxiliares   | Classificação do Serviço                     |      0%      |
| Contador  |              | Documentos Fiscais                           |      0%      |
| Contador  |              | Resumo                                       |      0%      |


## Contribua

Faça a sua contribuição ao código abrindo um Pull Request.  
Ou  
Faça uma doação  
[]()
[![Doe utilizando o PayPal!](https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/34_Yellow_PayPal_Pill_Button.png)](https://www.paypal.com/donate/?hosted_button_id=XHTVXSBCQCL8Y)
## Licença

- MIT License
