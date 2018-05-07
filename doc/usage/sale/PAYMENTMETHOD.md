# Métodos de Pagamento

### Listando métodos de pagamento

Você pode fazer a "listagem da entidade" da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\PaymentMethodHandler $requestHandler */
$requestHandler = $api->paymentMethod();

/**
 * LIST PAYMENT METHODS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->paymentMethods();
$list = $response->toArray();
var_dump($list);

// ...
```

### Listando bandeiras de cartão de crédito

Você pode fazer a listagem das bandeiras de cartão de crédito da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\PaymentMethodHandler $requestHandler */
$requestHandler = $api->paymentMethod();

/**
 * LIST PAYMENT CREDIT CARD FLAGS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->cardFlags();
$list = $response->toArray();
var_dump($list);

// ...
```

### Listando condições de pagamento

Você pode fazer a listagem das condições de pagamento da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\PaymentMethodHandler $requestHandler */
$requestHandler = $api->paymentMethod();

/**
 * LIST PAYMENT CONDITIONS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->paymentConditions();
$list = $response->toArray();
var_dump($list);

// ...
```

### Listando vouchers massivamente

Você pode fazer a "listagem dos vouchers" e "confirmação do batch" da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\VoucherHandler $requestHandler */
$requestHandler = $api->voucher();

/**
 * LIST VOUCHERS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->vouchers(1);
$list = $response->toArray();
$batchNumber = $list['batchNumber'];

/**
 * CONFIRM BATCH
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
if ($batchNumber) {
    $response = $requestHandler->batch($batchNumber);
}

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)