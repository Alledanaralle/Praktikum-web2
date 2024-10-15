# Proyek Implementasi OOP PHP

Proyek ini mendemonstrasikan implementasi konsep Object-Oriented Programming (OOP) dalam PHP, mencakup Inheritance, Polymorphism, Encapsulation, dan Abstraction. Proyek ini dibuat sebagai bagian dari tugas Praktikum Pemrograman Web II.

## Struktur Proyek

Proyek ini terdiri dari beberapa kelas yang merepresentasikan entitas dalam lingkungan akademik:

- `Person`: Kelas abstrak dasar
- `Dosen`: Kelas turunan dari Person
- `Mahasiswa`: Kelas turunan dari Person
- `Jurnal`: Kelas abstrak untuk representasi jurnal
- `JurnalDosen`: Kelas turunan dari Jurnal
- `JurnalMahasiswa`: Kelas turunan dari Jurnal

## Penerapan Konsep OOP

### 1. Inheritance

Inheritance diterapkan melalui penggunaan kelas dasar `Person` yang diwariskan ke kelas `Dosen` dan `Mahasiswa`.

```php
abstract class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function getRole();
}

class Dosen extends Person {
    // ...
}

class Mahasiswa extends Person {
    // ...
}
```

### 2. Polymorphism

Polymorphism ditunjukkan melalui implementasi metode `getRole()` yang berbeda di kelas `Dosen` dan `Mahasiswa`.

```php
class Dosen extends Person {
    public function getRole() {
        return "Dosen";
    }
}

class Mahasiswa extends Person {
    public function getRole() {
        return "Mahasiswa";
    }
}
```

### 3. Encapsulation

Encapsulation diterapkan dengan membuat properti `nidn` pada kelas `Dosen` dan `nim` pada kelas `Mahasiswa` sebagai private.

```php
class Dosen extends Person {
    private $nidn;

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}
```

### 4. Abstraction

Abstraction diimplementasikan melalui penggunaan kelas abstrak `Jurnal`.

```php
abstract class Jurnal {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    abstract public function submit();
}
```

## Cara Penggunaan dan Output

Berikut adalah contoh penggunaan kelas-kelas yang telah dibuat beserta outputnya:

```php
<?php
// Penggunaan
$dosen = new Dosen("Bu Rostika", "12345678");
$mahasiswa = new Mahasiswa("Christian Raditya Danaralle", "230202056");

$jurnalDosen = new JurnalDosen("Matematika Diskrit", $dosen, "Pendidikan");
$jurnalMahasiswa = new JurnalMahasiswa("Object Oriented Programming", $mahasiswa, "Teknik Informatika");

echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . "<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . "<br>";

echo $jurnalDosen->submit() . "<br>";
echo $jurnalMahasiswa->submit() . "<br>";
```

Output:

![image](https://github.com/user-attachments/assets/4a1d2523-f524-4be4-bf6e-8dc8e80b03a9)


## Penjelasan Output

1. Baris pertama dan kedua menunjukkan penggunaan metode `getName()` dan `getRole()` yang diwarisi dari kelas `Person`. Ini mendemonstrasikan inheritance dan polymorphism, di mana `getRole()` memberikan hasil yang berbeda untuk `Dosen` dan `Mahasiswa`.

2. Baris ketiga dan keempat menunjukkan hasil dari metode `submit()` yang diimplementasikan secara berbeda di `JurnalDosen` dan `JurnalMahasiswa`. Ini juga mendemonstrasikan polymorphism.

3. Penggunaan NIDN dan NIM dalam output menunjukkan encapsulation, di mana data ini diakses melalui metode getter yang telah didefinisikan.

4. Keseluruhan struktur menunjukkan abstraction, di mana kelas abstrak `Jurnal` mendefinisikan kerangka umum yang kemudian diimplementasikan secara spesifik oleh `JurnalDosen` dan `JurnalMahasiswa`.

## Kesimpulan

Proyek ini berhasil mendemonstrasikan penerapan konsep-konsep utama OOP dalam PHP. Melalui penggunaan inheritance, polymorphism, encapsulation, dan abstraction, kode menjadi lebih terstruktur, mudah dipahami, dan dapat dikelola dengan baik. Output yang dihasilkan menunjukkan bagaimana setiap konsep OOP berkontribusi pada fungsionalitas dan fleksibilitas sistem.
