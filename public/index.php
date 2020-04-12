<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

$products = array('product1', 'product2', 'product3', 'product4', 'product5');



var_dump($products);

echo $twig->render('index.html.twig',['products'=> $products]);


