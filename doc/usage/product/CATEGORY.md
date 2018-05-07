# Categorias de Produto

Para integrar seus produtos corretamente, primeiramente você precisa integrar suas categorias;

### Listando categorias

Você pode fazer a listagem da entidade da seguinte forma:

```php
// ...

/** @var BSeller\Api\Handler\Request\Catalog\Product\CategoryHandler $requestHandler */
$requestHandler = $api->productCategory();

/**
 * LIST PRODUCT CATEGORIES
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->categories();
$categoryList = $response->toArray();

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)

[Continuar: Produtos](../PRODUCT.md)
