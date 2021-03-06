<?php

/**
 * BIT Tools Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  BSeller
 * @package   BSeller
 *
 * @copyright Copyright (c) 2018 B2W Digital - BIT Tools Platform. .
 *
 * @author    Julio Reis <julio.reis@b2wdigital.com>
 */

namespace BSeller\Api\Handler\Request\Sales\Order;

use BSeller\Api\DataTransformer\Sales\Order\Invoice\Create;
use BSeller\Api\EntityInterface\Sales\Order\Invoice;
use BSeller\Api\Handler\Request\HandlerAbstract;

class InvoiceHandler extends HandlerAbstract
{

    /** @var string */
    protected $baseUrlPath = '/api/pedidos/pagamentos';

    /**
     * @param $orderId
     * @param $transactionDate
     * @param $bankCode
     * @param $agencyCode
     * @param $accountNumber
     * @param null $acquirer
     * @param int $returningCode
     * @param int $authorizationId
     * @param int $authorizingNsu
     * @param int $ctfNsu
     * @param int $interestValue
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function create(
        $orderId,
        $transactionDate,
        $bankCode,
        $agencyCode,
        $accountNumber,
        $acquirer = null,
        $returningCode = 0,
        $authorizationId = 0,
        $authorizingNsu = 0,
        $ctfNsu = 0,
        $interestValue = 0
    )
    {
        $transformer = new Create(
            $orderId,
            $transactionDate,
            $bankCode,
            $agencyCode,
            $accountNumber,
            $acquirer,
            $returningCode,
            $authorizationId,
            $authorizingNsu,
            $ctfNsu,
            $interestValue
        );

        $body = $transformer->output();

        /** @var \BSeller\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->post($this->baseUrlPath('/aprovar'), $body);
        return $responseHandler;
    }

    /**
     * @param $orderId
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function reprove($orderId)
    {
        $body = [
            'idPedido' => $orderId,
            'sequencial' => 0
        ];

        /** @var \BSeller\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->post($this->baseUrlPath('/reprovar'), $body);
        return $responseHandler;
    }

    /**
     * @return Invoice
     */
    public function entityInterface()
    {
        return new Invoice($this);
    }
}
