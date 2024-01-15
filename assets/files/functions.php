<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

// functions.php

// Autoload classes when they are first used
spl_autoload_register(function ($class) {
    include 'path/to/' . $class . '.php';
});

// Rest of your functions and code


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
