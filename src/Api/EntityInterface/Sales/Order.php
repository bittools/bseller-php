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

namespace BSeller\Api\EntityInterface\Sales;

use BSeller\Api\EntityInterface\EntityAbstract;

class Order extends EntityAbstract
{
    /** @var array */
    protected $data = [];

    const ADRESS_TYPE_BILLING = 'billing_address';
    const ADRESS_TYPE_SHIPPING = 'shipping_address';

    /**
     * @return string
     */
    public function getSaleChannel()
    {
        return (string)$this->getData('salesChannel');
    }

    /**
     * @param string $salesChannel
     * @return $this
     */
    public function setSalesChannel($salesChannel)
    {
        $this->setData('salesChannel', (string)$salesChannel);
        return $this;
    }

    /**
     * @return array
     */
    public function getBillingCustomer()
    {
        return $this->getData('billingCustomer');
    }

    /**
     * @return array
     */
    public function getShippingCustomer()
    {
        return $this->getData('shippingCustomer');
    }

    /**
     * @param $addressType
     * @param $classification
     * @param $crt
     * @param $birthdayDate
     * @param $email
     * @param $address
     * @param $fax
     * @param $id
     * @param $stateInscription
     * @param $name
     * @param $rg
     * @param $gender
     * @param $suframa
     * @param $cellphone
     * @param $commercialPhone
     * @param $homePhone
     * @param $customerType
     * @return $this
     */
    public function addCustomer(
        $addressType,
        $id,
        $email,
        $name,
        $rg,
        $homePhone,
        $cellphone,
        $gender,
        $birthdayDate,
        $address,
        $customerType,
        $stateInscription = '',
        $classification = '',
        $crt = '',
        $fax = '',
        $suframa = '',
        $commercialPhone = ''
    )
    {
        $customer = [
            'classification' => $classification,
            'crt' => $crt,
            'birthdayDate' => $birthdayDate,
            'email' => $email,
            'address' => $address,
            'fax' => $fax,
            'id' => $id,
            'stateInscription' => $stateInscription,
            'name' => $name,
            'rg' => $rg,
            'gender' => $gender,
            'suframa' => $suframa,
            'cellphone' => $cellphone,
            'commercialPhone' => $commercialPhone,
            'homePhone' => $homePhone,
            'customerType' => $customerType
        ];

        if ($addressType == self::ADRESS_TYPE_BILLING) {
            $this->setData('billingCustomer', $customer);
        } else {
            $this->setData('shippingCustomer', $customer);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getBoxCode()
    {
        return (string)$this->getData('boxCode');
    }

    /**
     * @param string $boxCode
     * @return $this
     */
    public function setBoxCode($boxCode)
    {
        $this->setData('boxCode', (string)$boxCode);
        return $this;
    }

    /**
     * @return string
     */
    public function getShoppingListCode()
    {
        return (string)$this->getData('shoppingListCode');
    }

    /**
     * @param string $shoppingListCode
     * @return $this
     */
    public function setShoppingListCode($shoppingListCode)
    {
        $this->setData('shoppingListCode', (string)$shoppingListCode);
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesmanCode()
    {
        return (string)$this->getData('salesmanCode');
    }

    /**
     * @param string $salesmanCode
     * @return $this
     */
    public function setSalesmanCode($salesmanCode)
    {
        $this->setData('salesmanCode', (string)$salesmanCode);
        return $this;
    }

    /**
     * @return string
     */
    public function getEmissionDate()
    {
        return (string)$this->getData('emissionDate');
    }

    /**
     * Receive the date in ISO 8601 format (ex.: "2018-05-03T13:10:44.000Z")
     *
     * @param string $emissionDate
     *
     * @return $this
     */
    public function setEmissionDate($emissionDate)
    {
        $this->setData('emissionDate', (string)$emissionDate);
        return $this;
    }

    /**
     * @return string
     */
    public function getIncludingDate()
    {
        return (string)$this->getData('includingDate');
    }

    /**
     * Receive the date in ISO 8601 format (ex.: "2018-05-03T13:10:44.000Z")
     *
     * @param string $includingDate
     *
     * @return $this
     */
    public function setIncludingDate($includingDate)
    {
        $this->setData('includingDate', (string)$includingDate);
        return $this;
    }

    /**
     * @return array
     */
    public function getShipping()
    {
        return $this->getData('shipping');
    }

    /**
     * @param string $scheduledDeliveryDate - Receive the date in ISO 8601 format (ex.: "2018-05-03T13:10:44.000Z")
     * @param string $shiftScheduledDeliveryDate
     * @param string $deliveryType
     * @return $this
     */
    public function addShipping(
        $scheduledDeliveryDate,
        $shiftScheduledDeliveryDate,
        $deliveryType
    )
    {
        $shipping = [
            'scheduledDeliveryDate' => $scheduledDeliveryDate,
            'shiftScheduledDeliveryDate' => $shiftScheduledDeliveryDate,
            'deliveryType' => $deliveryType
        ];

        $this->setData('shipping', $shipping);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getBrokenDeliveries()
    {
        return (boolean)$this->getData('brokenDeliveries');
    }

    /**
     * @param $brokenDeliveries
     * @return $this
     */
    public function setBrokenDeliveries($brokenDeliveries)
    {
        $this->setData('brokenDeliveries', (boolean)$brokenDeliveries);
        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->getData('items');
    }

    public function addItem(
        $cnpj,
        $itemCode,
        $unitPrice,
        $quantity,
        $unitConditionalDiscount,
        $unitUnconditionalDiscount,
        $promotionalCode,
        $freightValue,
        $shippingCompanyContractId,
        $shippingCompanyId,
        $itemType,
        $transitTimeDeadline,
        $stockStablishmentCode,
        $exitStablishmentCode,
        $distributionCenterDeadline = 0,
        $providerDeadline = 0,
        $kitItemCode = null,
        $kitParentCode = null,
        $bonifiedItem = false,
        $expensesValue = 0,
        $icmsDesoneradoValue = 0,
        $icmsStValue = 0,
        $ipiValue = 0,
        $giftCards = null,
        $groupingProducedCode = null,
        $guaranteedItemCode = null,
        $customizationsGroup = null,
        $groupingProducedSequenceNumber = null,
        $guaranteedItemSequenceNumber = null,
        $stockType = null,
        $extendedGaranteeCostValue = 0
    )
    {
        $items = $this->getItems();

        $item = [
            'giftCards' => $giftCards,
            'cnpj' => $cnpj,
            'groupingProducedCode' => $groupingProducedCode,
            'stockStablishmentCode' => $stockStablishmentCode,
            'exitStablishmentCode' => $exitStablishmentCode,
            'itemCode' => $itemCode,
            'guaranteedItemCode' => $guaranteedItemCode,
            'kitItemCode' => $kitItemCode,
            'kitParentCode' => $kitParentCode,
            'promotionalCode' => $promotionalCode,
            'unitConditionalDiscount' => $unitConditionalDiscount,
            'unitUnconditionalDiscount' => $unitUnconditionalDiscount,
            'customizationsGroup' => $customizationsGroup,
            'shippingCompanyContractId' => $shippingCompanyContractId,
            'shippingCompanyId' => $shippingCompanyId,
            'bonifiedItem' => $bonifiedItem,
            'distributionCenterDeadline' => $distributionCenterDeadline,
            'providerDeadline' => $providerDeadline,
            'transitTimeDeadline' => $transitTimeDeadline,
            'unitPrice' => $unitPrice,
            'quantity' => $quantity,
            'groupingProducedSequenceNumber' => $groupingProducedSequenceNumber,
            'guaranteedItemSequenceNumber' => $guaranteedItemSequenceNumber,
            'stockType' => $stockType,
            'itemType' => $itemType,
            'extendedGaranteeCostValue' => $extendedGaranteeCostValue,
            'expensesValue' => $expensesValue,
            'shippingValue' => $freightValue,
            'icmsDesoneradoValue' => $icmsDesoneradoValue,
            'icmsStValue' => $icmsStValue,
            'ipiValue' => $ipiValue
        ];

        if (!$items) {
            $item['sequential'] = 0;
            $items[] = $item;
        } else {
            $item['sequential'] = (max(array_keys($items)) + 1);
            $items[] = $item;
        }

        $this->setData('items', $items);

        return $this;
    }


    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return (string)$this->getData('orderNumber');
    }

    /**
     * @param $orderNumber
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->setData('orderNumber', (string)$orderNumber);
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderNumber()
    {
        return (string)$this->getData('externalOrderNumber');
    }

    /**
     * @param $externalOrderNumber
     * @return $this
     */
    public function setExternalOrderNumber($externalOrderNumber)
    {
        $this->setData('externalOrderNumber', (string)$externalOrderNumber);
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreOrderNumber()
    {
        return (string)$this->getData('storeOrderNumber');
    }

    /**
     * @param $storeOrderNumber
     * @return $this
     */
    public function setStoreOrderNumber($storeOrderNumber)
    {
        $this->setData('storeOrderNumber', (string)$storeOrderNumber);
        return $this;
    }

    /**
     * @return string
     */
    public function getTagNote()
    {
        return (string)$this->getData('tagNote');
    }

    /**
     * @param $tagNote
     * @return $this
     */
    public function setTagNote($tagNote)
    {
        $this->setData('tagNote', (string)$tagNote);
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderSource()
    {
        return (string)$this->getData('orderSource');
    }

    /**
     * @param $orderSource
     * @return $this
     */
    public function setOrderSource($orderSource)
    {
        $this->setData('orderSource', (string)$orderSource);
        return $this;
    }

    /**
     * @return array
     */
    public function getPayments()
    {
        return $this->getData('payments');
    }

    /**
     * @param float $value
     * @param int $paymentMethodCode
     * @param int $paymentConditionCode
     * @param array $addressData
     * @param array $creditCardData
     * @param string $couponCode
     * @param string $bankCode
     * @param string $bankAgencyCode
     * @param string $accountNumber
     * @param string $ticketExpirationDate
     * @param string $voucherCode
     * @param string $ourNumber
     * @return $this
     */
    public function addPayment(
        $value,
        $paymentMethodCode,
        $paymentConditionCode,
        $addressData,
        $creditCardData,
        $couponCode = null,
        $bankCode = null,
        $bankAgencyCode = null,
        $accountNumber = null,
        $ticketExpirationDate = null,
        $voucherCode = null,
        $ourNumber = null
    )
    {
        $payments = $this->getPayments();

        $payment = [
            'creditCardData' => $creditCardData,
            'bankAgencyCode' => $bankAgencyCode,
            'bankCode' => $bankCode,
            'paymentConditionCode' => $paymentConditionCode,
            'couponCode' => $couponCode,
            'paymentMethodCode' => $paymentMethodCode,
            'voucherCode' => $voucherCode,
            'ticketExpirationDate' => $ticketExpirationDate,
            'addressData' => $addressData,
            'ourNumber' => $ourNumber,
            'accountNumber' => $accountNumber,
            'value' => $value
        ];

        if (!$payments) {
            $payment['sequential'] = 0;
            $payments[] = $payment;
        } else {
            $payment['sequential'] = (max(array_keys($payments)) + 1);
            $payments[] = $payment;
        }

        $this->setData('payments', $payments);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderForConsuming()
    {
        return (boolean)$this->getData('orderForConsuming');
    }

    /**
     * @param $orderForConsuming
     * @return $this
     */
    public function setOrderForConsuming($orderForConsuming)
    {
        $this->setData('orderForConsuming', (string)$orderForConsuming);
        return $this;
    }

    /**
     * @return array
     */
    public function getPublicity()
    {
        return $this->getData('publicity');
    }

    /**
     * @param $publicity
     * @return $this
     */
    public function setPublicity($publicity)
    {
        $this->setData('publicity', $publicity);
        return $this;
    }

    /**
     * @return string
     */
    public function getFreightType()
    {
        return $this->getData('freightType');
    }

    /**
     * @param $freightType
     * @return $this
     */
    public function setFreightType($freightType)
    {
        $this->setData('freightType', $freightType);
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderType()
    {
        return $this->getData('orderType');
    }

    /**
     * @param $orderType
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->setData('orderType', $orderType);
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessUnit()
    {
        return $this->getData('businessUnit');
    }

    /**
     * @param $businessUnit
     * @return $this
     */
    public function setBusinessUnit($businessUnit)
    {
        $this->setData('businessUnit', $businessUnit);
        return $this;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->getData('values');
    }

    /**
     * @param float $totalFreightValue
     * @param float $totalProductsValue
     * @param float $totalFinantialExpenseValue
     * @param float $totalItemExpenseValue
     * @param float $totalIcmsDesoneradoValue
     * @param float $totalIcmsStValue
     * @param float $totalIpiValue
     * @return $this
     */
    public function addValues(
        $totalFreightValue,
        $totalProductsValue,
        $totalFinantialExpenseValue = 0.0,
        $totalItemExpenseValue = 0.0,
        $totalIcmsDesoneradoValue = 0.0,
        $totalIcmsStValue = 0.0,
        $totalIpiValue = 0.0
    )
    {
        $values = [
            'totalFinantialExpenseValue' => $totalFinantialExpenseValue,
            'totalItemExpenseValue' => $totalItemExpenseValue,
            'totalFreightValue' => $totalFreightValue,
            'totalIcmsDesoneradoValue' => $totalIcmsDesoneradoValue,
            'totalIcmsStValue' => $totalIcmsStValue,
            'totalIpiValue' => $totalIpiValue,
            'totalProductsValue' => $totalProductsValue
        ];

        $this->setData('values', $values);
        return $this;
    }

    /**
     * @return array|bool|mixed|string
     */
    public function export()
    {
        $data = (array)$this->getData();
        return (array)['order' => $data];
    }

    /**
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function create()
    {
        $this->validate();

        /** @var \BSeller\Api\Handler\Request\Sales\OrderHandler $handler */
        $handler = $this->requestHandler();

        /** @var \BSeller\Api\Handler\Response\HandlerInterface $response */
        $response = $handler->create(
            $this->getSaleChannel(),
            $this->getShippingCustomer(),
            $this->getBillingCustomer(),
            $this->getBoxCode(),
            $this->getShoppingListCode(),
            $this->getSalesmanCode(),
            $this->getEmissionDate(),
            $this->getIncludingDate(),
            $this->getShipping(),
            $this->getBrokenDeliveries(),
            $this->getItems(),
            $this->getOrderNumber(),
            $this->getExternalOrderNumber(),
            $this->getStoreOrderNumber(),
            $this->getTagNote(),
            $this->getOrderSource(),
            $this->getPayments(),
            $this->getOrderForConsuming(),
            $this->getPublicity(),
            $this->getFreightType(),
            $this->getOrderType(),
            $this->getBusinessUnit(),
            $this->getValues()
        );

        return $response;
    }
}