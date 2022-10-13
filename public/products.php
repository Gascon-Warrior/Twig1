<?php
require_once __DIR__ . '/../config/twig.php';
// j'initialise un tableau de produits.
$products = ['guitare', 'bass', 'banjo', 'cithare', 'lyre', 'harpe'];


echo $twig->render('products.html.twig', ['products' => $products]);