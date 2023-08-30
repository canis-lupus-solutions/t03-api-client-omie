<?php
namespace CanisLupus\ApiClients\Omie\v1;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Models\Estoque\Consultas\ConsultasDeEstoqueHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Estoque\Locais\LocaisHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\ContasReceberHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceberBoleto\ContasReceberBoletoHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Cenarios\CenariosHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\ClientesHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente\ContasCorrentesHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Empresas\EmpresasHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\ProdutosHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags\TagsHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\PedidosHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\TabelasDePrecosHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\ServicosHandler;


/**
 * Class OmieApiClient.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1
 * @name    OmieApiClient
 * @version 1.0.0
 */
class OmieApiClient
{
    static int $padraoRegistrosPorPagina = 500;

    public ServicosHandler $servicos;

    protected EmpresasHandler $empresas;
    protected ProdutosHandler $produtos;
    protected TabelasDePrecosHandler $tabelasDePrecos;
    protected ClientesHandler $clientes;
    protected TagsHandler $tags;
    protected PedidosHandler $pedidos;
    protected ContasCorrentesHandler $contasCorrentes;
    protected CenariosHandler $cenarios;
    protected LocaisHandler $locais;
    protected ContasReceberHandler $contasReceber;
    protected ContasReceberBoletoHandler $contasReceberBoleto;
    protected ConsultasDeEstoqueHandler $consultasDeEstoque;


    /**
     * @param OmieApiConfig $config
     */
    public function __construct(
        OmieApiConfig $config
    )
    {
        $this->empresas = new EmpresasHandler($config);
        $this->produtos = new ProdutosHandler($config);
        $this->servicos = new ServicosHandler($config);
        $this->tabelasDePrecos = new TabelasDePrecosHandler($config);
        $this->clientes = new ClientesHandler($config);
        $this->tags = new TagsHandler($config);
        $this->pedidos = new PedidosHandler($config);
        $this->contasCorrentes = new ContasCorrentesHandler($config);
        $this->cenarios = new CenariosHandler($config);
        $this->locais = new LocaisHandler($config);
        $this->contasReceber = new ContasReceberHandler($config);
        $this->contasReceberBoleto = new ContasReceberBoletoHandler($config);
        $this->consultasDeEstoque = new ConsultasDeEstoqueHandler($config);
    }


    /**
     * @param int $padraoRegistrosPorPagina
     */
    public static function setPadraoRegistrosPorPagina(int $padraoRegistrosPorPagina): void
    {
        self::$padraoRegistrosPorPagina = $padraoRegistrosPorPagina;
    }

    /**
     * @return bool
     */
    public function testConfiguration(): bool
    {
        try {
            $this->empresas->listar();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @return EmpresasHandler
     */
    public function empresas(): EmpresasHandler
    {
        return $this->empresas;
    }

    /**
     * @return ProdutosHandler
     */
    public function produtos(): ProdutosHandler
    {
        return $this->produtos;
    }

    /**
     * @return TabelasDePrecosHandler
     */
    public function tabelasDePrecos(): TabelasDePrecosHandler
    {
        return $this->tabelasDePrecos;
    }

    /**
     * @return ClientesHandler
     */
    public function clientes(): ClientesHandler
    {
        return $this->clientes;
    }

    /**
     * @return TagsHandler
     */
    public function tags(): TagsHandler
    {
        return $this->tags;
    }

    /**
     * @return PedidosHandler
     */
    public function pedidos(): PedidosHandler
    {
        return $this->pedidos;
    }

    /**
     * @return ContasCorrentesHandler
     */
    public function contasCorrentes(): ContasCorrentesHandler
    {
        return $this->contasCorrentes;
    }

    /**
     * @return CenariosHandler
     */
    public function cenarios(): CenariosHandler
    {
        return $this->cenarios;
    }

    /**
     * @return LocaisHandler
     */
    public function locais(): LocaisHandler
    {
        return $this->locais;
    }

    /**
     * @return ContasReceberHandler
     */
    public function contasReceber(): ContasReceberHandler
    {
        return $this->contasReceber;
    }

    /**
     * @return ContasReceberBoletoHandler
     */
    public function contasReceberBoleto(): ContasReceberBoletoHandler
    {
        return $this->contasReceberBoleto;
    }

    /**
     * @return ConsultasDeEstoqueHandler
     */
    public function consultasDeEstoque(): ConsultasDeEstoqueHandler
    {
        return $this->consultasDeEstoque;
    }
}
