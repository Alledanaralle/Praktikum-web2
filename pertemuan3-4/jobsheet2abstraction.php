<?php
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function aksesFitur();
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen {$this->nama} mengakses fitur penilaian";
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa {$this->nama} mengakses fitur pendaftaran mata kuliah";
    }
}

$dosen = new Dosen("Bu Rostika");
$mahasiswa = new Mahasiswa("Christian Raditya");

echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur();
