<?php 

    // belajar buat method __constract

    class Person {
        const PENULIS = "SukaNgodingAja";
        var ?string $nama;
        var string $alamat;

        // buat method __construct
        function __construct($nama, $alamat)
        {
            $this->nama = $nama;
            $this->alamat = $alamat;
        }

        // buat methid get info
        function getInfo(?string $nama) {
            if (is_null($nama)) {
                echo "halo, perkenalkan saya {$this->nama}, saya tinggal di {$this->alamat}";
            }else {
                echo "halo $nama, perkenalkan saya {$this->nama}, saya tinggal di {$this->alamat} ";
            }
        }

        // buat methot get penulis
        function getPenulis() {
            echo "Penulis = ". self::PENULIS;
        }

        // buat method dis
        function __destruct()
        {
            echo "nama {$this->nama} telah di hapus";
            echo "<br>";
        }
    }

    // buat object ddari class person
    $syahrul = new Person("Syahrul saleh", "jln Abdesir");
    echo $syahrul->getInfo("ayu");
    echo "<br>";
    echo $syahrul->getPenulis();
    
    echo "<br>";
    echo "<br>";

    $rian = new Person("Rian", "jln antang raya");
    echo $rian->getInfo(null);
    echo "<br>";
    echo $syahrul->getPenulis();
    
    echo "<br>";
    echo "program selesai";
    echo "<br>";

?>