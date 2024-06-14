<?php
    // require_once'Product/Selling.php';
    // require_once'Product/Product.php';
    // require_once'Product/Sugar.php';
    // require_once'Product/productInfo.php';
    // require_once 'Product/User.php';
    // require_once 'Service/User.php';

    //use closure = no name function inside function's param
    spl_autoload_register(function($class) {
        //to determine string by '\\' = \ as param to $class target n took d last name with "end()"
        $class = explode('\\', $class);
        $class = end($class);
        require_once __DIR__ .  '/Product/' . $class . '.php';
        //will call automatically on by one target file //add magic constant to be more complete
    });

    spl_autoload_register(function($class) {
        $class = explode('\\', $class);
        $class = end($class);
        require_once __DIR__ .  '/Service/' . $class . '.php';
    });
