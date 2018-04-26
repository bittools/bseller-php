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

namespace BSeller;

use BSeller\Api\Handler\Request\Getters as RequestHandlerGetters;
use BSeller\Api\EntityInterface\Getters as EntityInterfaceGetters;
use BSeller\Api\Service\ServiceAbstract;
use BSeller\Api\Service\ServiceInterface;
use BSeller\Api\Service\ServiceJson;

class Api implements ApiInterface
{
    
    use RequestHandlerGetters, EntityInterfaceGetters;


    const AUTH_TOKEN          = 'X-Auth-Token';
    
    /**
     * @var ServiceAbstract
     */
    protected $service = null;
    
    
    /**
     * @inheritdoc
     */
    public function __construct(
        $authToken,
        $baseUri = null,
        ServiceInterface $apiService = null
    ) {
        $headers = [
            self::AUTH_TOKEN => $authToken,
        ];

        if (empty($apiServiceClass)) {
            $this->service = new ServiceJson($baseUri, $headers);
            return;
        }
        
        $this->service = $apiService;
    }
    
    
    /**
     * Gets a single connection instance.
     *
     * @return ServiceAbstract
     */
    public function service()
    {
        return $this->service;
    }
}
