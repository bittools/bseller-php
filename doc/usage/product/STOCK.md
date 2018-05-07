# Estoque de Produto

Nesta seção veremos como listar estoques de produtos no BSeller; A listagem de estoques utiliza uma lógica de "consulta massiva". Essa lógica faz disponibilizar apenas estoques de produtos que tiveram atualização. Após a consulta, é necessário "confirmar o batch", ou seja, "informar" ao BSeller que o lote de estoques foi consultado e que pode ser removido da fila. Se a confirmação não for feita, as consultas sempre retornarão os mesmos resultados.  

### Listando estoques

Você pode fazer a "listagem da entidade" e "confirmação do batch" da seguinte forma:

```php
// ...

/** @var \BSeller\Api\Handler\Request\Catalog\Product\StockHandler $stockHandler */
$requestHandler = $api->productStock();

/**
 * LIST PRODUCTS STOCKS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->stocksUpdated();
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

### Consultando o estoque de um item específico

Você pode fazer a consulta da seguinte forma:

```php
// ...

/** @var \BSeller\Api\Handler\Request\Catalog\Product\StockHandler $stockHandler */
$requestHandler = $api->productStock();

/**
 * GET PRODUCT STOCK
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$productCode = 'PRODUTOSEMVARIACAO01';
$tipoInterface = 'SITE';
$response = $stockHandler->stock($productCode, $tipoInterface);
$list = $response->toArray();
var_dump($list);

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)

[Continuar: Produtos](../PRODUCT.md)
