## Book Management System

## Deskripsi Proyek

Aplikasi Book Management System dirancang dengan alur sederhana: User → Dashboard → List Buku → Tambah / Edit / Hapus / Detail Buku. Setiap use case CRUD diimplementasikan melalui BookController dan route books.

Dalam aplikasi ini pengguna dapat melakukan pengelolaan data buku secara lengkap. Fitur yang tersedia meliputi:
•	Melihat daftar buku 
•	Menambahkan buku baru
•	Mengubah data buku
•	Melihat detail buku 
•	Serta menghapus data buku

Database yang digunakan pada aplikasi ini adalah MySQL, dengan beberapa tipe data utama yang digunakan pada tabel books. Tipe data tersebut disesuaikan dengan jenis informasi yang disimpan. Contohnya:
•	String (VARCHAR) digunakan untuk menyimpan data berupa teks seperti judul buku (title), nama penulis (author), dan kategori buku (category).
•	Integer digunakan untuk menyimpan data berupa angka seperti tahun terbit buku (year).
•	Selain itu, Laravel juga secara otomatis menambahkan timestamp yaitu created_at dan updated_at untuk mencatat waktu data dibuat dan diperbarui.

MySQL merupakan sistem manajemen basis data relasional (Relational Database Management System / RDBMS) yang digunakan untuk menyimpan data dalam bentuk tabel. Pada proyek ini, database db_book_mgmt berfungsi sebagai tempat penyimpanan seluruh informasi buku yang dikelola oleh aplikasi.

# Cara Menjalankan Project

Berikut langkah-langkah untuk menjalankan aplikasi ini di komputer (Windows).

## 1. Persiapan Software

Pastikan beberapa software berikut sudah terinstall di komputer:

* XAMPP (untuk menjalankan Apache dan MySQL)
* PHP
* Composer
* Visual Studio Code (atau code editor lainnya)
* Git (opsional, untuk clone repository)

# 2. Menjalankan Server Lokal

Buka **XAMPP Control Panel**, kemudian jalankan:

**Apache**
**MySQL**
Pastikan keduanya dalam kondisi **Running**.

# 3. Clone atau Download Project

Jika project diambil dari GitHub, jalankan perintah berikut di terminal:
git clone https://github.com/gitashantidewi/Book_Management.git

Kemudian masuk ke folder project:
cd Book_Management
Jika project sudah ada di komputer, cukup buka folder project tersebut menggunakan Visual Studio Code.

# 4. Install Dependency Laravel

Buka terminal di dalam folder project lalu jalankan:
composer install
Perintah ini akan menginstall semua dependency Laravel yang dibutuhkan.

# 5. Konfigurasi File Environment

Salin file konfigurasi environment:
copy .env.example .env
Kemudian generate application key:
php artisan key:generate

# 6. Konfigurasi Database

Buka file `.env`, lalu ubah konfigurasi database sesuai dengan pengaturan MySQL di XAMPP:

DB_DATABASE=db_book_mgmt
DB_USERNAME=root
DB_PASSWORD=

# 7. Membuat Database

Buka browser kemudian akses:
http://localhost/phpmyadmin
Buat database baru dengan nama:
db_book_mgmt

# 8. Migrasi Database

Setelah database dibuat, jalankan perintah di terminal:
php artisan migrate
Perintah ini akan membuat semua tabel yang dibutuhkan oleh aplikasi.

# 9. Menjalankan Aplikasi

Untuk menjalankan server Laravel, gunakan perintah:
php artisan serve
Setelah server berjalan, aplikasi dapat diakses melalui browser pada alamat:
http://127.0.0.1:8000

# 10. Login ke Aplikasi

Gunakan akun admin yang telah dibuat sebelumnya:

Email:admin@gmail.com
Password:12345678

# Teknologi yang Digunakan

* Laravel
* PHP
* MySQL
* XAMPP
* Composer
* Git & GitHub


