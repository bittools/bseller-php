# Transportadoras e contratos

### Listando transportadoras

Você pode fazer a "listagem da entidade" da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\CarrierHandler $requestHandler */
$requestHandler = $api->carrier();

/**
 * LIST CARRIERS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->carriers();
$list = $response->toArray();
var_dump($list);

// ...
```

### Listando contratos

Você pode fazer a listagem dos contratos das transportadoras da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Sales\CarrierHandler $requestHandler */
$requestHandler = $api->carrier();

/**
 * LIST CONTRACTS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$carrierId = '34028316002823';
$response = $requestHandler->contracts($carrierId);
$list = $response->toArray();
var_dump($list);

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)