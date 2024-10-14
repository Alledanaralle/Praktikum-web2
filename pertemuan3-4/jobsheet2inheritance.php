<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    public function tampilkanData() {
        return "Nama: {$this->nama}<br> Mata Kuliah: {$this->mataKuliah}";
    }
}

$dosen1 = new Dosen("Bu Rostika", "Matematika Diskrit");
echo $dosen1->tampilkanData();
