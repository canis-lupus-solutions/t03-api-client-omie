<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber;

use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\BoletoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\InfoSubModelo;

/**
 * Class ContaReceberEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber
 * @name    ContaReceberEntityOmieModel
 * @version 1.0.0
 */
class ContaReceberEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [codigo_lancamento_omie].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código interno de integração do omie, mapeado através do campo [codigo_lancamento_integracao].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;

    /**
     * Código de Cliente/Fornecedor.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?string $codigoClienteFornecedor = null;

    /**
     * Código do cliente informado pelo integrador.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $codigoClienteFornecedorIntegracao = null;

    /**
     * Data de Vencimento.
     * Recomenda-se armazenar como DATETIME.
     */
    protected ?\DateTime $dataVencimento = null;

    /**
     * Data de Previsão de Pagamento/Recebimento.
     * Recomenda-se armazenar como DATETIME.
     */
    protected ?\DateTime $dataPrevisao = null;

    /**
     * Valor do Lançamento.
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    protected ?float $valorDocumento = null;

    /**
     * Número do Pedido.
     * Recomenda-se armazenar como VARCHAR(15).
     */
    protected ?string $numeroPedido = null;

    /**
     * Status do Título.
     * Valores possíveis:
     * - RECEBIDO
     * - ATRASADO
     * - A VENCER
     * - VENCE HOJE
     * Recomenda-se armazenar como VARCHAR(100).
     */
    protected ?string $statusTitulo = null;

    /**
     * Informações sobre o cadastro do cliente.
     */
    protected ?InfoSubModelo $info = null;

    /**
     * Informações do boleto.
     */
    protected ?BoletoSubModelo $boleto = null;


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
     * @return ContaReceberEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): ContaReceberEntityOmieModel
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
     * @return ContaReceberEntityOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ContaReceberEntityOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoClienteFornecedor(): ?string
    {
        return $this->codigoClienteFornecedor;
    }

    /**
     * @param string|null $codigoClienteFornecedor
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setCodigoClienteFornecedor(?string $codigoClienteFornecedor): ContaReceberEntityOmieModel
    {
        $this->codigoClienteFornecedor = $codigoClienteFornecedor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoClienteFornecedorIntegracao(): ?string
    {
        return $this->codigoClienteFornecedorIntegracao;
    }

    /**
     * @param string|null $codigoClienteFornecedorIntegracao
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setCodigoClienteFornecedorIntegracao(?string $codigoClienteFornecedorIntegracao): ContaReceberEntityOmieModel
    {
        $this->codigoClienteFornecedorIntegracao = $codigoClienteFornecedorIntegracao;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataVencimento(): ?\DateTime
    {
        return $this->dataVencimento;
    }

    /**
     * @param \DateTime|null $dataVencimento
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setDataVencimento(?\DateTime $dataVencimento): ContaReceberEntityOmieModel
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataPrevisao(): ?\DateTime
    {
        return $this->dataPrevisao;
    }

    /**
     * @param \DateTime|null $dataPrevisao
     */
    public function setDataPrevisao(?\DateTime $dataPrevisao): void
    {
        $this->dataPrevisao = $dataPrevisao;
    }

    /**
     * @return float|null
     */
    public function getValorDocumento(): ?float
    {
        return $this->valorDocumento;
    }

    /**
     * @param float|null $valorDocumento
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setValorDocumento(?float $valorDocumento): ContaReceberEntityOmieModel
    {
        $this->valorDocumento = $valorDocumento;

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
     * @return ContaReceberEntityOmieModel
     */
    public function setNumeroPedido(?string $numeroPedido): ContaReceberEntityOmieModel
    {
        $this->numeroPedido = $numeroPedido;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatusTitulo(): ?string
    {
        return $this->statusTitulo;
    }

    /**
     * @param string|null $statusTitulo
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setStatusTitulo(?string $statusTitulo): ContaReceberEntityOmieModel
    {
        $this->statusTitulo = $statusTitulo;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\InfoSubModelo|null
     */
    public function getInfo(): ?InfoSubModelo
    {
        return $this->info;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\InfoSubModelo|null $info
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setInfo(?InfoSubModelo $info): ContaReceberEntityOmieModel
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\BoletoSubModelo|null
     */
    public function getBoleto(): ?BoletoSubModelo
    {
        return $this->boleto;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceber\SubModelos\BoletoSubModelo|null $boleto
     *
     * @return ContaReceberEntityOmieModel
     */
    public function setBoleto(?BoletoSubModelo $boleto): ContaReceberEntityOmieModel
    {
        $this->boleto = $boleto;

        return $this;
    }
}
