<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);

$products = [
            'Nike Zoom Pegasus' => ['Very comfortable shoes !!' => '299'],
            'Nike React Infinity' => ['Running shoes !!' => '189'],
            'Nike Air Zoom Pegasus' => ['Casual shoes !!' => '159'],
            'Nike Wildhorse 6' => ['Winter shoes !!' => '239'],
            'Nike Vaporfly Flyknit' => ['Summer shoes !!' => '349'],
            'Nike Cruzr One' => ['Safety shoes !!' => '199']
            ];

echo $twig->render('index.html.twig',['shop' => $products]);