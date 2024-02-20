<?php 

    // belajar static
    // buat class mahasiswa
    class Mahasiswa {
        // buat properti yang ada static nya
        private static $nama = "nama", $umur = 26, $jurusan = "jurusan";

        // buat method getter dan setter propertinya

        public static function getNama() {
            return self::$nama = "Syahrul Saleh";
        }
        public static function getUmur()  {
            return self::$umur = 26;
        }

        public static function getJurusan() {
            return self::$jurusan = "Teknik Informatika";
        }

    }

    // panggil static nya
    echo Mahasiswa::getNama();
    echo "<br>";


?>