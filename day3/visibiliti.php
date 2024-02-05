<?php 

    // buat class mobil
    class Mobil {
        // buat properti 
        protected $nama, 
                    $merek, 
                    $harga, 
                    $kecepatan, 
                    $jumlahPenumpang,
                    $diskon;
        // buat construct
        public function __construct($nama, $merek, $harga, $kecepatan, $jumlahPenumpang)
        {
            $this->nama = $nama;
            $this->merek = $merek;
            $this->harga = $harga;
            $this->kecepatan = $kecepatan;
            $this->jumlahPenumpang = $jumlahPenumpang;
            $this->diskon;
        }

        // buat method harga
        public function getHarga(){
            
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        // buat method get info mobil
        public function getInfoMobil(){
            return "{$this->nama}, {$this->merek}, {$this->jumlahPenumpang}, {$this->kecepatan}, {$this->harga}";
        }
    }

    // buat inheritence mobil sport ke class mobil
    class MobilSport extends Mobil{
        // buat properti 
        protected $updateKecepatan;

        // buat construct
        public function __construct($nama, $merek, $harga, $kecepatan, $jumlahPenumpang)
        {
            parent::__construct($nama, $merek, $harga, $kecepatan, $jumlahPenumpang);
            $this->updateKecepatan = $kecepatan;
        }

        // buat method diskon
        public function setDiskon($inputDiskon){
            return $this->diskon = $inputDiskon;
        }

        // buat method update kecepatan
        public function getUpdateKecepatan() {
            $max = $this->updateKecepatan + 200;
            return $max;
        }

        // buat method get tampil info mobil
        public function getInfoMobil()
        {
            return "Mobil Sport | ".parent::getInfoMobil()." Update Kecepatan : {$this->getUpdateKecepatan()}, Diskon : 50%, Harga Diskon : {$this->getHarga()}";
        }
    }

    // inisialisasi class mobil sport 
    $mobil1 = new MobilSport("Supra", "Toyota", 250000, 500, 4);
    $mobil1->setDiskon(50);

    echo $mobil1->getInfoMobil();

?>