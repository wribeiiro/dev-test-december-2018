<?php

/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Um palíndromo é uma palavra que pode ser lida  da mesma maneira da esquerda para direita, como ao contrário.
Exemplo: ASA.

Faça uma função que ao receber um input de uma palavra, string, verifica se é um palíndromo retornando verdadeiro ou falso.
O fato de um caracter ser maiúsculo ou mínusculo não deverá influenciar no resultado da função.

Exemplo: isPalindrome("Asa") deve retonar true.
*/




class Palindrome
{
    public static function isPalindrome($word): bool
    {   
        $normalWord   = strtolower($word);
        $reversedWord = strrev($normalWord);
        
        return $normalWord === $reversedWord;
    }
}

echo Palindrome::isPalindrome('Test');
echo Palindrome::isPalindrome('Asa');
echo Palindrome::isPalindrome('ana');