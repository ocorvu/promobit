<?php
namespace App;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    const colors = [
        'preto',
        'branco',
        'vermelho',
        'azul'
    ];

    public function make(): array
    {
        $array = [];

       foreach (self::products as $p) {
           $product = explode('-', $p);

           if (array_key_exists($product[0], $array)) {
               array_push($array[$product[0]], $product[1]);
           } else {
               $array[$product[0]] = [$product[1]];
           } 
        }

        foreach (self::colors as $c) {
            $array[$c] = array_count_values($array[$c]);
        }

        return $array;
    }
}
