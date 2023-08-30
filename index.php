<?php
/**********************************************************************************************************************/
/* THIS IS A SANDBOX TEST FILE                                                                                        */
/**********************************************************************************************************************/

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\ContaReceberListarRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\ClienteConsultarRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\ProdutoConsultarRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\ProdutoListarRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\PedidoConsultarRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\PedidoEntityOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\PedidoListarRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\PedidoStatusRequestOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\CabecalhoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\IdeSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\InformacoesAdicionaisSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ProdutoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\ListarOrdensRequest;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\OrdemOmieModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DepartamentoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DespesaReembolsavelSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DespesasReembolsaveisSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ImpostosSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ParcelaSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ProdutoUtilizadoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ServicoPrestadoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ViaUnicaSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\TrocarEtapaOrdemRequest;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\VerificarStatusOrdemRequest;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\ListarServicosRequest;
use CanisLupus\ApiClients\Omie\v1\OmieApiClient;
use CanisLupus\ApiClients\Omie\v1\OmieApiConfig;

require('vendor/autoload.php');
$clientKeys = require('env.php');

$clientOmie = new OmieApiClient(new OmieApiConfig($clientKeys['appKey'], $clientKeys['appSecret']));
/*
if (!$clientOmie->testConfiguration()) {
    die('Invalid configurations');
}
*/
// Definição de Padrões
// $clientOmie::setPadraoRegistrosPorPagina(500);

try {
    /*********************************************************/
    /* CENÁRIOS                                              */
    /*********************************************************/

    // Listar
    /*
    $cenarios = $clientOmie->cenarios()->listar();
    */


    /*********************************************************/
    /* CONTAS CORRENTES                                      */
    /*********************************************************/

    // Listar
    /*
    $contasCorrentes = $clientOmie->contasCorrentes()->listar();
    */


    /*********************************************************/
    /* LOCAIS DE ESTOQUE                                     */
    /*********************************************************/

    // Listar
    /*
    $locaisDeEstoque = $clientOmie->locais()->listar();
    */


    /*********************************************************/
    /* CONSULTAS DE ESTOQUE                                  */
    /*********************************************************/

    // Listar Posições
    /*
    $posicoesDeEstoque = $clientOmie->consultasDeEstoque()->listarPosicoes([
        'dDataPosicao'   => '28/03/2023',
        'lista_produtos' => [[
            'nCodProd' => '1276783025',
        ], [
            'nCodProd' => '1283436238',
        ]],
    ]);
    */


    /*********************************************************/
    /* CLIENTES                                              */
    /*********************************************************/

    // Listar

    /*
    //$clientes = $clientOmie->clientes()->listar();
    //$clientes = $clientOmie->clientes()->consultar(new ClienteConsultarRequestOmieModel(1276409875));

    $clientes = $clientOmie->clientes()->listar([
        'clientesFiltro' => [
            'cnpj_cpf' => '41149451050'
        ]
    ]);
    */


    // Editar
    /*
    $cliente = $clientOmie->clientes()->consultar(new ClienteConsultarRequestOmieModel(1266023081));
    $cliente->setTags([new TagSubModelo('Cliente')]);
    $clientOmie->clientes()->alterar($cliente);
    */


    /*********************************************************/
    /* PRODUTOS                                              */
    /*********************************************************/

    // Listar
    /*
    // Há duas formas de filtrar a listagem, usando o objeto ProdutoListarRequestOmieModel
    // ou passando um array
    $request = new ProdutoListarRequestOmieModel();
    $request->setFiltrarApenasMarketPlace('S');

    $items = $clientOmie->produtos()->listar([
        'apenas_importado_api'       => "S",
        'filtrar_apenas_marketplace' => "S",
    ]);

    $items = $clientOmie->produtos()->listar($request);

    echo "<pre>";
    var_dump($items);
    echo "</pre>";
    die;
    */

    // Consultar
    /*
    $requestConsulta = new ProdutoConsultarRequestOmieModel();
    $requestConsulta->setCodigo('PRD00001');
    $item01 = $clientOmie->produtos()->consultar($requestConsulta);
    */

    // Comparar
    /*
    $item02 = clone($item01);
    $item02->setValorUnitario(3.98);
    $comparison = $clientOmie->produtos()->comparar($item01, $item02);
    */


    /*********************************************************/
    /* SERVIÇOS                                              */
    /*********************************************************/

    // Listar
    /*
    // Há duas formas de filtrar a listagem, usando o objeto ListarServicosRequest
    //$request = new ListarServicosRequest();
    //$request->inativo = 'N';
    //$servicos = $clientOmie->servicos->cadastro->listar($request);

    // ou passando um array
    $servicos = $clientOmie->servicos->cadastro->listar([]);
    */

    // Listar Todos
    /*
    $servicos = $clientOmie->servicos->cadastro->listarTodos();
    //$servicos = $clientOmie->servicos->cadastro->listarTodos($request);
    */



    /*********************************************************/
    /* ORDENS DE SERVIÇOS                                    */
    /*********************************************************/

    // Listar
    /*
    // Não passando nada, para obter apenas os registros da 1º página
    //$ordensDeServico = $clientOmie->servicos->ordens->listar();

    // Há duas formas de filtrar a listagem, usando o objeto ListarOrdensRequest
    $request = new ListarOrdensRequest();
    //$request->apenasImportadoApi = '';
    //$request->ordenarPor = 'CODIGO'; // CODIGO - Código do lançamento do Omie | INTEGRACAO - Código do lançamento interno do seu sistema | DATA_LANCAMENTO - Data do lançamento.
    //$request->ordemDecrescente = 'N'; // S - Sim | N - Não
    //$request->filtrarPorDataDe = '';
    //$request->filtrarPorDataAte = '';
    //$request->filtrarApenasInclusao = 'S'; // S - Sim | N - Não
    //$request->filtrarApenasAlteracao = 'S'; // S - Sim | N - Não
    //$request->filtrarPorStatus = 'N'; // F - Faturada | N - Não faturada | C - Cancelada
    //$request->filtrarPorEtapa = '50';
    //$request->filtrarPorCliente = '';
    //$request->filtrarPorDataPrevisaoDe = '';
    //$request->filtrarPorDataPrevisaoAte = '';
    //$request->filtrarPorDataFaturamentoDe = '';
    //$request->filtrarPorDataFaturamentoAte = '';
    //$request->filtrarPorDataCancelamentoDe = '';
    //$request->filtrarPorDataCancelamentoAte = '';
    //$request->exibirDespesas = 'S'; // S - Sim | N - Não
    //$request->exibirProdutos = 'S'; // S - Sim | N - Não
    //$request->tipoFat = 'REC'; // REC - Recibo | NFS - NFS-e | VUF - Via única não autorizada | VUA - Via única autorizada

    $request->filtrarPorCodigo = [
        ['idOmie' => '2036552875'],
        ['idOmie' => '2036771854'],
    ];
    $ordensDeServico = $clientOmie->servicos->ordens->listar($request);

    // ou passando um array
    //$ordensDeServico = $clientOmie->servicos->ordens->listar([]);
    */

    // Listar Todos
    /*
    $ordensDeServico = $clientOmie->servicos->ordens->listarTodos();
    //$ordensDeServico = $clientOmie->servicos->ordens->listarTodos($request);
    */

    // Incluir
    /*
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
    */

    // Excluir
    /*
    $ordensDeServico = $clientOmie->servicos->ordens->listarTodos();
    $os = $ordensDeServico[0];

    //$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->idOmie);
    //$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->idOmie, 'idOmie');
    //$result = $clientOmie->servicos->ordens->excluir($os->cabecalho->idIntegracao, 'idIntegracao');
    $result = $clientOmie->servicos->ordens->excluir($os->cabecalho->numeroOs, 'numeroOs');
    */

    // Alterar
    /*
    $os = $clientOmie->servicos->ordens->consultar(118, 'numeroOs');
    $os->informacoesAdicionais->dadosAdicionaisNF = "Dados alterados pela API";

    $result = $clientOmie->servicos->ordens->alterar($os);
    */

    // Consultar
    /*
    //$result = $clientOmie->servicos->ordens->consultar(2036552875);
    //$result = $clientOmie->servicos->ordens->consultar(2036552875, 'idOmie');
    //$result = $clientOmie->servicos->ordens->consultar('1222', 'idIntegracao');
    $result = $clientOmie->servicos->ordens->consultar(102, 'numeroOs');
    */

    // Verificar Status
    /*
    // Há duas formas de verificar o status, passando o objeto VerificarStatusOrdemRequest
    //$request = new VerificarStatusOrdemRequest('2036552875');
    //$request = new VerificarStatusOrdemRequest('2036552875', null, true, true, true, true);
    //$request = new VerificarStatusOrdemRequest('2036552875');
    //$request->exibirRecibo = true;
    //$statusOs = $clientOmie->servicos->ordens->verificarStatus($request);

    // ou passando um array
    $statusOs = $clientOmie->servicos->ordens->verificarStatus([
        'nCodOS' => '2036552875',
        'lRps'   => true,
    ]);
    */

    // Trocar Etapa
    /*
    // Há duas formas de trocar o status, passando o objeto TrocarEtapaOrdemRequest
    //$request = new TrocarEtapaOrdemRequest('2036552875', null, null, 20);
    //$request = new TrocarEtapaOrdemRequest('2036552875');
    //$request->etapa = 30;
    //$result = $clientOmie->servicos->ordens->trocarEtapa($request);

    // ou passando um array
    $result = $clientOmie->servicos->ordens->trocarEtapa([
        'nCodOS' => '2036552875',
        'cEtapa'   => 20,
    ]);
    */


    /*********************************************************/
    /* PEDIDOS                                               */
    /*********************************************************/

    // Listar
    /*
    // Há duas formas de filtrar a listagem

    // Usando o objeto PedidoListarRequestOmieModel
    $request = new PedidoListarRequestOmieModel();
    $request->setNumeroPedidoDe('1');
    $request->setNumeroPedidoAte('100');

    //$pedidos = $clientOmie->pedidos()->listar($request);

    // Ou Passando um simples array
    $pedidos = $clientOmie->pedidos()->listar([
        'numero_pedido_de'  => '1',
        'numero_pedido_ate' => '100',
    ]);

    echo "<pre>";
    var_dump($pedidos);
    echo "</pre>";
    die;
    */

    // Incluir
    /*
    $novoPedido = new PedidoEntityOmieModel();

    $novoPedidoCabecalho = new CabecalhoSubModel();
    $novoPedidoCabecalho->setCodigoCliente(1266092634);
    $novoPedidoCabecalho->setCodigoPedidoIntegracao('9');
    $novoPedidoCabecalho->setDataPrevisao('01/08/2022');
    $novoPedidoCabecalho->setEtapa('10');
    $novoPedidoCabecalho->setCodigoParcela('000');
    $novoPedidoCabecalho->setCodigoCenarioImpostos('1852497680');

    $novoPedidoInformacoesAdicionais = new InformacoesAdicionaisSubModelo();
    $novoPedidoInformacoesAdicionais->setCodigoCategoria("1.01.03");
    $novoPedidoInformacoesAdicionais->setCodigoContaCorrente(1266022703);

    $novoPedidoDets = [];
    $novoPedidoDets[] = new DetSubModelo(new IdeSubModelo('1'), new ProdutoSubModelo(1266022961, 2, 2.99));
    $novoPedidoDets[] = new DetSubModelo(new IdeSubModelo('2'), new ProdutoSubModelo(1266022965, 20, 1.80));

    $novoPedido->setCabecalho($novoPedidoCabecalho);
    $novoPedido->setDet($novoPedidoDets);
    $novoPedido->setInformacoesAdicionais($novoPedidoInformacoesAdicionais);

    $result = $clientOmie->pedidos()->incluir($novoPedido);
    */

    // Consultar
    /*
    $pedido = $clientOmie->pedidos()->consultar(new PedidoConsultarRequestOmieModel(2019366037));
    */


    // Status
    /*
    $statusPedido = $clientOmie->pedidos()->status(new PedidoStatusRequestOmieModel(3018120326));
    echo "<pre>";
    var_dump($statusPedido);
    echo "</pre>";
    die;
    */


    /*********************************************************/
    /* CONTAS A RECEBER                                      */
    /*********************************************************/

    // Listar
    /*
    // Há duas formas de filtrar a listagem

    // Usando o objeto ContaReceberListarRequestOmieModel
    $request = new ContaReceberListarRequestOmieModel();
    $request->setFiltrarCliente('1266092634');

    //$contasReceber = $clientOmie->contasReceber()->listar($request);

    // Ou Passando um simples array
    $contasReceber = $clientOmie->contasReceber()->listar([
        'filtrar_apenas_titulos_em_aberto' => 'S',
        'filtrar_cliente'                  => '1266092634',
    ]);

    echo "<pre>";
    var_dump($contasReceber);
    echo "</pre>";
    die;
    */


    /*********************************************************/
    /* CONTAS A RECEBER BOLETO                               */
    /*********************************************************/

    // Obter
    /*
    $boleto = $clientOmie->contasReceberBoleto()->obter([
        'nCodTitulo' => '2015242931',
    ]);

    echo "<pre>";
    var_dump($boleto);
    echo "</pre>";
    die;
    */


} catch (OmieApiException $e) {
    $errorCode = $e->getOmieErrorCode();
    $errorMessage = $e->getOmieErrorMessage();
    die("Error Code: " . $errorCode . "<br>Error Message: " . $errorMessage);
}


