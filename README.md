# Laporan Akhir Projek
# Pengembangan Sistem Berorientasi Objek

--------------------------------

## Sistem Pendataan Paket Mahasiswa PPKU IPB University - P1 - Kelompok 2
### Deskripsi Sistem
Sistem pendataan paket/barang masuk dibuat dengan tujuan mempermudah mahasiswa PPKU dan petugas paket di asrama PPKU dalam mengelola barang/paket. Sistem aplikasi ini akan menerima input resi barang dari mahasiswa, yang terhubung langsung dengan database sistem. Dalam membantu proses sistem ini, akan ada aturan tambahan dimana mahasiswa harus mencantumkan NIM pada alamat yang ditulis pada paket. NIM ini akan digunakan oleh petugas untuk melakukan pengecekan kepemilikan barang. Mahasiswa akan mendapat notifikasi melalui aplikasi apabila petugas sudah mengubah status barang pada sistem. 

### User Stories
“Sebagai mahasiswa PPKU yang tinggal di asrama, saya ingin dapat mengetahui status barang pesanan saya melalui aplikasi, sehingga saya tidak perlu bolak-balik melakukan pengecekan apakah barang tersebut sudah dapat diambil di gudang penyimpanan paket asrama atau belum.” **— Mahasiswa PPKU**

“Sebagai penerima paket barang mahasiswa PPKU, saya ingin lebih mudah dalam mengelola paket masuk, sehingga saya dapat mempersingkat waktu yang dibutuhkan untuk mengatur dan menyusun paket.” **— Petugas Pengelola Paket Asrama PPKU**

### Lingkungan Pengembangan
#### Software
- Visual Studio Code
- Figma
- Google Chrome

#### Hardware
- Processor Intel i5-5200U @ 2.20Ghz
- Memory 8GB RAM
- VGA Nvidia Geforce 940M
- Harddisk 1TB

#### Technology Stack
- Framework: Laravel
- PHP
- MySQL

### Konsep OOP yang digunakan
Konsep OOP yang kami gunakan antara lain yaitu Inheritance dan Abstraction. Pada implementasi, kami menggunakan konsep Inheritance dengan kelas 'user' sebagai parent dan kelas 'admin' serta 'mahasiswa' sebagai childnya. Untuk Abstraction sendiri

### Tipe desain pengembangan yang digunakan
Tipe desain yang

### Hasil dan Pembahasan
-------------------------
#### _Use case diagram_
![use case diagram](https://user-images.githubusercontent.com/60083980/122014318-3e3a1500-cde9-11eb-8db3-13c1e488a0ae.png)

#### _Activity diagram_
- __Mahasiswa__ <br><br>
![mahasiswa login](https://user-images.githubusercontent.com/60083980/122015042-f36ccd00-cde9-11eb-9133-45f3e907c58d.png)
![mahasiswa input resi](https://user-images.githubusercontent.com/60083980/122015062-f5cf2700-cde9-11eb-9ae6-64d1dc5080eb.png)
![mahasiswa lihat list barang](https://user-images.githubusercontent.com/60083980/122015054-f5369080-cde9-11eb-80e7-39a836967484.png)
![mahasiswa lihat status barang](https://user-images.githubusercontent.com/60083980/122015134-067f9d00-cdea-11eb-952c-d412ba2dab18.png)

- __Petugas Paket Asrama PPKU__ <br><br>
![petugas lihat data](https://user-images.githubusercontent.com/60084300/122013478-69703480-cde8-11eb-97fe-bb338cd6aeb0.png)
![petugas edit data](https://user-images.githubusercontent.com/60084300/122013473-68d79e00-cde8-11eb-9c73-7454870f6704.png)
![petugas update](https://user-images.githubusercontent.com/60084300/122013469-683f0780-cde8-11eb-9256-f32501cec9fb.png)
![petugas notifikasi](https://user-images.githubusercontent.com/60084300/122013464-67a67100-cde8-11eb-8efa-672b907b52ba.png)


#### _Class diagram_
![class](https://user-images.githubusercontent.com/60083980/122013861-cbc93500-cde8-11eb-926a-d053fa29a4eb.png)

#### _Entity relationship diagram_
![erd](https://user-images.githubusercontent.com/60083980/122013747-accaa300-cde8-11eb-93d7-5732fb156db5.png)

#### Arsitektur sistem
Sistem kami menggunakan arsitektur MVC (Model View Controller). MVC adalah gabungan dari 3 sub direktori yakni model, view dan controller. ini ditandakan bahwa laravel sudah menerapkan konsep mvc dalam memisahkan logic-logic program agar lebih teratur dan mudah dikembangakan suatu saat.
##### Model
Model merupakan presentasi dari sebuah objek atau terdiri dari objek-objek terstruktur, yang mana tiap objek memiliki fungsi tersendiri sesuai kebutuhan. 

##### View
View merupakan bagian yang menangani presentasion logic yang berfungsi untuk menerima dan mempresentasikan data kepada user.

##### Controller
Controller merupakan bagian yang mengatur hubungan antara bagian model dan bagian view yang berfungsi untuk menerima request dan data dari user kemudian menentukan apa yang akan diproses oleh aplikasi.    

#### Fungsi utama yang dikembangkan

#### Fungsi CRUD
1. Create: Membuat daftar paket barang mahasiswa
2. Read: Membaca List paket barang mahasiswa
3. Update: Melakukan edit terhadap paket barang mahasiswa terutama untuk mengubah statu penerimaan paket
4. Delete: Menghapus paket barang mahasiswa

### Hasil Implementasi
#### User
- Halaman Utama
![image](https://user-images.githubusercontent.com/56018683/122151711-354d5000-ce8a-11eb-80d6-3078d5d11642.png)

- Tambah Paket
![image](https://user-images.githubusercontent.com/56018683/122151744-439b6c00-ce8a-11eb-833d-e7d21a000531.png)

- Detail Paket
![image](https://user-images.githubusercontent.com/56018683/122151767-501fc480-ce8a-11eb-8212-4ef02601aa21.png)

#### Admin
- Halaman Utama
![image](https://user-images.githubusercontent.com/56018683/122151843-780f2800-ce8a-11eb-9e5b-d72d5b4a42b2.png)

### Saran untuk pengembangan selanjutnya
Aplikasi yang kami kembangkan masih memiliki kekurangan, oleh karena itu perlu adanya proses pengembangan lebih lanjut sehingga aplikasi ini dapat digunakan dengan lebih baik. Kami menyarankan adanya pengembangan untuk mengimplementasikan fitur notifikasi yang ditujukan untuk mahasiswa, selain itu juga melakukan deployment terhadap aplikasi ini. Saran untuk pengembangan lanjutan ini tentu tidak terbatas hanya dengan apa yang sudah disebutkan sebelumnya dan segala bentuk pengembangan/pembaruan yang dapat meningkatkan fungsi dari aplikasi ini akan dipertimbangkan.

### Developer dan job description
---------------------
**Nama**|**NIM**|**Job Desc**|
:-----:|:-----:|:-----:
Muhammad Habibullah|G64180003|System Analyst|
Ervina Maharani|G64180011|UI/UX designer|
Aqshal Deandra Vandaru|G64180020|Front-End|
Khairunnisa|G64180050|Back-End|
Riyad Firdaus|G64180089|Front-End|

