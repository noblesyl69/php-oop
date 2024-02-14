<?php 


    spl_autoload_register(function ($class){
        $class = explode("\\", $class);
        $class = end($class);
        include_once "Product/".$class. ".php";
    })


?>