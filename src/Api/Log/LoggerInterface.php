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

namespace BSeller\Api\Log;

use BSeller\Api\Log\TypeInterface\TypeRequestInterface;
use BSeller\Api\Log\TypeInterface\TypeResponseInterface;

interface LoggerInterface
{
    
    /**
     * @param TypeRequestInterface $request
     *
     * @return mixed
     */
    public function logRequest(TypeRequestInterface $request);
    
    
    /**
     * @param TypeResponseInterface $response
     *
     * @return mixed
     */
    public function logResponse(TypeResponseInterface $response);
}
