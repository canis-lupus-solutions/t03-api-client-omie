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
    <td>Percentual abrangido</td>
    <td>1,28%</td>
</tr>
</table>
 

### Lista de API's

<table>
<thead>
<tr>
    <th>Grupo</th>
    <th>SubGrupo</th>
    <th>Recurso</th>
    <th>Situação</th>    
</tr>
</thead>
<tbody>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Clientes|Fornecedores|Transportadoras|etc</th>
    <th><span style="color:cornflowerblue">75%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Clientes - Características</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Clientes - Tags</th>
    <th><span style="color:cornflowerblue">75%</span></th>
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Vendedores</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Projetos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Empresas</th>
    <th><span style="color:cornflowerblue">50%</span></th>
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Departamentos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Categorias</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Parcelas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Tipos de Atividade da Empresa</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Cidades</th>
    <th><span style="color:cornflowerblue">5%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Países</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Documentos Anexos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Tipos de Anexos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Tipo de Entrega</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th></th>
    <th style="text-align:left;">Tipo de Assinante</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Tipos de Documento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Tipos de Contas Correntes</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Contas Correntes</th>
    <th><span style="color:cornflowerblue">25%</span></th>
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Bancos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Contas do DRE</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Finalidade de Transferência</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Origem de títulos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Finanças</th>
    <th style="text-align:left;">Bandeiras de Cartão</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Produtos</th>
    <th><span style="color:cornflowerblue">25%</span></th>
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Produtos - Características</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Produtos - Estrutura</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Produtos - Kit</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Familias de Produto</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Unidades</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Cenário de Impostos</th>
    <th><span style="color:cornflowerblue">50%</span></th>
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Características</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Meios de Pagamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Origem do Pedido</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Geral</th>
    <th>Produtos</th>
    <th style="text-align:left;">Motivos de Devolução</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Contas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Contas - Características</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Contatos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Oportunidades</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Oportunidades - Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Tarefas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th></th>
    <th style="text-align:left;">Tarefas - Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Soluções</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Fases</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Usuários</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Status</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Motivos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Tipos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Parceiros</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Finders</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Origens</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Concorrentes</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Verticais</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>CRM</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Tipos de Tarefas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Contas Correntes - Lançamentos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Contas a Pagar - Lançamentos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Contas a Receber - Lançamentos</th>
    <th><span style="color:cornflowerblue">25%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Contas a Receber - Boletos</th>
    <th><span style="color:cornflowerblue">25%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Contas a Receber - PIX</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Extrato de Conta Corrente</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Orçamento de Caixa</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Pesquisar Títulos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Movimentos Financeiros</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Finanças</th>
    <th></th>
    <th style="text-align:left;">Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Requisições de Compra</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Pedidos de Compra</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Ordens de Produção</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Nota de Entrada</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Nota de Entrada - Faturamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Recebimento de Nota Fiscal</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Compras</th>
    <th style="text-align:left;">Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Formas de Pagamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">NCM</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Etapas de Faturamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Tabela de Preços</th>
    <th><span style="color:cornflowerblue">75%</span></th>
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">CFOP</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">CNAE</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">ICMS - CST</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">ICMS - CSOSN</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">ICMS - Origem da Mercadoria</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">PIS - CST</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">COFINS - CST</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">IPI - CST</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">IPI - Enquadramento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">Tipo de Cálculo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Impostos</th>
    <th style="text-align:left;">CEST</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Pedidos de Venda - Resumido</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Pedidos de Venda</th>
    <th><span style="color:cornflowerblue">75%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Pedidos de Venda - Faturamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Pedidos de Venda - Etapas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">CT-e / CT-e OS</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Remessa de Produtos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Remessa de Produtos - Faturamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Venda</th>
    <th style="text-align:left;">Obter Documentos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

<tr>
    <th>Produtos</th>
    <th>Cupom Fiscal</th>
    <th style="text-align:left;">Adicionar</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Cupom Fiscal</th>
    <th style="text-align:left;">Cancelar ou excluir</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Cupom Fiscal</th>
    <th style="text-align:left;">Consultar</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Cupom Fiscal</th>
    <th style="text-align:left;">Importar NFC-e</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>Cupom Fiscal</th>
    <th style="text-align:left;">Importar CFe-Sat</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>NF-e</th>
    <th style="text-align:left;">Consultas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>NF-e</th>
    <th style="text-align:left;">Utilitários</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Produtos</th>
    <th>NF-e</th>
    <th style="text-align:left;">Importar</th>
    <th><span style="color:gray">0%</span></th>    
</tr>


<tr>
    <th>Estoque</th>
    <th></th>
    <th style="text-align:left;">Ajustes de Estoque</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Estoque</th>
    <th></th>
    <th style="text-align:left;">Consulta Estoque</th>
    <th><span style="color:cornflowerblue">25%</span></th>
</tr>
<tr>
    <th>Estoque</th>
    <th></th>
    <th style="text-align:left;">Movimento Estoque</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Estoque</th>
    <th></th>
    <th style="text-align:left;">Locais de Estoque</th>
    <th><span style="color:cornflowerblue">25%</span></th>
</tr>
<tr>
    <th>Estoque</th>
    <th></th>
    <th style="text-align:left;">Resumo do Estoque</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Estoque</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Compradores</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Estoque</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Produto x Fornecedor</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Serviços</th>
    <th><span style="color:cornflowerblue">25%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Ordens de Serviço</th>
    <th><span style="color:green">100%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Ordens de Serviço - Faturamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Contratos de Serviço</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Contratos de Serviço - Faturamento</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th></th>
    <th style="text-align:left;">Obter Documentos</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>NFS-e</th>
    <th style="text-align:left;">Consultas</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Serviços no Município</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Tipos de Tributação</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">LC 116</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">NBS</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">IBPT</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Tipo de Faturamento de Contrato</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Tipo de utilização</th>
    <th><span style="color:gray">0%</span></th>    
</tr>
<tr>
    <th>Serviços</th>
    <th>Auxiliares</th>
    <th style="text-align:left;">Classificação do Serviço</th>
    <th><span style="color:gray">0%</span></th>    
</tr>


<tr>
    <th>Contador</th>
    <th></th>
    <th style="text-align:left;">Documentos Fiscais</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

<tr>
    <th>Contador</th>
    <th></th>
    <th style="text-align:left;">Resumo</th>
    <th><span style="color:gray">0%</span></th>    
</tr>

</tbody>
</table>


## Contribua

Faça a sua contribuição ao código abrindo um Pull Request.  
Ou  
Faça uma doação  
[]()
[![Doe utilizando o PayPal!](https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/34_Yellow_PayPal_Pill_Button.png)](https://www.paypal.com/donate/?hosted_button_id=XHTVXSBCQCL8Y)
## Licença

- MIT License
