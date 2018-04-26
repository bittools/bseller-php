# Utilizando a API

A classe API utilizada na SDK é a proxy necessária para você ter acesso às qualquer outra funcionalidade da API. A utilização dela é realmente simples.

Primeiramente você precisa importar o autoload do Composer no seu arquivo PHP:

```php
<?php
    
    require_once './vendor/autoload.php';
    
    // ...
```

Após isso você poderá instanciar uma nova classe API:

```php
<?php
    
    require_once './vendor/autoload.php';
    
    $authToken   = 'SEUTOKENNOBSELLER';

    /** @var \BSeller\Api $api */
    $api = new BSeller\Api($authToken);
```

Com isso você estará apto a utlizar qualquer funcionalidade da integração.

[Voltar](../../README.md)

[Continuar: Catálogo](CATALOG.md)
