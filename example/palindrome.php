<?php

/**
 * Calls the composer autoload. Then, calls the respective class for the timezone.
 * Chama o autoload do composer. Então, chame a classe respectiva para o fuso-horário.
 */
require __DIR__ . "/../vendor/autoload.php";

use ItsMeLePassos\Palindrome\Palindrome;

$palindrome = new Palindrome();

$palindrome01 = $palindrome->setPalindrome('105501');
$palindrome02 = $palindrome->setPalindrome('160678');
$palindrome03 = $palindrome->setPalindrome('Subi no ônibus');
$palindrome04 = $palindrome->setPalindrome('Socorram-me! Subi no ônibus em Marrocos');
?>

<section>
    <h1>Palíndromos</h1>

    <p><?= $palindrome01 ?></p>
    <p><?= $palindrome02 ?></p>
    <p><?= $palindrome03 ?></p>
    <p><?= $palindrome04 ?></p>
</section>