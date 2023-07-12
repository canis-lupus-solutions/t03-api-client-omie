<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ProdutoUtilizadoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ProdutoUtilizadoSubModel
 * @version 1.0.0
 */
class ProdutoUtilizadoSubModel
{
    /**
     * Código interno do omie.
     *
     * Mapeado através do campo [nIdItemPU].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?int $idOmie = null;

    /**
     * Pode ser:
     * "A" - Alterar o item.
     * "E" - Excluir o item.
     * "I" - Incluir o item na alteração.
     *
     * Mapeado através do campo [cAcaoItemPU].
     * Recomenda-se armazenar como VARCHAR(1).
     */
    public ?string $acao = null;

    /**
     * Código interno do produto.
     *
     * Mapeado através do campo [nCodProdutoPU].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?string $idOmieProdutoUtilizado = null;

    /**
     * Quantidade.
     *
     * Mapeado através do campo [nQtdePU].
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $quantidade = null;

    /**
     * Código do Local do Estoque.
     *
     * Mapeado através do campo [codigo_local_estoque].
     * Recomenda-se armazenar como BIGINT.
     */
    public ?string $idOmieLocalDeEstoque = null;
}
