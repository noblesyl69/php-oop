<?php 

    include_once "App/init.php";

    // inisialilasi namespace
    use App\Product\Komik as productKomik;

    $product1 = new productKomik("Naruto", "Masasi", "Shonen Jump", 50000, 50);
    $product1->setDiskon(50);
    $product1->setType("Komik");

    echo $product1->getInfoProduct();

?>