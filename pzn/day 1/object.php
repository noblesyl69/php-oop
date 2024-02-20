<?php 

    // cara buat object dari class person

    include_once "class.php";

    $person1 = new Person();
    // cara memanipulasi object atau mengubah data propertis
    $person1->nama = "syahrul". PHP_EOL;
    $person1->alamat = "jln abdesir". PHP_EOL;
    $person1->kota = "makassar". PHP_EOL;

    echo "{$person1->nama} | {$person1->alamat} | {$person1->kota}"

?>