<?php 

    include_once "class.php";

    // buat object nya
    $syahrul = new Person();
    $syahrul->nama = "syahrul saleh";

    echo $syahrul->sayHallow("budi");
    echo "<br>";
    echo $syahrul->sayHallow(null);
    echo "<br>";
    echo $syahrul->getInfo();
    echo "<br>";
    echo $syahrul->getinfoYoutube();

?>