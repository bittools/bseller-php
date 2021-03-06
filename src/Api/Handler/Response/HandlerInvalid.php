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

class HandlerInvalid extends HandlerAbstract
{
    
    /**
     * @return bool
     */
    public function success()
    {
        return false;
    }
    
    
    /**
     * @return bool
     */
    public function exception()
    {
        return false;
    }
    
    
    /**
     * @return bool
     */
    public function invalid()
    {
        return true;
    }
    
    
    /**
     * @return array
     */
    public function export()
    {
        return [];
    }
}
