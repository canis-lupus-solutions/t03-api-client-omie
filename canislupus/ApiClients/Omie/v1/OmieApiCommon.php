<?php
namespace CanisLupus\ApiClients\Omie\v1;

use DateTime;
use Exception;

/**
 * Class OmieApiCommon.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1
 * @name    OmieApiCommon
 * @version 1.0.0
 */
class OmieApiCommon
{
    const COMPARE_RESULT_VALOR_DIFERENTE = 1;
    const COMPARE_RESULT_VALOR_AUSENTE_ALVO = 2;
    const COMPARE_RESULT_VALOR_AUSENTE_ORIGEM = 3;


    /**
     * @param string|null $sourceIndex
     * @param string|null $targetIndex
     *
     * @return int|null
     */
    public static function indexComparison(?string $sourceIndex, ?string $targetIndex): ?int
    {
        if ($sourceIndex !== null) {
            if ($targetIndex !== null) {
                if ($sourceIndex != $targetIndex) {
                    return self::COMPARE_RESULT_VALOR_DIFERENTE;
                }
            } else {
                return self::COMPARE_RESULT_VALOR_AUSENTE_ALVO;
            }
        } else {
            if (isset($targetIndex)) {
                return self::COMPARE_RESULT_VALOR_AUSENTE_ORIGEM;
            }
        }

        return null;
    }

    /**
     * @param int    $compareResult
     * @param string $indexName
     *
     * @return array
     */
    public static function comparisonResultProcessing(int $compareResult, string $indexName): array
    {
        $comparisonData = [
            'texts' => [],
            'diff'  => [
                'notEqual'      => [],
                'emptyOnTarget' => [],
                'emptyOnSource' => [],
            ],
        ];

        switch ($compareResult) {
            case OmieApiCommon::COMPARE_RESULT_VALOR_DIFERENTE:
                $comparisonData['texts'][] = "Valor diferente para o índice $indexName";
                $comparisonData['diff']['notEqual'][] = $indexName;
                break;

            case OmieApiCommon::COMPARE_RESULT_VALOR_AUSENTE_ALVO:
                $comparisonData['texts'][] = "Valor ausente no alvo para o índice $indexName";
                $comparisonData['diff']['emptyOnTarget'][] = $indexName;
                break;

            case OmieApiCommon::COMPARE_RESULT_VALOR_AUSENTE_ORIGEM:
                $comparisonData['texts'][] = "Valor ausente na origem para o índice $indexName";
                $comparisonData['diff']['emptyOnSource'][] = $indexName;
                break;
        }

        return $comparisonData;
    }

    /**
     * @param $dateString
     *
     * @return DateTime
     * @throws Exception
     */
    public static function dateTimeConverter($dateString): DateTime
    {
        $dateStringParts = explode('/', $dateString);

        return new DateTime($dateStringParts[2] . '-' . $dateStringParts[1] . '-' . $dateStringParts[0]);
    }
}
