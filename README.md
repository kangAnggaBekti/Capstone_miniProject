# WANGKAS

Aplikasi pendataan uang kas dibuat dengan Framework Laravel 10. Dengan sistem pembayaran kas sekali selama seminggu. Aplikasi ini cocok untuk digunakan untuk di sekolah atau masing masing kelas. <br>

Beberapa CRUD menggunakan modal dan AJAX untuk pengambilan data agar mengurangi penggunaan pindah halaman. Dan seluruh menu menggunakan DataTable Server Side Processing.

### Prasyarat

Berikut beberapa hal yang perlu diinstal terlebih dahulu:

-   Composer (https://getcomposer.org/)
-   PHP ^10.0
-   MySQL ^15
-   XAMPP


### Fitur

-   CRUD Data User
-   CRUD Data Buku
-   CRUD Data Kategori
-   CRUD Data Peminjaman Buku
-   CRUD Data Pengembalian Buku
-   2 Role User Dasboard

### Langkah-langkah instalasi

-   Clone repository ini

```

-   Install seluruh packages yang dibutuhkan

```bashx`
composer install
```

-   Siapkan database dan atur file .env sesuai dengan konfigurasi Anda
-   Ubah value APP_NAME= pada file .env menjadi nama aplikasi yang anda inginkan
-   Ubah nama db dalam env file menjadi perpus_DB
-   Export backup database dalam folder Database Backup

```bash
php artisan optimize
```

```bash
php artisan key:generate
```

-   Jalankan local server

```bash
php artisan serve
```
-   Akses ke halaman

```
http://127.0.0.1:8000
```

---

-   User default aplikasi untuk login

##### Administrator

```
Email       : admin@mail.com
Password    : secret
```
##### Anggota

```
Email       : anggota@mail.com
Password    : secret
```