<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\CabecalhoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DepartamentoSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\DespesasReembolsaveisSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\EmailSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\InformacoesAdicionaisSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\InformacoesCadastroSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ObservacoesSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ParcelaSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ProdutosUtilizadosSubModel;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels\ServicoPrestadoSubModel;

/**
 * Class OrdemOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    OrdemOmieModel
 * @version 1.0.0
 */
class OrdemOmieModel
{
    /**
     * Cabeçalho da Ordem de Serviço.
     *
     * Mapeado através do campo [Cabecalho].
     */
    public ?CabecalhoSubModel $cabecalho = null;

    /**
     * Informações adicionais da OS.
     *
     * Mapeado através do campo [InformacoesAdicionais].
     */
    public ?InformacoesAdicionaisSubModel $informacoesAdicionais = null;

    /**
     * Informações do E-Mail.
     *
     * Mapeado através do campo [Email].
     */
    public ?EmailSubModel $email = null;

    /**
     * @var DepartamentoSubModel[]
     *
     * Lista de distribuição por departamentos.
     *
     * Mapeado através do campo [Departamentos].
     */
    public array $departamentos = [];

    /**
     * @var ServicoPrestadoSubModel[]
     *
     * Lista de Serviços Prestados.
     *
     * Mapeado através do campo [ServicosPrestados].
     */
    public array $servicosPrestados = [];

    /**
     * @var ParcelaSubModel[]
     *
     * Permite que o parcelamento seja realizado de forma manual.
     *
     * Mapeado através do campo [Parcelas].
     */
    public array $parcelas = [];

    /**
     * Observações da Ordem de Serviço.
     *
     * Mapeado através do campo [Observacoes].
     */
    public ?ObservacoesSubModel $observacoes = null;

    /**
     * Informações do cadastro da Ordem de Serviço.
     *
     * Mapeado através do campo [InfoCadastro].
     */
    public ?InformacoesCadastroSubModel $infoCadastro = null;

    /**
     * Despesas reembolsáveis.
     *
     * Mapeado através do campo [despesasReembolsaveis].
     */
    public ?DespesasReembolsaveisSubModel $despesasReembolsaveis = null;

    /**
     * Produtos Utilizados na Ordem de Serviço.
     *
     * Mapeado através do campo [produtosUtilizados].
     */
    public ?ProdutosUtilizadosSubModel $produtosUtilizados = null;


    public function __construct()
    {
        $this->cabecalho = new CabecalhoSubModel();
        $this->informacoesAdicionais = new InformacoesAdicionaisSubModel();
        $this->email = new EmailSubModel();
        $this->observacoes = new ObservacoesSubModel();
        $this->infoCadastro = new InformacoesCadastroSubModel();
        $this->despesasReembolsaveis = new DespesasReembolsaveisSubModel();
        $this->produtosUtilizados = new ProdutosUtilizadosSubModel();
    }
}
