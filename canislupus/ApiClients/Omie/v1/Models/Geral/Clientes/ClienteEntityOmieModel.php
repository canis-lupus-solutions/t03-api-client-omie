<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes;

use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\DadosBancariosSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\EnderecoEntregaSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\InfoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\RecomendacoesSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo;

/**
 * Class ClienteEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes
 * @name    ClienteEntityOmieModel
 * @version 1.0.0
 */
class ClienteEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [codigo_cliente_omie].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código interno de integração do omie, mapeado através do campo [codigo_cliente_integracao].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;

    /**
     * Razão Social.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $razaoSocial = null;

    /**
     * CNPJ/CPF.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $cnpjCpf = null;

    /**
     * Nome Fantasia.
     * Recomenda-se armazenar como VARCHAR(100).
     */
    protected ?string $nomeFantasia = null;

    /**
     * DDD Telefone.
     * Recomenda-se armazenar como VARCHAR(5).
     */
    protected ?string $telefone1Ddd = null;

    /**
     * Telefone para Contato.
     * Recomenda-se armazenar como VARCHAR(15).
     */
    protected ?string $telefone1Numero = null;

    /**
     * DDD Telefone 2.
     * Recomenda-se armazenar como VARCHAR(5).
     */
    protected ?string $telefone2Ddd = null;

    /**
     * Telefone 2.
     * Recomenda-se armazenar como VARCHAR(15).
     */
    protected ?string $telefone2Numero = null;

    /**
     * DDD Fax.
     * Recomenda-se armazenar como VARCHAR(5).
     */
    protected ?string $faxDdd = null;

    /**
     * Fax.
     * Recomenda-se armazenar como VARCHAR(15).
     */
    protected ?string $faxNumero = null;

    /**
     * Nome para Contato.
     * Recomenda-se armazenar como VARCHAR(100).
     */
    protected ?string $contato = null;

    /**
     * Endereço.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $endereco = null;

    /**
     * Número do Endereço.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $enderecoNumero = null;

    /**
     * Bairro.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $bairro = null;

    /**
     * Complemento para o Número do Endereço.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $complemento = null;

    /**
     * Sigla do Estado.
     * Utilize a tag 'cSigla' do método 'ListarEstados' da API /api/v1/geral/estados/.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $estado = null;

    /**
     * Código da Cidade.
     * Utilize a tag 'cCod' do método 'PesquisarCidades' da API /api/v1/geral/cidades/.
     * Recomenda-se armazenar como VARCHAR(40).
     */
    protected ?string $cidade = null;

    /**
     * Código do País.
     * Utilize a tag 'cCodigo' do método 'ListarPaises' da API /api/v1/geral/paises/.
     * Recomenda-se armazenar como VARCHAR(4).
     */
    protected ?string $pais = null;

    /**
     * CEP.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $cep = null;

    /**
     * E-mail.
     * Recomenda-se armazenar como VARCHAR(500).
     */
    protected ?string $email = null;

    /**
     * WebSite.
     * Recomenda-se armazenar como VARCHAR(100).
     */
    protected ?string $homePage = null;

    /**
     * Inscrição Estadual.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $inscricaoEstadual = null;

    /**
     * Inscrição Municipal.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $inscricaoMunicipal = null;

    /**
     * Inscrição Suframa.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $inscricaoSuframa = null;

    /**
     * Indica se o Cliente/Fornecedor é Optante do Simples Nacional.
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $optanteSimplesNacional = null;

    /**
     * Tipo da Atividade.
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $tipoAtividade = null;

    /**
     * Código do CNAE - Fiscal.
     * Recomenda-se armazenar como VARCHAR(7).
     */
    protected ?string $cnae = null;

    /**
     * Indica se o Cliente / Fornecedor é um Produtor Rural.
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $produtorRural = null;

    /**
     * Indica se o cliente é contribuinte (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $contribuinte = null;

    /**
     * Observações Internas.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $observacao = null;

    /**
     * Observações Detalhadas.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $observacaoDetalhada = null;

    /**
     * Código da Instrução de Protesto.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $recomendacaoAtraso = null;

    /**
     * Pessoa Física.
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $pessoaFisica = null;

    /**
     * Indica que é um tomador de serviço localizado no exterior.
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $exterior = null;

    /**
     * Importado pela API (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $importadoApi = null;

    /**
     * Código do IBGE para a Cidade.
     * Recomenda-se armazenar como VARCHAR(7).
     */
    protected ?string $cidadeIbge = null;

    /**
     * Valor do Limite de Crédito Total.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $valorLimiteCredito = null;

    /**
     * Bloquear o faturamento para o cliente (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $bloquearFaturamento = null;

    /**
     * NIF - Número de Identificação Fiscal.
     * Recomenda-se armazenar como VARCHAR(100).
     */
    protected ?string $nif = null;

    /**
     * Indica se o cliente está inativo (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $inativo = null;

    /**
     * Bloqueia a exclusão do registro (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $bloquearExclusao = null;

    /**
     * Informações sobre o cadastro do cliente.
     */
    protected ?InfoSubModelo $info = null;

    /**
     * @var TagSubModelo[]|null
     *
     * Tags do Cliente ou Fornecedor.
     */
    protected ?array $tags = null;

    /**
     * Recomendações do cliente.
     */
    protected ?RecomendacoesSubModelo $recomendacoes = null;

    /**
     * Dados do Endereço de Entrega.
     */
    protected ?EnderecoEntregaSubModelo $enderecoEntrega = null;

    /**
     * Dados Bancários do cliente.
     */
    protected ?DadosBancariosSubModelo $dadosBancarios = null;


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
     * @return ClienteEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): ClienteEntityOmieModel
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
     * @return ClienteEntityOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ClienteEntityOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    /**
     * @param string|null $razaoSocial
     *
     * @return ClienteEntityOmieModel
     */
    public function setRazaoSocial(?string $razaoSocial): ClienteEntityOmieModel
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnpjCpf(): ?string
    {
        return $this->cnpjCpf;
    }

    /**
     * @param string|null $cnpjCpf
     *
     * @return ClienteEntityOmieModel
     */
    public function setCnpjCpf(?string $cnpjCpf): ClienteEntityOmieModel
    {
        $this->cnpjCpf = $cnpjCpf;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    /**
     * @param string|null $nomeFantasia
     *
     * @return ClienteEntityOmieModel
     */
    public function setNomeFantasia(?string $nomeFantasia): ClienteEntityOmieModel
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone1Ddd(): ?string
    {
        return $this->telefone1Ddd;
    }

    /**
     * @param string|null $telefone1Ddd
     *
     * @return ClienteEntityOmieModel
     */
    public function setTelefone1Ddd(?string $telefone1Ddd): ClienteEntityOmieModel
    {
        $this->telefone1Ddd = $telefone1Ddd;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone1Numero(): ?string
    {
        return $this->telefone1Numero;
    }

    /**
     * @param string|null $telefone1Numero
     *
     * @return ClienteEntityOmieModel
     */
    public function setTelefone1Numero(?string $telefone1Numero): ClienteEntityOmieModel
    {
        $this->telefone1Numero = $telefone1Numero;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone2Ddd(): ?string
    {
        return $this->telefone2Ddd;
    }

    /**
     * @param string|null $telefone2Ddd
     *
     * @return ClienteEntityOmieModel
     */
    public function setTelefone2Ddd(?string $telefone2Ddd): ClienteEntityOmieModel
    {
        $this->telefone2Ddd = $telefone2Ddd;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone2Numero(): ?string
    {
        return $this->telefone2Numero;
    }

    /**
     * @param string|null $telefone2Numero
     *
     * @return ClienteEntityOmieModel
     */
    public function setTelefone2Numero(?string $telefone2Numero): ClienteEntityOmieModel
    {
        $this->telefone2Numero = $telefone2Numero;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFaxDdd(): ?string
    {
        return $this->faxDdd;
    }

    /**
     * @param string|null $faxDdd
     *
     * @return ClienteEntityOmieModel
     */
    public function setFaxDdd(?string $faxDdd): ClienteEntityOmieModel
    {
        $this->faxDdd = $faxDdd;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFaxNumero(): ?string
    {
        return $this->faxNumero;
    }

    /**
     * @param string|null $faxNumero
     *
     * @return ClienteEntityOmieModel
     */
    public function setFaxNumero(?string $faxNumero): ClienteEntityOmieModel
    {
        $this->faxNumero = $faxNumero;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContato(): ?string
    {
        return $this->contato;
    }

    /**
     * @param string|null $contato
     *
     * @return ClienteEntityOmieModel
     */
    public function setContato(?string $contato): ClienteEntityOmieModel
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    /**
     * @param string|null $endereco
     *
     * @return ClienteEntityOmieModel
     */
    public function setEndereco(?string $endereco): ClienteEntityOmieModel
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnderecoNumero(): ?string
    {
        return $this->enderecoNumero;
    }

    /**
     * @param string|null $enderecoNumero
     *
     * @return ClienteEntityOmieModel
     */
    public function setEnderecoNumero(?string $enderecoNumero): ClienteEntityOmieModel
    {
        $this->enderecoNumero = $enderecoNumero;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    /**
     * @param string|null $bairro
     *
     * @return ClienteEntityOmieModel
     */
    public function setBairro(?string $bairro): ClienteEntityOmieModel
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    /**
     * @param string|null $complemento
     *
     * @return ClienteEntityOmieModel
     */
    public function setComplemento(?string $complemento): ClienteEntityOmieModel
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    /**
     * @param string|null $estado
     *
     * @return ClienteEntityOmieModel
     */
    public function setEstado(?string $estado): ClienteEntityOmieModel
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    /**
     * @param string|null $cidade
     *
     * @return ClienteEntityOmieModel
     */
    public function setCidade(?string $cidade): ClienteEntityOmieModel
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPais(): ?string
    {
        return $this->pais;
    }

    /**
     * @param string|null $pais
     *
     * @return ClienteEntityOmieModel
     */
    public function setPais(?string $pais): ClienteEntityOmieModel
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->cep;
    }

    /**
     * @param string|null $cep
     *
     * @return ClienteEntityOmieModel
     */
    public function setCep(?string $cep): ClienteEntityOmieModel
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return ClienteEntityOmieModel
     */
    public function setEmail(?string $email): ClienteEntityOmieModel
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHomePage(): ?string
    {
        return $this->homePage;
    }

    /**
     * @param string|null $homePage
     *
     * @return ClienteEntityOmieModel
     */
    public function setHomePage(?string $homePage): ClienteEntityOmieModel
    {
        $this->homePage = $homePage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricaoEstadual;
    }

    /**
     * @param string|null $inscricaoEstadual
     *
     * @return ClienteEntityOmieModel
     */
    public function setInscricaoEstadual(?string $inscricaoEstadual): ClienteEntityOmieModel
    {
        $this->inscricaoEstadual = $inscricaoEstadual;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    /**
     * @param string|null $inscricaoMunicipal
     *
     * @return ClienteEntityOmieModel
     */
    public function setInscricaoMunicipal(?string $inscricaoMunicipal): ClienteEntityOmieModel
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscricaoSuframa(): ?string
    {
        return $this->inscricaoSuframa;
    }

    /**
     * @param string|null $inscricaoSuframa
     *
     * @return ClienteEntityOmieModel
     */
    public function setInscricaoSuframa(?string $inscricaoSuframa): ClienteEntityOmieModel
    {
        $this->inscricaoSuframa = $inscricaoSuframa;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptanteSimplesNacional(): ?string
    {
        return $this->optanteSimplesNacional;
    }

    /**
     * @param string|null $optanteSimplesNacional
     *
     * @return ClienteEntityOmieModel
     */
    public function setOptanteSimplesNacional(?string $optanteSimplesNacional): ClienteEntityOmieModel
    {
        $this->optanteSimplesNacional = $optanteSimplesNacional;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoAtividade(): ?string
    {
        return $this->tipoAtividade;
    }

    /**
     * @param string|null $tipoAtividade
     *
     * @return ClienteEntityOmieModel
     */
    public function setTipoAtividade(?string $tipoAtividade): ClienteEntityOmieModel
    {
        $this->tipoAtividade = $tipoAtividade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnae(): ?string
    {
        return $this->cnae;
    }

    /**
     * @param string|null $cnae
     *
     * @return ClienteEntityOmieModel
     */
    public function setCnae(?string $cnae): ClienteEntityOmieModel
    {
        $this->cnae = $cnae;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProdutorRural(): ?string
    {
        return $this->produtorRural;
    }

    /**
     * @param string|null $produtorRural
     *
     * @return ClienteEntityOmieModel
     */
    public function setProdutorRural(?string $produtorRural): ClienteEntityOmieModel
    {
        $this->produtorRural = $produtorRural;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContribuinte(): ?string
    {
        return $this->contribuinte;
    }

    /**
     * @param string|null $contribuinte
     *
     * @return ClienteEntityOmieModel
     */
    public function setContribuinte(?string $contribuinte): ClienteEntityOmieModel
    {
        $this->contribuinte = $contribuinte;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    /**
     * @param string|null $observacao
     *
     * @return ClienteEntityOmieModel
     */
    public function setObservacao(?string $observacao): ClienteEntityOmieModel
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacaoDetalhada(): ?string
    {
        return $this->observacaoDetalhada;
    }

    /**
     * @param string|null $observacaoDetalhada
     *
     * @return ClienteEntityOmieModel
     */
    public function setObservacaoDetalhada(?string $observacaoDetalhada): ClienteEntityOmieModel
    {
        $this->observacaoDetalhada = $observacaoDetalhada;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecomendacaoAtraso(): ?string
    {
        return $this->recomendacaoAtraso;
    }

    /**
     * @param string|null $recomendacaoAtraso
     *
     * @return ClienteEntityOmieModel
     */
    public function setRecomendacaoAtraso(?string $recomendacaoAtraso): ClienteEntityOmieModel
    {
        $this->recomendacaoAtraso = $recomendacaoAtraso;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPessoaFisica(): ?string
    {
        return $this->pessoaFisica;
    }

    /**
     * @param string|null $pessoaFisica
     *
     * @return ClienteEntityOmieModel
     */
    public function setPessoaFisica(?string $pessoaFisica): ClienteEntityOmieModel
    {
        $this->pessoaFisica = $pessoaFisica;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExterior(): ?string
    {
        return $this->exterior;
    }

    /**
     * @param string|null $exterior
     *
     * @return ClienteEntityOmieModel
     */
    public function setExterior(?string $exterior): ClienteEntityOmieModel
    {
        $this->exterior = $exterior;

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
     * @return ClienteEntityOmieModel
     */
    public function setImportadoApi(?string $importadoApi): ClienteEntityOmieModel
    {
        $this->importadoApi = $importadoApi;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCidadeIbge(): ?string
    {
        return $this->cidadeIbge;
    }

    /**
     * @param string|null $cidadeIbge
     *
     * @return ClienteEntityOmieModel
     */
    public function setCidadeIbge(?string $cidadeIbge): ClienteEntityOmieModel
    {
        $this->cidadeIbge = $cidadeIbge;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorLimiteCredito(): ?float
    {
        return $this->valorLimiteCredito;
    }

    /**
     * @param float|null $valorLimiteCredito
     *
     * @return ClienteEntityOmieModel
     */
    public function setValorLimiteCredito(?float $valorLimiteCredito): ClienteEntityOmieModel
    {
        $this->valorLimiteCredito = $valorLimiteCredito;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBloquearFaturamento(): ?string
    {
        return $this->bloquearFaturamento;
    }

    /**
     * @param string|null $bloquearFaturamento
     *
     * @return ClienteEntityOmieModel
     */
    public function setBloquearFaturamento(?string $bloquearFaturamento): ClienteEntityOmieModel
    {
        $this->bloquearFaturamento = $bloquearFaturamento;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNif(): ?string
    {
        return $this->nif;
    }

    /**
     * @param string|null $nif
     *
     * @return ClienteEntityOmieModel
     */
    public function setNif(?string $nif): ClienteEntityOmieModel
    {
        $this->nif = $nif;

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
     * @return ClienteEntityOmieModel
     */
    public function setInativo(?string $inativo): ClienteEntityOmieModel
    {
        $this->inativo = $inativo;

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
     * @return ClienteEntityOmieModel
     */
    public function setBloquearExclusao(?string $bloquearExclusao): ClienteEntityOmieModel
    {
        $this->bloquearExclusao = $bloquearExclusao;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\InfoSubModelo|null
     */
    public function getInfo(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\InfoSubModelo
    {
        return $this->info;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\InfoSubModelo|null $info
     *
     * @return ClienteEntityOmieModel
     */
    public function setInfo(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\InfoSubModelo $info): ClienteEntityOmieModel
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\TagSubModelo[]|null $tags
     *
     * @return ClienteEntityOmieModel
     */
    public function setTags(?array $tags): ClienteEntityOmieModel
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\RecomendacoesSubModelo|null
     */
    public function getRecomendacoes(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\RecomendacoesSubModelo
    {
        return $this->recomendacoes;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\RecomendacoesSubModelo|null $recomendacoes
     *
     * @return ClienteEntityOmieModel
     */
    public function setRecomendacoes(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\RecomendacoesSubModelo $recomendacoes): ClienteEntityOmieModel
    {
        $this->recomendacoes = $recomendacoes;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\EnderecoEntregaSubModelo|null
     */
    public function getEnderecoEntrega(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\EnderecoEntregaSubModelo
    {
        return $this->enderecoEntrega;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\EnderecoEntregaSubModelo|null $enderecoEntrega
     *
     * @return ClienteEntityOmieModel
     */
    public function setEnderecoEntrega(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\EnderecoEntregaSubModelo $enderecoEntrega): ClienteEntityOmieModel
    {
        $this->enderecoEntrega = $enderecoEntrega;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\DadosBancariosSubModelo|null
     */
    public function getDadosBancarios(): ?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\DadosBancariosSubModelo
    {
        return $this->dadosBancarios;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\DadosBancariosSubModelo|null $dadosBancarios
     *
     * @return ClienteEntityOmieModel
     */
    public function setDadosBancarios(?\CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos\DadosBancariosSubModelo $dadosBancarios): ClienteEntityOmieModel
    {
        $this->dadosBancarios = $dadosBancarios;

        return $this;
    }
}
