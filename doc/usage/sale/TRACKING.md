# Status de pedido

### Listando status de pedido massivamente

Você pode fazer a "listagem da entidade" e "confirmação do batch" da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\TrackingHandler $requestHandler */
$requestHandler = $api->tracking();

/**
 * LIST TRACKINGS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$businnesUnit = 1;
$response = $requestHandler->trackings($businnesUnit);
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

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)