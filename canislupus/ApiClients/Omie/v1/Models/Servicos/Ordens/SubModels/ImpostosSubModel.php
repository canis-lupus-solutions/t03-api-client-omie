<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ImpostosSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ImpostosSubModel
 * @version 1.0.0
 */
class ImpostosSubModel
{
    /**
     * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     * Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [cFixarISS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $fixarIss = null;

    /**
     * Alíquota de ISS.
     *
     * Mapeado através do campo [nAliqISS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaIss = null;

    /**
     * Base de Cálculo do ISS.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [nBaseISS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $baseIss = null;

    /**
     * Valor de Dedução da Base de Cálculo.
     *
     * Mapeado através do campo [nTotDeducao].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $totalDeducao = null;

    /**
     * Valor do ISS.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [nValorISS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorIss = null;

    /**
     * Indica se o valor informado para os Impostos Federais deverá ser mantido ao
     * invés de ser recalculado a partir da alíquota.
     * Preenchimento opcional. O padrão é "N".
     * Caso seja informado "N", indica que valor do imposto deve ser calculado a partir da alíquota e base de cálculo.
     * Caso seja informado "S", indica que o valor do imposto será mantido e a alíquota será recalculada a partir do
     * valor do imposto e base de cálculo.
     *
     * Mapeado através do campo [cUtilizaValorImposto].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $utilizaValorImposto = null;

    /**
     * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [cFixarIRRF].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $fixarIrrf = null;

    /**
     * Alíquota de IRRF.
     * Preenchimento opcional.
     * Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S".
     * Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
     *
     * Mapeado através do campo [nAliqIRRF].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaIrrf = null;

    /**
     * Valor do IRRF.
     * Preenchimento opcional.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a
     * tag [cUtilizarValorImposto] seja diferente de "S".
     * Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e
     * que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na
     * tag correspondente será desprezada.
     *
     * Mapeado através do campo [nValorIRRF].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorIrrf = null;

    /**
     * Retém IRRF (S/N).
     * Preenchimento opcional. Padrão é "N".
     * Indica se o imposto deve ser retido ou não.
     *
     * Mapeado através do campo [cRetemIRRF].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $retemIrrf = null;

    /**
     * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [cFixarPIS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $fixarPIS = null;

    /**
     * Alíquota de PIS.
     * Preenchimento opcional.
     * Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S".
     * Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
     *
     * Mapeado através do campo [nAliqPIS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaPis = null;

    /**
     * Valor do PIS.
     * Preenchimento opcional.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a
     * tag [cUtilizarValorImposto] seja diferente de "S".
     * Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e
     * que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na
     * tag correspondente será desprezada.
     *
     * Mapeado através do campo [nValorPIS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorPis = null;

    /**
     * Retém PIS (S/N).
     * Preenchimento opcional. Padrão é "N".
     * Indica se o imposto deve ser retido ou não.
     *
     * Mapeado através do campo [cRetemPIS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $retemPis = null;

    /**
     * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [cFixarCOFINS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $fixarCofins = null;

    /**
     * Alíquota de COFINS.
     * Preenchimento opcional.
     * Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S".
     * Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
     *
     * Mapeado através do campo [nAliqCOFINS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaCofins = null;

    /**
     * Valor do COFINS.
     * Preenchimento opcional.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a
     * tag [cUtilizarValorImposto] seja diferente de "S".
     * Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e
     * que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na
     * tag correspondente será desprezada.
     *
     * Mapeado através do campo [nValorCOFINS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorCofins = null;

    /**
     * Retém COFINS (S/N).
     * Preenchimento opcional. Padrão é "N".
     * Indica se o imposto deve ser retido ou não.
     *
     * Mapeado através do campo [cRetemCOFINS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $retemCofins = null;

    /**
     * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [cFixarCSLL].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $fixarCsll = null;

    /**
     * Alíquota de CSLL.
     * Preenchimento opcional.
     * Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S".
     * Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
     *
     * Mapeado através do campo [nAliqCSLL].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaCsll = null;

    /**
     * Valor do CSLL.
     * Preenchimento opcional.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a
     * tag [cUtilizarValorImposto] seja diferente de "S".
     * Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e
     * que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na
     * tag correspondente será desprezada.
     *
     * Mapeado através do campo [nValorCSLL].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorCsll = null;

    /**
     * Retém CSLL (S/N).
     * Preenchimento opcional. Padrão é "N".
     * Indica se o imposto deve ser retido ou não.
     *
     * Mapeado através do campo [cRetemCSLL].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $retemCsll = null;

    /**
     * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
     *
     * Mapeado através do campo [cFixarINSS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $fixarInss = null;

    /**
     * Alíquota de INSS.
     * Preenchimento opcional.
     * Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S".
     * Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
     *
     * Mapeado através do campo [nAliqINSS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaInss = null;

    /**
     * Valor do INSS.
     * Preenchimento opcional.
     * Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a
     * tag [cUtilizarValorImposto] seja diferente de "S".
     * Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e
     * que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na
     * tag correspondente será desprezada.
     *
     * Mapeado através do campo [nValorINSS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorInss = null;

    /**
     * Retém INSS (S/N).
     * Preenchimento opcional. Padrão é "N".
     * Indica se o imposto deve ser retido ou não.
     *
     * Mapeado através do campo [cRetemINSS].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $retemInss = null;

    /**
     * Percentual de Redução da Base de Cálculo do INSS.
     *
     * Mapeado através do campo [nAliqRedBaseINSS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaReducaoBaseInss = null;

    /**
     * Percentual de Redução da Base de Cálculo do COFINS.
     *
     * Mapeado através do campo [nAliqRedBaseCOFINS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaReducaoBaseCofins = null;

    /**
     * Percentual de Redução da Base de Cálculo do PIS.
     *
     * Mapeado através do campo [nAliqRedBasePIS].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $aliquotaReducaoBasePis = null;

    /**
     * Deduz o ISS da Base de Cálculo de PIS e COFINS.
     *
     * Mapeado através do campo [lDeduzISS].
     * Recomenda-se armazenar como BOOLEAN.
     */
    public ?bool $deduzIss = null;
}
