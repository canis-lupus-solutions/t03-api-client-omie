<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ServicoPrestadoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ServicoPrestadoSubModel
 * @version 1.0.0
 */
class ServicoPrestadoSubModel
{
    /**
     * Código Interno do Serviço conforme cadastrado na tabela de serviços.
     * Preenchimento opcional.
     * Caso preenchido, irá assumir as informações do cadastro de serviço.
     * Se não for preenchido, assumirá os valores informados na API.
     *
     * Mapeado através do campo [nCodServico].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieServico = null;

    /**
     * Código de Integração do Serviço conforme cadastrado na tabela de serviços.
     * Preenchimento opcional.
     * Caso preenchido, irá assumir as informações do cadastro de serviço.
     * Se não for preenchido, assumirá os valores informados na API.
     *
     * Mapeado através do campo [cCodIntServico].
     * Recomenda-se armazenar como VARCHAR(60).
     */
    public ?string $idIntegracaoServico = null;

    /**
     * Tipo de Tributação dos Serviços.
     *
     * Mapeado através do campo [cTribServ].
     * Recomenda-se armazenar como VARCHAR(2).
     */
    public ?string $tipoTributacao = null;

    /**
     * Código do Serviço Municipal ou CNAE.
     *
     * Mapeado através do campo [cCodServMun].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoServicoMunicipalOuCNAE = null;

    /**
     * Código do Serviço conforme Lei Complementar (LC 116).
     *
     * Mapeado através do campo [cCodServLC116].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoServicoLC116 = null;

    /**
     * Quantidade de serviços.
     *
     * Mapeado através do campo [nQtde].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $quantidade = null;

    /**
     * Valor Unitário do serviço.
     *
     * Mapeado através do campo [nValUnit].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorUnitario = null;

    /**
     * Tipo de Desconto.
     * Preenchimento opcional.
     * P - Percentual.
     * V - Valor.
     *
     * Mapeado através do campo [cTpDesconto].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $tipoDesconto = null;

    /**
     * Valor do Desconto.
     *
     * Mapeado através do campo [nValorDesconto].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorDesconto = null;

    /**
     * Aliquota do Desconto.
     *
     * Mapeado através do campo [nAliqDesconto].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaDesconto = null;

    /**
     * Valor de Outras Retenções.
     *
     * Mapeado através do campo [nValorOutrasRetencoes].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorOutrasRetencoes = null;

    /**
     * Valor de Acréscimos e taxas.
     *
     * Mapeado através do campo [nValorAcrescimos].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorAcrescimos = null;

    /**
     * Descrição dos Serviços.
     *
     * Mapeado através do campo [cDescServ].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $descricaoServico = null;

    /**
     * Retem ISS (S/N).
     *
     * Mapeado através do campo [cRetemISS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $retemIss = null;

    /**
     * Dados adicionais do Item.
     *
     * Mapeado através do campo [cDadosAdicItem].
     * Recomenda-se armazenar como TEXT.
     */
    public ?string $dadosAdicionaisServico = null;

    /**
     * Código da Nomenclatura Brasileira de Serviços (NBS).
     *
     * Mapeado através do campo [cNbs].
     * Recomenda-se armazenar como VARCHAR(9).
     */
    public ?string $codigoNbs = null;

    /**
     * Dados do impostos do serviço.
     *
     * Mapeado através do campo [impostos].
     */
    public ?ImpostosSubModel $impostos = null;

    /**
     * Não gerar conta a receber para este item.
     * Preenchimento opcional.
     * Informar "S" para não gerar movimento financeiro.
     * Informar "N" para gerar movimento financeiro.
     *
     * Mapeado através do campo [cNaoGerarFinanceiro].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $naoGerarFinanceiro = null;

    /**
     * Código da Categoria.
     *
     * Mapeado através do campo [cCodCategItem].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoCategoria = null;

    /**
     * Sequencia do Item.
     * Preenchimento opcional.
     * Deve ser preenchido com uma sequencia de 1 a 199.
     *
     * Mapeado através do campo [nSeqItem].
     * Recomenda-se armazenar como INT.
     */
    public ?int $sequenciaServico = null;

    /**
     * ID do Item da Ordem de Serviço.
     * Não deve ser informado na inclusão.
     * Pode ser informado na alteração para identificar o item.
     *
     * Mapeado através do campo [nIdItem].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmieServicoDaOrdemDeServico = null;

    /**
     * Ação a ser realizada na alteração do item.
     * "A" - Alterar o item (padrão).
     * "E" - Excluir o item.
     * "I" - Incluir o item na alteração.
     *
     * Mapeado através do campo [cAcaoItem].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $acaoAlteracao = null;

    /**
     * Informações referente ao serviço de NF modelo 21 ou 22.
     *
     * Mapeado através do campo [viaUnica].
     */
    public ?ViaUnicaSubModel $viaUnica = null;
}
