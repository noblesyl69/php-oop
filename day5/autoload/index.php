<?php 

    include_once "App/init.php";

    // inisialisasi class product
    $product1 = new Komik("Naruto", "Masasi Khusimoto", "Shonen Jump", 50000, 50);
    $product1->setType("komik");
    $product1->setDiskon(50);
    echo $product1->getInfoProduct();

?>