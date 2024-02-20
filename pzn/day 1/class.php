<?php 

    // day 1 belajar oop programmer zaman now 

    // buat class 
    class Person {
        // buat variabel const
        const AUTOR = "SukaNgodingAja";
        const YOUTUBE = "@sukangodingaja";
        

        var $nama, $alamat, $kota;

        // buat method
        //  tanda tnya artiny boleh null
        function sayHallow(?string $nama){
            // cek nama
            if (is_null($nama)) {
                // this cara mengakses object yang sama
                echo "hay, my name is {$this->nama}". PHP_EOL;
            }else {
                echo "hay $nama, my name is {$this->nama}". PHP_EOL ;
            }
        }

        // buat method get info
        function getInfo() {
            // self cara mengakses class yang sama
            echo "Author = ". self::AUTOR; 
        }

        function getinfoYoutube() {
            // cara memanggil const menggunakan class
            echo "Youtube : ". Person::YOUTUBE;
        }
    }

?>