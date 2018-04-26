<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  BSeller
 * @package   BSeller
 *
 * @copyright Copyright (c) 2018 B2W Digital - BIT Tools Platform. .
 *
 * @author    Julio Reis <julio.reis@b2wdigital.com>
 */

namespace BSeller\Api\Handler\Response;

use GuzzleHttp\Message\Response;

interface HandlerInterfaceSuccess extends HandlerInterface
{

    /**
     * HandlerInterface constructor.
     *
     * @param Response $response
     */
    public function __construct(Response $response);
    
    
    /**
     * @return ResponseInterface
     */
    public function httpResponse();


    /**
     * @return mixed
     */
    public function body();
    
    
    /**
     * @return int|null
     */
    public function bodySize();


    /**
     * @return mixed
     */
    public function headers();


    /**
     * @return mixed
     */
    public function statusCode();


    /**
     * @return mixed
     */
    public function protocolVersion();
    
    
    /**
     * @return string
     */
    public function reasonPhrase();
}
