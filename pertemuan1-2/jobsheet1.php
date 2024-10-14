<?php

//Instruksi Kerja class Mahasiswa
class Mahasiswa
{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData()
    {
        return "Nama: {$this->nama}, NIM: {$this->nim}, Jurusan: {$this->jurusan}";
    }

    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }

    public function setNim($nimBaru)
    {
        $this->nim = $nimBaru;
    }
}

$mahasiswa1 = new Mahasiswa("Christian Raditya", "230202056", "Informatika");

echo "Data Mahasiswa Awal:\n". "<br>";
echo $mahasiswa1->tampilkanData() . "\n". "<br>";

$mahasiswa1->updateJurusan("Sistem Informasi");

$mahasiswa1->setNim("123456");

echo "Data Mahasiswa Setelah Diperbarui:\n". "<br>";
echo $mahasiswa1->tampilkanData() . "\n". "<br>";

//Tugas class Dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen(){
        return "Nama: {$this->nama}, NIP: {$this->nip}, Mata Kuliah: {$this->mataKuliah}";
    }
}

$dosen1 = new Dosen("Bu Rostika", "12345", "Matematika Diskrit");

echo "\nInformasi Dosen:\n". "<br>";
echo $dosen1->tampilkanDosen() . "\n". "<br>";