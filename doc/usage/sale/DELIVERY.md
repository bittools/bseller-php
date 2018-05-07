# Entregas

### Listando entregas massivamente

Você pode fazer a "listagem da entidade" e "confirmação do batch" da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\DeliveryHandler $requestHandler */
$requestHandler = $api->delivery();

/**
 * LIST DELIVERIES
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$businessUnit = 1;
$response = $requestHandler->deliveries($businessUnit);
$list = $response->toArray();
var_dump($list);

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

### Consultando uma entrega específica

Você pode fazer a consulta da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\DeliveryHandler $requestHandler */
$requestHandler = $api->delivery();

/**
 * GET DELIVERY
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$deliveryId = 28634969;
$response = $requestHandler->delivery($deliveryId);
var_dump($response->toArray());

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)