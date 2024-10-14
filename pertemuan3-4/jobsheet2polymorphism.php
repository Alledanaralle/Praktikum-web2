<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
        return "Akses fitur dasar";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        return parent::aksesFitur() . " dan fitur penilaian";
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return parent::aksesFitur() . " dan fitur pendaftaran mata kuliah";
    }
}

$dosen = new Dosen("Bu Rostika");
$mahasiswa = new Mahasiswa("Christian Raditya Danaralle");

echo "Dosen: " . $dosen->aksesFitur() . "<br>";
echo "Mahasiswa: " . $mahasiswa->aksesFitur();
