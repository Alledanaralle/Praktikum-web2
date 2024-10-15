<?php

//Kelas Parent Person
abstract class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function getRole();
}

//Kelas Dosen
class Dosen extends Person
{
    private $nidn;

    public function __construct($name, $nidn)
    {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNidn()
    {
        return $this->nidn;
    }

    public function setNidn($nidn)
    {
        $this->nidn = $nidn;
    }

    public function getRole()
    {
        return "Dosen";
    }
}

//Kelas Mahasiswa
class Mahasiswa extends Person
{
    private $nim;

    public function __construct($name, $nim)
    {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getRole()
    {
        return "Mahasiswa";
    }
}

//Kelas abstract Jurnal 
abstract class Jurnal
{
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    abstract public function submit();
}

class JurnalDosen extends Jurnal
{
    private $kategori;

    public function __construct($judul, Dosen $penulis, $kategori)
    {
        parent::__construct($judul, $penulis);
        $this->kategori = $kategori;
    }

    public function submit()
    {
        return "Jurnal Dosen '{$this->judul}' oleh {$this->penulis->getName()} (NIDN: {$this->penulis->getNidn()}) dalam kategori {$this->kategori} telah diajukan.";
    }
}

class JurnalMahasiswa extends Jurnal
{
    private $programStudi;

    public function __construct($judul, Mahasiswa $penulis, $programStudi)
    {
        parent::__construct($judul, $penulis);
        $this->programStudi = $programStudi;
    }

    public function submit()
    {
        return "Jurnal Mahasiswa '{$this->judul}' oleh {$this->penulis->getName()} (NIM: {$this->penulis->getNim()}) dari Program Studi {$this->programStudi} telah diajukan.";
    }
}

$dosen = new Dosen("Bu Rostika", "12345678");
$mahasiswa = new Mahasiswa("Christian Raditya Danaralle", "230202056");

$jurnalDosen = new JurnalDosen("Matematika Diskrit", $dosen, "Pendidikan");
$jurnalMahasiswa = new JurnalMahasiswa("Object Oriented Programming", $mahasiswa, "Teknik Informatika");

echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . "<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . "<br>";

echo $jurnalDosen->submit() . "<br>";
echo $jurnalMahasiswa->submit() . "<br>";
