<?php

namespace ItsMeLePassos\Palindrome;

/**
 * 
 * @package ItsMeLePassos\Palindrome
 */
class Palindrome
{
    /**
     * 
     * @param mixed $value 
     * @return string 
     */
    public function setPalindrome($value): string
    {
        $original = strtolower(
            preg_replace('/[^A-Za-z0-9\-]/', '', str_replace([' ', '-', '_', '.', ':', ','], '', trim($value)))
        );
        $palindrome = strrev($original);

        return ($palindrome === $original ? "{$value} is a Palindrome" : "{$value} is Not a Palimdrome");
    }
}