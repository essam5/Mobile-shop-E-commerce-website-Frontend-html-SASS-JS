<?php
    //require database connection
    require('database/DBController.php');

    //require fitch product
    require('database/Product.php');

    //DBContorllor object
    $db = new DBController();

    //product object
    $product = new Product($db);
    // to get any data from any table 
    print_r($product->getData());