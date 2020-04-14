<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);

$products = [
            'Nike Zoom Pegasus',
            'Nike React Infinity',
            'Nike Air Zoom Pegasus',
            'Nike Wildhorse 6',
            'Nike Vaporfly Flyknit',
            'Nike CruzrOne'
            ];

echo $twig->render('index.html.twig',['shop'=> $products]);