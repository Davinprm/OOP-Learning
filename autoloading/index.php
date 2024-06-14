<pre>
<?php

    require_once 'App/init.php';

    //instance obj to d Product class
    $product1 = new Sugar;
    $product2 = new Sugar('Sausage Puff', 'Tiramisu Donut', 'Bagel', 10, false);
    $product3 = new Sugar('Sausage Bun', 'Strawberry Muffin', 'Baguette', 20, true); //put value on param to send it to cunstructor method

    $productInfo = new productInfo();
    $productInfo->addProduct($product3);
    $productInfo->addProduct($product2);
    echo "{$product2->greeting()} <br>{$productInfo->showProductList()}";

    echo "<br>";
    //make aka for d class target for shortcuting long namespace
    use Autoloading\App\Product\User as userProduct;
    new userProduct();
    echo "<br>";
    use Autoloading\App\Service\User as userService;
    new userService();