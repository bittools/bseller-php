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

namespace BSeller\Api\EntityInterface;

use BSeller\Api;
use BSeller\Api\Helpers;

abstract class EntityAbstract implements EntityInterface
{
    
    use Helpers;
    
    protected $data = [];
    
    /** @var Api */
    protected $api;

    /** @var Api\Handler\Request\HandlerAbstract */
    protected $requestHandler;
    
    
    /**
     * EntityAbstract constructor.
     *
     * @param Api\Handler\Request\HandlerAbstract $handler
     */
    public function __construct(Api\Handler\Request\HandlerAbstract $handler)
    {
        if (!empty($handler)) {
            $this->requestHandler = $handler;
            $this->api            = $handler->api();
        }
    }
    
    
    /**
     * @param string     $key
     * @param null|mixed $default
     *
     * @return array|bool|mixed|string
     */
    public function getData($key = null, $default = null)
    {
        if (is_null($key)) {
            return $this->data;
        }
        
        return $this->arrayExtract($this->data, $key, $default);
    }
    
    
    /**
     * @param string       $key
     * @param string|array $value
     *
     * @return $this
     */
    public function setData($key, $value)
    {
        $this->data[$key] = $value;
        return $this;
    }
    
    
    /**
     * @return array
     */
    public function export()
    {
        return $this->getData();
    }


    /**
     * @return Api
     */
    protected function api()
    {
        return $this->api;
    }


    /**
     * @return \BSeller\Api\Service\ServiceAbstract
     */
    protected function service()
    {
        return $this->api()->service();
    }


    /**
     * @return Api\Handler\Request\HandlerAbstract
     */
    protected function requestHandler()
    {
        return $this->requestHandler;
    }


    public function validate()
    {
        return true;
    }
}
