<?php 

    // cara buat const

    // cara pertama
    define("NAMA", "Syahrul saleh");

    echo NAMA;
    echo "<br>";
    
    // cara kedua
    const JURUSAN = "Teknik Informatika";
    echo JURUSAN;
    echo "<br>";

    // buat const di dalam class 

    class Coba {
        const UMUR = 26;
    }

    // inisialisasi class
    $def = new Coba();
    // cara pemanggilannya sama kyk static
    echo Coba::UMUR;


?>