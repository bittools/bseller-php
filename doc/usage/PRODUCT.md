# Produto

### Listando produtos de forma massiva

Você pode fazer a "listagem da entidade" e "confirmação do batch" da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Catalog\ProductHandler $requestHandler */
$requestHandler = $api->product();

/**
 * LIST PRODUCTS MASSIVELLY
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$interfaceType = 'SITE';
$maxRegisters = 100;

$response = $requestHandler->productsUpdated($interfaceType, $maxRegisters);
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

### Listando produtos

Você pode fazer a "listagem da entidade" (independentemente se sofreram alterações ou não) da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Catalog\ProductHandler $requestHandler */
$requestHandler = $api->product();

/**
 * LIST PRODUCTS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$interfaceType = 'SITE';
$maxRegisters = 100;
$pageNumber = 1;
$response = $requestHandler->products($interfaceType, $maxRegisters, $pageNumber);
$list = $response->toArray();
var_dump($list);

// ...
```

### Consultando um produto específico

Você pode fazer a consulta da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Catalog\ProductHandler $requestHandler */
$requestHandler = $api->product();

/**
 * GET SPECIFIC PRODUCT
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$itemCode = 'PRODUTOSEMVARIACAO01';
$interfaceType = 'SITE';
$response = $requestHandler->product($itemCode, $interfaceType);
var_dump($response->toArray());

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../README.md)