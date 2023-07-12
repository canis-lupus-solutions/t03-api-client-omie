<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos;

use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\CaracteristicaSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\DadosIbptSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\ImagemSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\RecomendacoesFiscaisSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\VideoSubModelo;

/**
 * Class ProdutoEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos
 * @name    ProdutoEntityOmieModel
 * @version 1.0.0
 */
class ProdutoEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [codigo_produto].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código interno de integração do omie, mapeado através do campo [codigo_produto_integracao].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;

    /**
     * Descrição do produto.
     * Recomenda-se armazenar como VARCHAR(120).
     */
    protected ?string $descricao = null;

    /**
     * Descrição detalhada do produto.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $descricaoDetalhada = null;

    /**
     * Indica se a Descrição Detalhada deve ser exibida nas Informações Adicionais do Item da NF-e (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $exibirDescricaoNfe = null;

    /**
     * Indica se a Descrição Detalhada deve ser exibida na impressão do Pedido (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $exibirDescricaoPedido = null;

    /**
     * Observações Internas.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $observacoesInternas = null;

    /**
     * Código do produto exibido na tela de produtos do omie.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $codigo = null;

    /**
     * Código da unidade.
     * Recomenda-se armazenar como VARCHAR(6).
     * Preenchimento Obrigatório.
     */
    protected ?string $unidade = null;

    /**
     * Código da Nomenclatura Comum do Mercosul (NCM).
     * Recomenda-se armazenar como VARCHAR(13).
     * Preenchimento Obrigatório.
     */
    protected ?string $ncm = null;

    /**
     * Código EAN (GTIN - Global Trade Item Number).
     * Recomenda-se armazenar como VARCHAR(14).
     */
    protected ?string $ean = null;

    /**
     * Valor Unitário do produto.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $valorUnitario = null;

    /**
     * Código da Familia do Produto.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoFamilia = null;

    /**
     * Código de Integração da Familia do Produto.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $codigoIntegracaoFamilia = null;

    /**
     * Descrição da Familia do Produto.
     * Recomenda-se armazenar como VARCHAR(50).
     */
    protected ?string $descricaoFamilia = null;

    /**
     * Código do Tipo do Item para o SPED. Pode ser:
     * 00 - Mercadoria para Revenda
     * 01 - Matéria Prima
     * 02 - Embalagem
     * 03 - Produto em Processo
     * 04 - Produto Acabado
     * 05 - Subproduto
     * 06 - Produto Intermediário
     * 07 - Material de Uso e Consumo
     * 08 - Ativo Imobilizado
     * 09 - Serviços
     * 10 - Outros Insumos
     * 99 - Outras
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $tipoItem = null;

    /**
     * Peso Bruto (Kg).
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $pesoBruto = null;

    /**
     * Peso Líquido (Kg).
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $pesoLiquido = null;

    /**
     * Altura (centímetros).
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $altura = null;

    /**
     * Largura (centímetros).
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $largura = null;

    /**
     * Profundidade (centímetros).
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $profundidade = null;

    /**
     * Marca.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $marca = null;

    /**
     * Dias de Garantia.
     * Recomenda-se armazenar como INT.
     */
    protected ?int $diasGarantia = null;

    /**
     * Dias de Crossdocking.
     * Recomenda-se armazenar como INT.
     */
    protected ?int $diasCrossdocking = null;

    /**
     * Código da Situação Tributária do ICMS.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $cstIcms = null;

    /**
     * Modalidade da Base de Cálculo do ICMS.
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $modalidadeIcms = null;

    /**
     * Código da Situação Tributária para Simples Nacional.
     * Recomenda-se armazenar como VARCHAR(3).
     */
    protected ?string $csosnIcms = null;

    /**
     * Alíquota de ICMS.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $aliquotaIcms = null;

    /**
     * Percentual de redução de base do ICMS.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $reducaoBaseIcms = null;

    /**
     * Motivo da desoneração do ICMS.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $motivoDesoneracaoIcms = null;

    /**
     * Percentual do Fundo de Combate a Pobreza do ICMS.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $percentualFcpIcms = null;

    /**
     * Código de integração da característica do produto.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $codigoBeneficio = null;

    /**
     * Código da Situação Tributária do PIS.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $cstPis = null;

    /**
     * Alíquota do PIS.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $aliquotaPis = null;

    /**
     * Código da Situação Tributária do COFINS.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $cstCofins = null;

    /**
     * Alíquota do COFINS.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $aliquotaCofins = null;

    /**
     * CFOP do Produto.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $cfop = null;

    /**
     * Indica se o registro está bloqueado (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $bloqueado = null;

    /**
     * Indica se o registro está bloqueado para exclusão (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $bloquearExclusao = null;

    /**
     * Indica se o registro foi incluído via API (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $importadoApi = null;

    /**
     * Indica se o cadastro do produto está inativo (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $inativo = null;

    /**
     * Informações complementares do cadastro do produto.
     */
    protected ?InfoSubModelo $info = null;

    /**
     * Recomendações Fiscais.
     */
    protected ?RecomendacoesFiscaisSubModelo $recomendacoesFiscais = null;

    /**
     * Dados do IBPT.
     */
    protected ?DadosIbptSubModelo $dadosIbpt = null;

    /**
     * @var ImagemSubModelo[]|null
     *
     * Lista de imagens do produto.
     */
    protected ?array $imagens = null;

    /**
     * @var VideoSubModelo[]|null
     *
     * Lista de videos do produto.
     */
    protected ?array $videos = null;

    /**
     * @var CaracteristicaSubModelo[]|null
     *
     * Filtro por caracteristicas.
     */
    protected ?array $caracteristicas = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getIdOmie(): ?int
    {
        return $this->idOmie;
    }

    /**
     * @param int|null $idOmie
     *
     * @return ProdutoEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): ProdutoEntityOmieModel
    {
        $this->idOmie = $idOmie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdIntegracao(): ?string
    {
        return $this->idIntegracao;
    }

    /**
     * @param string|null $idIntegracao
     *
     * @return ProdutoEntityOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ProdutoEntityOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    /**
     * @param string|null $descricao
     *
     * @return ProdutoEntityOmieModel
     */
    public function setDescricao(?string $descricao): ProdutoEntityOmieModel
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricaoDetalhada(): ?string
    {
        return $this->descricaoDetalhada;
    }

    /**
     * @param string|null $descricaoDetalhada
     *
     * @return ProdutoEntityOmieModel
     */
    public function setDescricaoDetalhada(?string $descricaoDetalhada): ProdutoEntityOmieModel
    {
        $this->descricaoDetalhada = $descricaoDetalhada;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExibirDescricaoNfe(): ?string
    {
        return $this->exibirDescricaoNfe;
    }

    /**
     * @param string|null $exibirDescricaoNfe
     *
     * @return ProdutoEntityOmieModel
     */
    public function setExibirDescricaoNfe(?string $exibirDescricaoNfe): ProdutoEntityOmieModel
    {
        $this->exibirDescricaoNfe = $exibirDescricaoNfe;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExibirDescricaoPedido(): ?string
    {
        return $this->exibirDescricaoPedido;
    }

    /**
     * @param string|null $exibirDescricaoPedido
     *
     * @return ProdutoEntityOmieModel
     */
    public function setExibirDescricaoPedido(?string $exibirDescricaoPedido): ProdutoEntityOmieModel
    {
        $this->exibirDescricaoPedido = $exibirDescricaoPedido;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacoesInternas(): ?string
    {
        return $this->observacoesInternas;
    }

    /**
     * @param string|null $observacoesInternas
     *
     * @return ProdutoEntityOmieModel
     */
    public function setObservacoesInternas(?string $observacoesInternas): ProdutoEntityOmieModel
    {
        $this->observacoesInternas = $observacoesInternas;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    /**
     * @param string|null $codigo
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCodigo(?string $codigo): ProdutoEntityOmieModel
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnidade(): ?string
    {
        return $this->unidade;
    }

    /**
     * @param string|null $unidade
     *
     * @return ProdutoEntityOmieModel
     */
    public function setUnidade(?string $unidade): ProdutoEntityOmieModel
    {
        $this->unidade = $unidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNcm(): ?string
    {
        return $this->ncm;
    }

    /**
     * @param string|null $ncm
     *
     * @return ProdutoEntityOmieModel
     */
    public function setNcm(?string $ncm): ProdutoEntityOmieModel
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }

    /**
     * @param string|null $ean
     *
     * @return ProdutoEntityOmieModel
     */
    public function setEan(?string $ean): ProdutoEntityOmieModel
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorUnitario(): ?float
    {
        return $this->valorUnitario;
    }

    /**
     * @param float|null $valorUnitario
     *
     * @return ProdutoEntityOmieModel
     */
    public function setValorUnitario(?float $valorUnitario): ProdutoEntityOmieModel
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoFamilia(): ?int
    {
        return $this->codigoFamilia;
    }

    /**
     * @param int|null $codigoFamilia
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCodigoFamilia(?int $codigoFamilia): ProdutoEntityOmieModel
    {
        $this->codigoFamilia = $codigoFamilia;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoIntegracaoFamilia(): ?string
    {
        return $this->codigoIntegracaoFamilia;
    }

    /**
     * @param string|null $codigoIntegracaoFamilia
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCodigoIntegracaoFamilia(?string $codigoIntegracaoFamilia): ProdutoEntityOmieModel
    {
        $this->codigoIntegracaoFamilia = $codigoIntegracaoFamilia;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricaoFamilia(): ?string
    {
        return $this->descricaoFamilia;
    }

    /**
     * @param string|null $descricaoFamilia
     *
     * @return ProdutoEntityOmieModel
     */
    public function setDescricaoFamilia(?string $descricaoFamilia): ProdutoEntityOmieModel
    {
        $this->descricaoFamilia = $descricaoFamilia;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoItem(): ?string
    {
        return $this->tipoItem;
    }

    /**
     * @param string|null $tipoItem
     *
     * @return ProdutoEntityOmieModel
     */
    public function setTipoItem(?string $tipoItem): ProdutoEntityOmieModel
    {
        $this->tipoItem = $tipoItem;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPesoBruto(): ?float
    {
        return $this->pesoBruto;
    }

    /**
     * @param float|null $pesoBruto
     *
     * @return ProdutoEntityOmieModel
     */
    public function setPesoBruto(?float $pesoBruto): ProdutoEntityOmieModel
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPesoLiquido(): ?float
    {
        return $this->pesoLiquido;
    }

    /**
     * @param float|null $pesoLiquido
     *
     * @return ProdutoEntityOmieModel
     */
    public function setPesoLiquido(?float $pesoLiquido): ProdutoEntityOmieModel
    {
        $this->pesoLiquido = $pesoLiquido;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAltura(): ?float
    {
        return $this->altura;
    }

    /**
     * @param float|null $altura
     *
     * @return ProdutoEntityOmieModel
     */
    public function setAltura(?float $altura): ProdutoEntityOmieModel
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLargura(): ?float
    {
        return $this->largura;
    }

    /**
     * @param float|null $largura
     *
     * @return ProdutoEntityOmieModel
     */
    public function setLargura(?float $largura): ProdutoEntityOmieModel
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getProfundidade(): ?float
    {
        return $this->profundidade;
    }

    /**
     * @param float|null $profundidade
     *
     * @return ProdutoEntityOmieModel
     */
    public function setProfundidade(?float $profundidade): ProdutoEntityOmieModel
    {
        $this->profundidade = $profundidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMarca(): ?string
    {
        return $this->marca;
    }

    /**
     * @param string|null $marca
     *
     * @return ProdutoEntityOmieModel
     */
    public function setMarca(?string $marca): ProdutoEntityOmieModel
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDiasGarantia(): ?int
    {
        return $this->diasGarantia;
    }

    /**
     * @param int|null $diasGarantia
     *
     * @return ProdutoEntityOmieModel
     */
    public function setDiasGarantia(?int $diasGarantia): ProdutoEntityOmieModel
    {
        $this->diasGarantia = $diasGarantia;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDiasCrossdocking(): ?int
    {
        return $this->diasCrossdocking;
    }

    /**
     * @param int|null $diasCrossdocking
     *
     * @return ProdutoEntityOmieModel
     */
    public function setDiasCrossdocking(?int $diasCrossdocking): ProdutoEntityOmieModel
    {
        $this->diasCrossdocking = $diasCrossdocking;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCstIcms(): ?string
    {
        return $this->cstIcms;
    }

    /**
     * @param string|null $cstIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCstIcms(?string $cstIcms): ProdutoEntityOmieModel
    {
        $this->cstIcms = $cstIcms;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModalidadeIcms(): ?string
    {
        return $this->modalidadeIcms;
    }

    /**
     * @param string|null $modalidadeIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setModalidadeIcms(?string $modalidadeIcms): ProdutoEntityOmieModel
    {
        $this->modalidadeIcms = $modalidadeIcms;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCsosnIcms(): ?string
    {
        return $this->csosnIcms;
    }

    /**
     * @param string|null $csosnIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCsosnIcms(?string $csosnIcms): ProdutoEntityOmieModel
    {
        $this->csosnIcms = $csosnIcms;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaIcms(): ?float
    {
        return $this->aliquotaIcms;
    }

    /**
     * @param float|null $aliquotaIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setAliquotaIcms(?float $aliquotaIcms): ProdutoEntityOmieModel
    {
        $this->aliquotaIcms = $aliquotaIcms;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getReducaoBaseIcms(): ?float
    {
        return $this->reducaoBaseIcms;
    }

    /**
     * @param float|null $reducaoBaseIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setReducaoBaseIcms(?float $reducaoBaseIcms): ProdutoEntityOmieModel
    {
        $this->reducaoBaseIcms = $reducaoBaseIcms;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMotivoDesoneracaoIcms(): ?string
    {
        return $this->motivoDesoneracaoIcms;
    }

    /**
     * @param string|null $motivoDesoneracaoIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setMotivoDesoneracaoIcms(?string $motivoDesoneracaoIcms): ProdutoEntityOmieModel
    {
        $this->motivoDesoneracaoIcms = $motivoDesoneracaoIcms;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercentualFcpIcms(): ?float
    {
        return $this->percentualFcpIcms;
    }

    /**
     * @param float|null $percentualFcpIcms
     *
     * @return ProdutoEntityOmieModel
     */
    public function setPercentualFcpIcms(?float $percentualFcpIcms): ProdutoEntityOmieModel
    {
        $this->percentualFcpIcms = $percentualFcpIcms;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoBeneficio(): ?string
    {
        return $this->codigoBeneficio;
    }

    /**
     * @param string|null $codigoBeneficio
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCodigoBeneficio(?string $codigoBeneficio): ProdutoEntityOmieModel
    {
        $this->codigoBeneficio = $codigoBeneficio;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCstPis(): ?string
    {
        return $this->cstPis;
    }

    /**
     * @param string|null $cstPis
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCstPis(?string $cstPis): ProdutoEntityOmieModel
    {
        $this->cstPis = $cstPis;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaPis(): ?float
    {
        return $this->aliquotaPis;
    }

    /**
     * @param float|null $aliquotaPis
     *
     * @return ProdutoEntityOmieModel
     */
    public function setAliquotaPis(?float $aliquotaPis): ProdutoEntityOmieModel
    {
        $this->aliquotaPis = $aliquotaPis;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCstCofins(): ?string
    {
        return $this->cstCofins;
    }

    /**
     * @param string|null $cstCofins
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCstCofins(?string $cstCofins): ProdutoEntityOmieModel
    {
        $this->cstCofins = $cstCofins;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaCofins(): ?float
    {
        return $this->aliquotaCofins;
    }

    /**
     * @param float|null $aliquotaCofins
     *
     * @return ProdutoEntityOmieModel
     */
    public function setAliquotaCofins(?float $aliquotaCofins): ProdutoEntityOmieModel
    {
        $this->aliquotaCofins = $aliquotaCofins;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCfop(): ?string
    {
        return $this->cfop;
    }

    /**
     * @param string|null $cfop
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCfop(?string $cfop): ProdutoEntityOmieModel
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBloqueado(): ?string
    {
        return $this->bloqueado;
    }

    /**
     * @param string|null $bloqueado
     *
     * @return ProdutoEntityOmieModel
     */
    public function setBloqueado(?string $bloqueado): ProdutoEntityOmieModel
    {
        $this->bloqueado = $bloqueado;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBloquearExclusao(): ?string
    {
        return $this->bloquearExclusao;
    }

    /**
     * @param string|null $bloquearExclusao
     *
     * @return ProdutoEntityOmieModel
     */
    public function setBloquearExclusao(?string $bloquearExclusao): ProdutoEntityOmieModel
    {
        $this->bloquearExclusao = $bloquearExclusao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImportadoApi(): ?string
    {
        return $this->importadoApi;
    }

    /**
     * @param string|null $importadoApi
     *
     * @return ProdutoEntityOmieModel
     */
    public function setImportadoApi(?string $importadoApi): ProdutoEntityOmieModel
    {
        $this->importadoApi = $importadoApi;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInativo(): ?string
    {
        return $this->inativo;
    }

    /**
     * @param string|null $inativo
     *
     * @return ProdutoEntityOmieModel
     */
    public function setInativo(?string $inativo): ProdutoEntityOmieModel
    {
        $this->inativo = $inativo;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\InfoSubModelo|null
     */
    public function getInfo(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\InfoSubModelo
    {
        return $this->info;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\InfoSubModelo|null $info
     *
     * @return ProdutoEntityOmieModel
     */
    public function setInfo(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\InfoSubModelo $info): ProdutoEntityOmieModel
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\RecomendacoesFiscaisSubModelo|null
     */
    public function getRecomendacoesFiscais(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\RecomendacoesFiscaisSubModelo
    {
        return $this->recomendacoesFiscais;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\RecomendacoesFiscaisSubModelo|null $recomendacoesFiscais
     *
     * @return ProdutoEntityOmieModel
     */
    public function setRecomendacoesFiscais(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\RecomendacoesFiscaisSubModelo $recomendacoesFiscais): ProdutoEntityOmieModel
    {
        $this->recomendacoesFiscais = $recomendacoesFiscais;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\DadosIbptSubModelo|null
     */
    public function getDadosIbpt(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\DadosIbptSubModelo
    {
        return $this->dadosIbpt;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\DadosIbptSubModelo|null $dadosIbpt
     *
     * @return ProdutoEntityOmieModel
     */
    public function setDadosIbpt(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\DadosIbptSubModelo $dadosIbpt): ProdutoEntityOmieModel
    {
        $this->dadosIbpt = $dadosIbpt;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\ImagemSubModelo[]|null
     */
    public function getImagens(): ?array
    {
        return $this->imagens;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\ImagemSubModelo[]|null $imagens
     *
     * @return ProdutoEntityOmieModel
     */
    public function setImagens(?array $imagens): ProdutoEntityOmieModel
    {
        $this->imagens = $imagens;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\VideoSubModelo[]|null
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\VideoSubModelo[]|null $videos
     *
     * @return ProdutoEntityOmieModel
     */
    public function setVideos(?array $videos): ProdutoEntityOmieModel
    {
        $this->videos = $videos;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\CaracteristicaSubModelo[]|null
     */
    public function getCaracteristicas(): ?array
    {
        return $this->caracteristicas;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos\CaracteristicaSubModelo[]|null $caracteristicas
     *
     * @return ProdutoEntityOmieModel
     */
    public function setCaracteristicas(?array $caracteristicas): ProdutoEntityOmieModel
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }
}
