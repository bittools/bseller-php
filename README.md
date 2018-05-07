![BSeller - Platform](doc/images/logo.png)

# BSeller - PHP SDK

Esta é a SDK ([Software Developmen Kit](https://pt.wikipedia.org/wiki/Kit_de_desenvolvimento_de_software)) oficial da BSeller, construída em PHP, que você pode utilizar para integrar sua plataforma aos nossos serviços.

Veja um exemplo de como é fácil utilizar:

```php
<?php

    require_once './vendor/autoload.php';

    $authToken   = '6A9E013C42EB7152E0536AF3A8C0EDC8';

    /** @var \BSeller\Api $api */
    $api = new BSeller\Api($authToken);
    
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
    
    if ($response->success()) {
        echo 'SUCCESS!';
    }
```

## Wiki
1. [Requisitos do Sistema](doc/SYSTEM_REQUIREMENTS.md)
1. [Credenciais](doc/CREDENTIALS.md) 
1. [Instalação e Setup](doc/INSTALLATION.md)
1. Utilizando a SDK
    1. [Utilizando a API](doc/usage/API.md)
    1. [Produto](doc/usage/PRODUCT.md)
        1. [Atributo de Produto](doc/usage/product/ATTRIBUTE.md)
        1. [Categoria de Produto](doc/usage/product/CATEGORY.md)
        1. [Preço de Produto](doc/usage/product/PRICE.md)
        1. [Estoque de Produto](doc/usage/product/STOCK.md)
        1. [Variação de Produto](doc/usage/product/VARIATION.md)
    1. [Venda](doc/usage/SALE.md)
        1. [Entrega](doc/usage/sale/DELIVERY.md)
        1. [Métodos de Pagamento](doc/usage/sale/PAYMENTMETHOD.md)
        1. [Pedido](doc/usage/sale/ORDER.md)
        1. [Status de Pedido](doc/usage/sale/TRACKING.md)
        1. [Transportadora](doc/usage/sale/CARRIER.md)
     
## Contribuindo com o Código

Sua contribuição é sempre bem vinda! Por favor, leia a [documentação](doc/CONTRIBUTING.md) de contribuição de código.

## Autores

Julio Reis

## Suporte

Para solicitações de suporte, por favor, envie um e-mail para o seguinte endereço:

sdk@e-smart.com.br

## Licença
> BSeller PHP SDK é um projeto iniciado nos escritórios da B2W e disponibilizado como software Open Source em Março de 2018.

O código fonte incluso nesta distribuição está licenciado sob o OSL 3.0.

[The Open Software License 3.0 (OSL-3.0)](https://opensource.org/licenses/osl-3.0.php).

Por favor, veja o arquivo LICENSE.txt para ler o texto completo da licença OSL 3.0 ou entre em contato com sdk@e-smart.com.br para obter uma cópia.
