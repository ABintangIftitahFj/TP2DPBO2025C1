Janji
Saya A Bintang Iftitah FJ dengan NIM 2305995 mengerjakan soal Tugas Praktikum 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin


DIAGRAM PROGRAM
![diagram_tp2](https://github.com/user-attachments/assets/19fce52a-6ff9-48d2-a54a-e3a1ed73592c)

Program Desain
  Pada program ini memiliki 3 kelas yaitu : Petshop,Aksesoris, dan Baju. Class Petshop merupakan class parent utama yang membagikan atribut kepada 2 anaknya Aksesoris dan Baju sehingga 2 class ini bisa menggunakan atribut dari class Petshop yang sifatnya private. Program ini menggunakan methods setter getter di setiap kelasnya. Pada program ini methods addData dan showData berada pada file Main utamanya. Program dapat menerima inputan untuk addData dan user dapat melihat datanya dalam tabel yang dinamis mengikuti len terpanjang masing - masing atribut. Method mencari len terpanjang berada pada Main utama. 
  Pada PHP user bisa memasukkan data secara dinamis,dengan mentode post dan get sementara user bisa memasukkan gambar dengan metode choose file dari directory.
  Pada setiap kode program sudah terdapat sudah terdapat 5 data dummy hardcode. Berikut penjelasan class dan dokumentasinya.


Class Petshop -> Main Parrent
Atribut :
1. id bertipe integer user bebas melakukan setting id nya tidak merupakan increment otomatis
2. nama_produk bertipe string untuk menyimpan nama produk
3. harga_produk bertipe integer untuk menyimpan harga produk
4. stok_produk bertipe integer untuk menyimpan stok_produk
5. foto_produk bertipe jpg hanya terdapat pada program PHP

Class Aksesoris -> dapat mengakses class Petshop
1. jenis_produk bertipe string untuk menyimpan jenis_aksesoris
2. bahan_produk bertipe string untuk menyimpan informasi bahan_produk
3. warna_produk bertipe string untuk menyimpan informasi warna produk

class Baju -> dapat mengakses kedua kelas lainnya
1. size bertipe string untuk menyimpan ukuran
2. merk bertipe string menyimpan merk dari pakaian

DOKUMENTASI PROGRAM
Pada program Java, Python dan CPP memiliki alur sama  , namun pada CPP metode constructor nya berbeda karena parameter nya tidak semua atribut dari kelas sebelumnya , sehingga pada saat memasukkan data hardcode menjadi lebih panjang, jika concern pada memory allocation metode construct ini seperti kurang bagus untuk digunakan. Pada 3 bahasa ini data disimpan dalam list of object. Pada php data disimpan dalam post dan get temporary.

apa yang bisa dilakukan user ?
1. user dapat memasukkann data sebanyak n buah dan mengisi semua atribut pada class yang ada
2. user dapat melihat data yang telah dimasukkan pada tabel yang di desain dinamis
3. exit untuk keluar dari program

Berikut hasil dokumetasi program berupa gambar :

A.CPP
![proof_1](https://github.com/user-attachments/assets/971a9810-6635-43b5-8cb9-30bf2055df59) || ![Proof_2](https://github.com/user-attachments/assets/a6e1e519-73bb-4d52-b430-33584c64f272)

B.Python
![proof_1](https://github.com/user-attachments/assets/40aa16f8-b8d7-4c91-9089-f2b79fbaac98)
![proof_2](https://github.com/user-attachments/assets/20e06762-3300-42e1-94b3-32b91f0be4e0)

C. Java
![proof1](https://github.com/user-attachments/assets/8dbde20e-379b-4466-9d81-03bd0dd16b79)
![proof2](https://github.com/user-attachments/assets/2ffd5419-8237-4142-8c2d-c0d31b80c730)

D.PHP
![proof_1](https://github.com/user-attachments/assets/c9fae818-f648-40b9-a895-b5b2d28909ee)
![proof_2](https://github.com/user-attachments/assets/dad89b67-964e-4933-be55-c20b2f0d2e2d)
![Proof_3](https://github.com/user-attachments/assets/6fc21fd9-5dc9-416c-a55e-23378ddb7176)


TERIMAKASIH 







