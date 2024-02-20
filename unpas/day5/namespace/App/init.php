<?php 

// buat method autoload 
    spl_autoload_register(function ($class) {

        // explode variabel class
        // App\Product\Product = ["app", "product", "product"]
        $class = explode("\\", $class);
        $class = end($class);

        return include_once "Product/" . $class . ".php";
    });

?>