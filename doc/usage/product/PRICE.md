# Preço de Produto

Nesta seção veremos como listar e atualizar preços no BSeller; A listagem de preços utiliza uma lógica de "consulta massiva". Essa lógica faz disponibilizar apenas preços de produtos que tiveram atualização. Após a consulta, é necessário "confirmar o batch", ou seja, "informar" ao BSeller que o lote de preços foi consultado e que pode ser removido da fila. Se a confirmação não for feita, as consultas sempre retornarão os mesmos resultados.  

### Listando preços

Você pode fazer a listagem da entidade da seguinte forma:

```php
// ...

/** @var \BSeller\Api\Handler\Request\Catalog\Product\PriceHandler $requestHandler */
$requestHandler = $api->productPrice();

/**
 * LIST PRODUCTS PRICES
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$tipoInterface = 'SITE';
$response = $requestHandler->pricesUpdated($tipoInterface);
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

### Atualizando preços

```php
// ...

/**
 * UPDATE PRODUCT PRICE
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$codigoItem = 'PRODUTOSEMVARIACAO01';
$tipoInterface = 'SITE';
$precoDe = 100;
$precoPor = 90;
$response = $requestHandler->createUpdate($codigoItem, $tipoInterface, $precoDe, $precoPor);
var_dump($response->toArray());

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)

[Continuar: Produtos](../PRODUCT.md)
