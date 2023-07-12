<?php
namespace CanisLupus\ApiClients\Omie\v1\Exceptions;

/**
 * Class OmieApiException.
 *
 * @author Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Exceptions
 * @name    OmieApiException
 * @version 1.0.0
 */
class OmieApiException extends \Exception
{
    const ERROR_PARAMETROS_REQUERIDOS = 'SOAP-ENV:Client-71';
    const ERROR_CODIGO_OU_INTEGRACAO_REQUERIDOS = 'SOAP-ENV:Client-224';
    const ERROR_CODIGO_INTEGRACAO_JA_CADASTRADO = 'SOAP-ENV:Client-103';
    const ERROR_LISTAR_VAZIO = 'SOAP-ENV:Client-5113';
    const ERROR_CONSULTAR_VAZIO = 'SOAP-ENV:Client-105';
    const ERROR_CONSULTAR_CODIGO_INTEGRACAO_INVALIDO = 'SOAP-ENV:Client-103';

    private string $omieErrorCode;
    private string $omieErrorMessage;

    /**
     * @return string
     */
    public function getOmieErrorCode(): string
    {
        return $this->omieErrorCode;
    }

    /**
     * @param string $omieErrorCode
     *
     * @return OmieApiException
     */
    public function setOmieErrorCode(string $omieErrorCode): OmieApiException
    {
        $this->omieErrorCode = $omieErrorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getOmieErrorMessage(): string
    {
        return $this->omieErrorMessage;
    }

    /**
     * @param string $omieErrorMessage
     *
     * @return OmieApiException
     */
    public function setOmieErrorMessage(string $omieErrorMessage): OmieApiException
    {
        $this->omieErrorMessage = $omieErrorMessage;

        return $this;
    }
}
