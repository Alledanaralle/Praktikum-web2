# PHP OOP Jobsheet 1

Proyek ini merupakan implementasi dari jobsheet Praktikum Pemrograman Web II yang berfokus pada penggunaan konsep Kelas dan Objek dalam PHP.

## Deskripsi Proyek

Proyek ini bertujuan untuk mendemonstrasikan pemahaman dan implementasi konsep Pemrograman Berorientasi Objek (OOP) dalam PHP. Fokus utama adalah pada pembuatan kelas, instansiasi objek, penggunaan konstruktor, serta implementasi dan pemanggilan metode.

## Implementasi Kelas

### Kelas Mahasiswa

Kelas `Mahasiswa` memiliki atribut dan metode sebagai berikut:

- Atribut:
  - `$nama`: Nama mahasiswa
  - `$nim`: Nomor Induk Mahasiswa
  - `$jurusan`: Jurusan mahasiswa

- Metode:
  - `__construct()`: Konstruktor untuk menginisialisasi atribut
  - `tampilkanData()`: Menampilkan data mahasiswa
  - `updateJurusan()`: Mengubah jurusan mahasiswa
  - `setNim()`: Mengubah NIM mahasiswa

### Kelas Dosen

Kelas `Dosen` memiliki atribut dan metode sebagai berikut:

- Atribut:
  - `$nama`: Nama dosen
  - `$nip`: Nomor Induk Pegawai
  - `$mataKuliah`: Mata kuliah yang diampu

- Metode:
  - `__construct()`: Konstruktor untuk menginisialisasi atribut
  - `tampilkanDosen()`: Menampilkan informasi dosen

## Penggunaan

1. Instansiasi objek `Mahasiswa`:
   ```php
   $mahasiswa1 = new Mahasiswa("Christian Raditya", "230202056", "Informatika");
   ```

2. Menampilkan data mahasiswa:
   ```php
   echo $mahasiswa1->tampilkanData();
   ```

3. Mengubah jurusan mahasiswa:
   ```php
   $mahasiswa1->updateJurusan("Sistem Informasi");
   ```

4. Mengubah NIM mahasiswa:
   ```php
   $mahasiswa1->setNim("123456");
   ```

5. Instansiasi objek `Dosen`:
   ```php
   $dosen1 = new Dosen("Bu Rostika", "12345", "Matematika Diskrit");
   ```

6. Menampilkan informasi dosen:
   ```php
   echo $dosen1->tampilkanDosen();
   ```

## Hasil Output

Berikut adalah contoh output yang dihasilkan dari eksekusi kode:

![image](https://github.com/user-attachments/assets/56adc163-8ff9-4b8d-bc54-9992cc131ebc)

Output ini menunjukkan bahwa kelas dan metode yang diimplementasikan berfungsi sebagaimana mestinya, termasuk kemampuan untuk memperbarui data dan menampilkan informasi yang diperbarui.
