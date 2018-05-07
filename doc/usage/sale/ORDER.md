# Pedido

### Enviando um pedido para BSeller

Segue código exemplo de como você pode enviar (criar) um pedido no BSeller. Perceba que aqui estamos utilizando o conceito de "entityInterface", um wrapper para facilitar a adição dos dados necessários ao objeto de pedido.

```php
// ...

/** @var \BSeller\Api\EntityInterface\Sales\Order $entityInterface */
$entityInterface = $api->order()
    ->entityInterface();

//== GENERAL DATA
$salesChannel = 'SITE';
$emissionDate = '2018-05-03T13:10:44.000Z';
$includingDate = '2018-05-03T13:10:44.000Z';
$orderNumber = random_int(1, 9999999999);
$orderSouce = 'LJ';
$orderForConsuming = true;
$orderType = 'N';
$freightType = 'C';
$businessUnit = 1;

//== CUSTOMER DATA
$cpf = '72251875034';
$classification = 1;
$email = 'julio.reis@b2wdigital.com';
$name = 'Julio Reis';
$rg = '85657431';
$homePhone = $cellPhone = '(11) 99999-9876';
$gender = 'M';
$birthdayDate = '1985-02-14';
$address = [
    'street' => 'Rua A',
    'neighborhood' => 'Vila Olímpia',
    'number' => 123,
    'complement' => 'apt. 123',
    'reference' => '',
    'cep' => '04550900',
    'city' => 'São Paulo',
    'state' => 'SP',
    'country' => 'Brasil',
    'zipCode' => ''
];
$customerType = 2;

//== ITEM DATA
$cnpjFilial = '29367082000199';
$itemCode = 'PRODUTOSEMVARIACAO01';
$itemUnitPrice = 120.23;
$quantity = 1;
$unitConditionalDiscount = 0;
$unitUnconditionalDiscount = 0;
$promotionalCode = null;
$freightValue = 10;
$shippingCompanyContractId = 'PAC';
$shippingCompanyId = 34028316002823;
$itemType = 'P';
$transitTimeDeadline = 5;
$stockStablishmentCode = 1;
$exitStablishmentCode = 1;

//== PAYMENT DATA
$value = 130.23;
$paymentMethodCode = 1;
$paymentConditionCode = null;
$creditCardData = [
    "flagCode" => "3",
    "securityCode" => "123",
    "cpfHolder" => "72251875034",
    "dueDate" => "7\/2020",
    "cardNumber" => "************6991",
    "installmentsQty" => "1",
    "interestPercentual" => 0,
    "first6CardDigits" => "348062",
    "securityCodeStatus" => 1,
    "holderName" => "Julio Reis",
    "interestValue" => 0,
    "managerInterestValue" => 0
];

//== TOTALS
$totalFreightValue = 10;
$totalProductsValue = 120.23;

$entityInterface
    ->setSalesChannel($salesChannel)
    ->setEmissionDate($emissionDate)
    ->setIncludingDate($includingDate)
    ->setOrderNumber($orderNumber)
    ->setStoreOrderNumber($orderNumber)
    ->setOrderSource($orderSouce)
    ->setOrderForConsuming($orderForConsuming)
    ->setOrderType($orderType)
    ->setFreightType($freightType)
    ->setBusinessUnit($businessUnit)
    ->addCustomer(
        \BSeller\Api\EntityInterface\Sales\Order::ADRESS_TYPE_BILLING,
        $cpf,
        $email,
        $name,
        $rg,
        $homePhone,
        $cellPhone,
        $gender,
        $birthdayDate,
        $address,
        $customerType,
        null,
        $classification
    )->addCustomer(
        \BSeller\Api\EntityInterface\Sales\Order::ADRESS_TYPE_SHIPPING,
        $cpf,
        $email,
        $name,
        $rg,
        $homePhone,
        $cellPhone,
        $gender,
        $birthdayDate,
        $address,
        $customerType,
        null,
        $classification
    )->addItem(
        $cnpjFilial,
        $itemCode,
        $itemUnitPrice,
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
        $exitStablishmentCode
    )->addShipping(
        null,
        null,
        1
    )->addPayment(
        $value,
        $paymentMethodCode,
        $paymentConditionCode,
        $address,
        $creditCardData
    )->addValues(
        $totalFreightValue,
        $totalProductsValue
    );

/**
 * SEND ORDER TO BSELLER
 *
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $entityInterface->create();

// ...
```

### Aprovando um pagamento de um pedido no BSeller

Segue código exemplo de como você pode aprovar um pagamento no BSeller. Aqui já estamos utilizando um "request handler" pois envolve poucos dados no envio do request para o BSeller. Não achamos necessário criar um "entity interface" para facilitar o "empacotamento" desses dados. 

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\OrderHandler $requestHandler */
$requestHandler = $api->order();

/**
 * APPROVE PAYMENT
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$orderId = '5658979804';
$transactionDate = '2018-05-04T13:10:44.000Z';
$bankCode = '123';
$agencyCode = '12349';
$accountNumber = '123456789';

$response = $requestHandler->approvePayment(
    $orderId,
    $transactionDate,
    $bankCode,
    $agencyCode,
    $accountNumber
);
var_dump($response->toArray());

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)