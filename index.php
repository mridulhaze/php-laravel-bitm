<?php

require_once "vendor/autoload.php";
use  App\classes\HelloWorld;
use App\classes\Product;

//test();

$myfirstcalsscall = new HelloWorld();
$myfirstcalsscall->index();
echo '<br/>';
echo '<br/>';
echo '----------------------------------------------------------';
echo '<br/>';
$productdetails = new Product();
$productdetails->productdetails();
echo '<br/>';
echo '<br/>';
echo '----------------------------------------------------------';
echo '<br/>';
