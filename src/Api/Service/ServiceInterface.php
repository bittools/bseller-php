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

namespace BSeller\Api\Service;

use BSeller\Api\Handler\Response\HandlerInterfaceException;
use BSeller\Api\Handler\Response\HandlerInterfaceSuccess;

interface ServiceInterface
{
    
    /**
     * ServiceInterface constructor.
     *
     * @param string $baseUri
     * @param array  $headers
     * @param array  $options
     */
    public function __construct($baseUri, array $headers = [], array $options = []);
    
    
    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function post($uri, $body = null, array $options = []);
    
    
    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function put($uri, $body = null, array $options = []);


    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function patch($uri, $body = null, array $options = []);
    
    
    /**
     * @param string $uri
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function get($uri, array $options = []);


    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function delete($uri, $body = null, array $options = []);
    
    
    /**
     * @param string $uri
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function head($uri, array $options = []);
    
    
    /**
     * @param string       $method
     * @param string       $uri
     * @param string|array $body
     * @param array        $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function request($method, $uri, $body = null, $options = []);
}
