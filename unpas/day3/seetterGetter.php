<?php 

    // membuat setter dan getter

    // buat class mobil
    class Mobil {
        // buat propertinya
        private $nama, $merek, $warna, $kecepatan, $jumlahPenumpang, $harga, $diskon;
        protected $type;

        // buat contruct nya
        public function __construct($nama, $merek, $warna, $kecepatan, $jumlahPenumpang, $harga)
        {
            $this->nama = $nama;
            $this->merek = $merek;
            $this->warna = $warna;
            $this->kecepatan = $kecepatan;
            $this->jumlahPenumpang = $jumlahPenumpang;
            $this->harga = $harga;
        }

        // buat getter properti
        // getter kecepatan
        public function getKecepatan() {
            return $this->kecepatan;
        }

        // buat method get info dasar
        public function getInfoDasar() {
            return "{$this->nama}, {$this->merek}, {$this->warna}";
        }

        // buat method diskon = ini adalah getter
        public function getDiskon($diskon){
            return $this->diskon = $diskon;
        }

        // buat method harga dari diskon ini adalah setter
        public function setHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        // buat method get infoProductMobil
        public function getInfoProductMobil() {
            return "{$this->getInfoDasar()}, {$this->kecepatan}, {$this->jumlahPenumpang}, Harga Awal: {$this->harga}, Harga setelah di diskon : {$this->setHarga()}";
        }
    }

    // buat class turunan mobil
    class MobilSport extends Mobil{
        // buat properti 
        private $tambahKecepatan;
        
        // buat contruct
        public function __construct($nama, $merek, $warna, $kecepatan, $jumlahPenumpang, $harga)
        {
            // buat overriding 
            parent::__construct($nama, $merek, $warna, $kecepatan, $jumlahPenumpang, $harga);
           
        }

        // buat method set tambah kecepeatan
        public function setUpdateKecepatan($tambahKecepatan){
            return $this->tambahKecepatan = $tambahKecepatan;
        }

        // set method update tambah kecepatan
        public function getUpdateKecepatan(){
            return $this->setUpdateKecepatan(200) + $this->getKecepatan();
        }

        // buat method get tipe mobil
        public function setTypeMobil() {
            return $this->type = "Mobil Sport ";
        }

        // buat method tambilkan semua info
        public function getInfoProductMobil()
        {
            return "{$this->setTypeMobil()} | ". parent::getInfoProductMobil() . " Max Kecepatan : {$this->getUpdateKecepatan()}";
        }
    }



    // inisialisasi class mobil menjadi object
    $mobil1 = new MobilSport("Supra", "Toyota", "Hitam", 1000, 2, 2000000);
    $mobil1->getDiskon(50);
    echo $mobil1->getInfoProductMobil();

?>