# Variação de Produto

Para integrar seus produtos corretamente, primeiramente você precisa integrar atributos de variação que compõem seus produtos (ex.: cor, tamanho, etc.).

### Criando Variações

É possível criar essa entidade no BSeller. 

```php
// ...

/** @var \BSeller\Api\EntityInterface\Catalog\Product\Variation $entityInterface */
$entityInterface = $api->productVariations()
    ->entityInterface();

$entityInterface
    ->setNome('Cor')
    ->setId(1)
    ->addSpecification(1, 'Azul')
    ->addSpecification(2, 'Amarelo')
    ->addSpecification(3, 'Vermelho')
    ->addSpecification(4, 'Rosa')
    ->addSpecification(5, 'Branco');
    
    $response = $entityInterface->create();
// ...
```

### Atualizando Variações

Quando o atributo já existe no BSeller e você precisa atualizá-lo:

```php
// ...

/** @var \BSeller\Api\EntityInterface\Catalog\Product\Variation $entityInterface */
$entityInterface = $api->productVariations()
    ->entityInterface();

$entityInterface->setNome('Cor')
    ->setId(1)
    ->addSpecification(1, 'Azul')
    ->addSpecification(2, 'Amarelo')
    ->addSpecification(3, 'Vermelho')
    ->addSpecification(4, 'Rosa')
    ->addSpecification(5, 'Branco');
    
    $response = $entityInterface->update();
// ...
```

### Listando Variações

Você pode fazer a listagem da entidade da seguinte forma:

```php
// ...

/** @var \BSeller\Api\EntityInterface\Catalog\Product\Variation $entityInterface */
    $entityInterface = $api->productVariations()
        ->entityInterface();
    
    $response = $entityInterface->variations();
    $variations = $response->toArray();
// ...
```

Para mais informações acesse a [documentação oficial](http://back.bseller.com.br/api/swagger-ui.html).

[Voltar](../../../README.md)

[Continuar: Produtos](PRODUCTS.md)
