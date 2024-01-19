# palindrome by Leandro Passos

[![Maintainer](http://img.shields.io/badge/maintainer-@itsmelepassos-blue.svg?style=flat-square)](https://twitter.com/itsmelepassos)
[![Source Code](http://img.shields.io/badge/source-itsmelepassos/phpoo--timezone-blue.svg?style=flat-square)](https://github.com/itsmelepassos/palindrome)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itsmelepassos/phpo--timezone.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/palindrome)
[![Latest Version](https://img.shields.io/github/release/itsmelepassos/palindrome.svg?style=flat-square)](https://github.com/itsmelepassos/palindrome/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/itsmelepassos/palindrome.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/palindrome)
[![Quality Score](https://img.shields.io/scrutinizer/g/itsmelepassos/palindrome.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/palindrome)
[![Total Downloads](https://img.shields.io/packagist/dt/itsmelepassos/palindrome.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/palindrome)

###### EN: palindrome is a script that checks the possibility of a number, a word or an expression being (or not) a palindrome.

PT-BR: palindrome é um script que verifica a possibilidade de um n úmero, uma palvra ou uma expressão ser (ou não) um palíndromo.

---

### Highlights/Destaques

- EN: Simple installation
    - PT-BR: Instalação Simples


- EN: PSR-2 and PSR-4 ready
    - PT-BR: Pronto para os padrões PSR-2 e PSR-4


- EN: Installable via Composer
    - PT-BR: Instalável via Composer

---
#### EN: Before installing, make sure you have Composer 2.x installed (Composer 1.x is not supported)
PT-BR: Antes de instalar, certifique-se de estar com o Composer 2.x instalado (Composer 1.x não é suportado)

---

###### EN: How to install? A: Insert this line below in your composer.json file, as a "require"

#### PT-BR: Como instalar? R: Insira esta linha abaixo em seu arquivo composer.json, como um "require"

```bash
"itsmelepassos/palindrome": "^1.0"
```

###### EN: Or type this command in your terminal or bash

#### PT-BR: Ou digite este comando em seu terminal ou bash

```bash
composer require itsmelepassos/palindrome
```

---

## Documentation/Documentação

###### EN: There is an example file of how you can call Palindrome directly in your index.php file in the "example" folder, or you can also refer to the code below to serve as an example.

PT-BR: Há um arquivo de exemplo de como você pode chamar direto o Palindrome em seu arquivo index.php na pasta "example",
ou pode também consultar o código abaixo para servir como exemplo.

```php
<?php

/**
 * Calls the composer autoload. Then, calls the respective class for the timezone.
 * Chama o autoload do composer. Então, chame a classe respectiva para o fuso-horário.
 */
require __DIR__ . "/../vendor/autoload.php";

use ItsMeLePassos\Palindrome\Palindrome;

/**
 * Calls an instance of Palindrome.
 * Chama uma instância de Palindrome.
 */
$palindrome = new Palindrome();

/**
 * Exemplos de valores tipo número ou texto que podem ser avaliados pelo método setTimezone() 
 * Examples of number or text values that can be evaluated by the setTimezone() method
 */
$palindrome01 = $palindrome->setPalindrome('105501');
$palindrome02 = $palindrome->setPalindrome('160678');
$palindrome03 = $palindrome->setPalindrome('Subi no ônibus');
$palindrome04 = $palindrome->setPalindrome('Socorram-me! Subi no ônibus em Marrocos');
?>

/**
 * Displays the results.
 * Exibe os resultados. 
 */
<section>
    <h1>Palíndromos</h1>

    <p><?= $palindrome01 ?></p>
    <p><?= $palindrome02 ?></p>
    <p><?= $palindrome03 ?></p>
    <p><?= $palindrome04 ?></p>
</section>
```
---

### Support/Suporte

###### EN: In case you discover any vulnerability, suggest some fixes or wish to contribute to the project, please contact the developer (me) by email [itsmelepassos@gmail.com]

PT-BR: No caso de descobrir alguma vulnerabilidade, sugerir algumas correções ou desejar contribuir para o projeto,
entre em contato com o desenvolvedor (eu) por e-mail [itsmelepassos@gmail.com]

---

###### EN: Test/implement at ease
PT-BR: Teste/implemente à vontade

### ThankYou/Obrigado

---

## Credits/Créditos

- [Leandro Passos](https://github.com/itsmelepassos) (Developer)

---

## License

The MIT License (MIT). Please see [License File](https://github.com/itsmelepassos/palindrome/blob/master/LICENSE)
for more information.