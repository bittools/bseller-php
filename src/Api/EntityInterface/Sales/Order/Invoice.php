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

namespace BSeller\Api\EntityInterface\Sales\Order;

use BSeller\Api\EntityInterface\EntityAbstract;

class Invoice extends EntityAbstract
{
    /** @var array */
    protected $data = [];

    /**
     * @return array|bool|mixed|string
     */
    public function export()
    {
        $data = (array)$this->getData();
        return (array)['invoice' => $data];
    }

    /**
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function create()
    {
        $this->validate();

        /** @var \BSeller\Api\Handler\Request\Sales\Order\InvoiceHandler $handler */
        $handler = $this->requestHandler();

        /** @var \BSeller\Api\Handler\Response\HandlerInterface $response */
        $response = $handler->create(
            $this->getOrderId(),
            $this->getTransactionDate(),
            $this->getBankCode(),
            $this->getAgencyCode(),
            $this->getAccountNumber(),
            $this->getAcquirer(),
            $this->getReturningCode(),
            $this->getAuthorizationId(),
            $this->getAuthorizingNsu(),
            $this->getCtfNsu(),
            $this->getInterestValue()
        );

        return $response;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return (string)$this->getData('orderId');
    }

    /**
     * @param $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->setData('orderId', $orderId);
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return (string)$this->getData('transactionDate');
    }

    /**
     * @param $transactionDate
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->setData('transactionDate', $transactionDate);
        return $this;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
        return (string)$this->getData('bankCode');
    }

    /**
     * @param $bankCode
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->setData('bankCode', $bankCode);
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyCode()
    {
        return (string)$this->getData('agencyCode');
    }

    /**
     * @param $agencyCode
     * @return $this
     */
    public function setAgencyCode($agencyCode)
    {
        $this->setData('agencyCode', $agencyCode);
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return (string)$this->getData('accountNumber');
    }

    /**
     * @param $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->setData('accountNumber', $accountNumber);
        return $this;
    }

    /**
     * @return string
     */
    public function getAcquirer()
    {
        return (string)$this->getData('acquirer');
    }

    /**
     * @param $acquirer
     * @return $this
     */
    public function setAcquirer($acquirer)
    {
        $this->setData('acquirer', $acquirer);
        return $this;
    }

    /**
     * @return string
     */
    public function getReturningCode()
    {
        return (string)$this->getData('returningCode');
    }

    /**
     * @param $returningCode
     * @return $this
     */
    public function setReturningCode($returningCode)
    {
        $this->setData('returningCode', $returningCode);
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationId()
    {
        return (string)$this->getData('authorizationId');
    }

    /**
     * @param $authorizationId
     * @return $this
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->setData('authorizationId', $authorizationId);
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizingNsu()
    {
        return (string)$this->getData('authorizingNsu');
    }

    /**
     * @param $authorizingNsu
     * @return $this
     */
    public function setAuthorizingNsu($authorizingNsu)
    {
        $this->setData('authorizingNsu', $authorizingNsu);
        return $this;
    }

    /**
     * @return string
     */
    public function getCtfNsu()
    {
        return (string)$this->getData('ctfNsu');
    }

    /**
     * @param $ctfNsu
     * @return $this
     */
    public function setCtfNsu($ctfNsu)
    {
        $this->setData('ctfNsu', $ctfNsu);
        return $this;
    }

    /**
     * @return string
     */
    public function getInterestValue()
    {
        return (string)$this->getData('interestValue');
    }

    /**
     * @param $interestValue
     * @return $this
     */
    public function setInterestValue($interestValue)
    {
        $this->setData('interestValue', $interestValue);
        return $this;
    }
}