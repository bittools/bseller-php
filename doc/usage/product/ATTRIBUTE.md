# Atributos de Produto

Para integrar seus produtos corretamente, primeiramente você precisa integrar seus atributos e grupos de atributos, chamados de "Ficha Técnica" no BSeller. São exemplos de atributos: Autor, Peso, Marca, EAN, etc. Esse mesmo endpoint já retorna as informações de "Atributos" e "Agrupamento de Atributos";

### Listando atributos

Você pode fazer a listagem da entidade da seguinte forma:

```php
// ...

/** @var \BSeller\Api\Handler\Request\Catalog\Product\AttributeHandler $attributeHandler */
$attributeHandler = $api->productAttribute();

/**
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $attributeHandler->attributes();
$attributes = $response->toArray();

// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)

[Continuar: Produtos](PRODUCTS.md)
