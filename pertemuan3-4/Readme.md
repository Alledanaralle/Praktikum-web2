# Proyek OOP PHP Jobsheet 2

Proyek ini mendemonstrasikan implementasi prinsip-prinsip Pemrograman Berorientasi Objek (OOP) dalam PHP. Proyek ini mencakup konsep-konsep berikut:

1. Membuat Kelas dan Objek
2. Enkapsulasi
3. Pewarisan
4. Polimorfisme
5. Abstraksi

## 1. Kelas dan Objek

### Kode

```php
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: {$this->nama}, NIM: {$this->nim}, Jurusan: {$this->jurusan}";
    }
}

// Instansiasi objek
$mahasiswa1 = new Mahasiswa("Christian Raditya Danaralle", "230202056", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>
```

### Penjelasan

Pada langkah ini, kita membuat kelas `Mahasiswa` dengan atribut `nama`, `nim`, dan `jurusan`. Metode `tampilkanData()` menampilkan informasi mahasiswa. Kemudian kita membuat instansi objek dari kelas `Mahasiswa` dan menampilkan datanya.

### Output

```
Nama: Christian Raditya Danaralle, NIM: 230202056, Jurusan: Teknik Informatika
```

## 2. Enkapsulasi

### Kode

```php
<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: {$this->nama}, NIM: {$this->nim}, Jurusan: {$this->jurusan}";
    }
}

$mahasiswa1 = new Mahasiswa("Christian Raditya Danaralle", "230202056", "Teknik Informatika");
echo $mahasiswa1->tampilkanData() . "<br>";

$mahasiswa1->setNama("Alledanaralle");
echo "Nama setelah diubah: " . $mahasiswa1->getNama();
?>
```

### Penjelasan

Kita memodifikasi kelas `Mahasiswa` dengan membuat atributnya menjadi private dan menyediakan metode getter dan setter untuk setiap atribut. Ini mendemonstrasikan enkapsulasi dengan mengontrol akses ke keadaan internal kelas.

### Output

```
Nama: Christian Raditya Danaralle, NIM: 230202056, Jurusan: Teknik Informatika
Nama setelah diubah: Alledanaralle
```

## 3. Inheritance

### Kode

```php
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
        return "Nama: {$this->nama}, Mata Kuliah: {$this->mataKuliah}";
    }
}

$dosen1 = new Dosen("Bu Rostika", "Matematika Diskrit");
echo $dosen1->tampilkanData();
?>
```

### Penjelasan

Kita membuat kelas dasar `Pengguna` dan kelas `Dosen` yang mewarisi darinya. Kelas `Dosen` menambahkan atribut `mataKuliah` dan menimpa metode `tampilkanData()`.

### Output

```
Nama: Bu Rostika, Mata Kuliah: Matematika Diskrit
```

## 4. Polimorfisme

### Kode

```php
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
?>
```

### Penjelasan

Kita mengimplementasikan polimorfisme dengan membuat kelas dasar `Pengguna` dengan metode `aksesFitur()`, yang kemudian ditimpa di kelas `Dosen` dan `Mahasiswa` untuk memberikan implementasi yang berbeda.

### Output

```
Dosen: Akses fitur dasar dan fitur penilaian
Mahasiswa: Akses fitur dasar dan fitur pendaftaran mata kuliah
```

## 5. Abstraksi

### Kode

```php
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
?>
```

### Penjelasan

Kita membuat kelas abstrak `Pengguna` dengan metode abstrak `aksesFitur()`. Kelas `Dosen` dan `Mahasiswa` kemudian mengimplementasikan metode abstrak ini, mendemonstrasikan abstraksi.

### Output

```
Dosen Bu Rostika mengakses fitur penilaian
Mahasiswa Christian Raditya mengakses fitur pendaftaran mata kuliah
```
