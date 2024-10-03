# Sistem Buku Tamu dan Login Sederhana

Proyek ini adalah sistem sederhana yang mengelola login dan buku tamu menggunakan **PHP** tanpa database. Data tamu disimpan secara lokal dalam file teks (`tamu.txt`). Aplikasi ini memiliki halaman login, buku tamu, dan dashboard untuk menampilkan data tamu yang sudah diisi.

## Fitur Utama
1. **Login Sistem dengan Session**:
   - Pengguna dapat login menggunakan username dan password.
   - Sistem menggunakan session untuk menjaga pengguna tetap login di halaman yang memerlukan autentikasi.
   
2. **Form Buku Tamu dengan Validasi**:
   - Pengguna dapat mengisi nama, email, dan komentar melalui form yang divalidasi secara sederhana.
   
3. **Sistem Penyimpanan Data Lokal**:
   - Data yang diinput dari form buku tamu disimpan dalam file teks lokal (`tamu.txt`).

4. **Dashboard**:
   - Setelah login, pengguna dapat mengisi buku tamu atau melihat data tamu yang sudah diinput oleh pengguna lain.


## Persyaratan
- **PHP** versi 7.4 atau lebih baru.
- Tidak memerlukan database karena data disimpan dalam file teks.

## Cara Menginstal dan Menjalankan Proyek Secara Lokal

### 1. **Unduh atau Clone Repository**
```bash
git clone https://github.com/username/repository-name.git
```

### 3. Jalankan PHP Built-in Server
Arahkan ke direktori proyek dan jalankan server PHP bawaan.

Salin kode
```
cd /path/to/project-root
php -S localhost:8000
```
memakai php path lokal

### 4. Akses Aplikasi di Browser
Setelah server berjalan, buka browser dan akses aplikasi melalui:

Salin kode
http://localhost:8000/pages/index.php

## Pengembang

Proyek ini dikembangkan oleh ```danangfir```. Untuk pertanyaan atau saran, Anda bisa menghubungi saya di [].