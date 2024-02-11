<?php 

// buat method autoload 
    spl_autoload_register(function ($class) {
        return include_once "Product/" . $class . ".php";
    });

?>