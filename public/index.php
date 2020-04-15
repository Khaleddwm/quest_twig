<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);

$products = [
            'Nike Zoom Pegasus' => 'Very comfortable shoes !!',
            'Nike React Infinity' => 'Running shoes !!',
            'Nike Air Zoom Pegasus' => 'Casual shoes !!',
            'Nike Wildhorse 6' => 'Winter shoes !!',
            'Nike Vaporfly Flyknit' => 'Summer shoes !!',
            'Nike CruzrOne' => 'Safety shoes !!'
            ];

echo $twig->render('index.html.twig',['shop'=> $products]);