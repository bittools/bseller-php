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

** Um detalhe bastante **importante** na utilização da API: Existem duas formas de acessar os recursos. Através de um objeto **"Entity Interface"** e/ou através de um **"Request Handler"**. Em geral, qualquer recurso pode ser acessado diretamente pelo **"Request Handler"** porém, para algum deles ("pedido" e "variação de produto"), foi criado uma "camada acima" (wrapper) para facilitar a utilização do mesmo, provendo alguns métodos auxiliares.

** Foi realizada nessa SDK uma internacionalização da API do BSeller que, nativamente, está em Português. Caso o desenvolvedor precise acessar a API nativa, pode ser necessário que ele verifique o DE-PARA de atributos Inglês-Português. [Link Aqui](TRANSLATE.md) 


[Voltar](../../README.md)
