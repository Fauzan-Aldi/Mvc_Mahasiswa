# Sistem Manajemen Data Mahasiswa

Aplikasi web sederhana untuk mengelola data mahasiswa menggunakan arsitektur MVC (Model-View-Controller) dengan PHP.

## Fitur

- **CRUD Operations**: Create, Read, Update, Delete data mahasiswa
- **Responsive Design**: Tampilan yang responsif untuk berbagai ukuran layar
- **MVC Architecture**: Struktur kode yang terorganisir dengan pola MVC
- **Form Validation**: Validasi input pada sisi client dan server
- **Clean UI**: Interface yang bersih dan mudah digunakan

## Struktur Proyek

\`\`\`
├── config.php              # Konfigurasi database
├── index.php               # Entry point aplikasi
├── models/
│   └── Mahasiswa.php       # Model untuk data mahasiswa
├── controllers/
│   └── MahasiswaController.php # Controller untuk logika bisnis
├── views/
│   ├── layout/
│   │   ├── header.php      # Template header
│   │   └── footer.php      # Template footer
│   └── mahasiswa/
│       ├── index.php       # Halaman daftar mahasiswa
│       ├── create.php      # Form tambah mahasiswa
│       ├── edit.php        # Form edit mahasiswa
│       └── show.php        # Detail mahasiswa
├── assets/
│   └── style.css           # File CSS
├── database.sql            # Script database
└── README.md               # Dokumentasi
\`\`\`

## Instalasi

1. **Setup Database**
   - Buat database MySQL baru
   - Import file `database.sql`
   - Sesuaikan konfigurasi database di `config.php`

2. **Konfigurasi**
   \`\`\`php
   // config.php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'mahasiswa_db');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   \`\`\`

3. **Jalankan Aplikasi**
   - Pastikan web server (Apache/Nginx) dan PHP sudah terinstall
   - Akses aplikasi melalui browser

## Penggunaan

### Menambah Mahasiswa
1. Klik tombol "Tambah Mahasiswa Baru"
2. Isi form dengan data lengkap
3. Klik "Simpan"

### Melihat Data Mahasiswa
- Semua data mahasiswa ditampilkan dalam tabel di halaman utama
- Klik "Lihat" untuk melihat detail mahasiswa

### Mengedit Data
1. Klik tombol "Edit" pada data yang ingin diubah
2. Ubah data sesuai kebutuhan
3. Klik "Update"

### Menghapus Data
1. Klik tombol "Hapus" pada data yang ingin dihapus
2. Konfirmasi penghapusan

## Teknologi yang Digunakan

- **PHP**: Bahasa pemrograman server-side
- **MySQL**: Database management system
- **HTML/CSS**: Frontend markup dan styling
- **JavaScript**: Interaksi client-side
- **PDO**: PHP Data Objects untuk koneksi database

## Keamanan

- Input sanitization untuk mencegah XSS
- Prepared statements untuk mencegah SQL injection
- Validasi data pada sisi server dan client

## Kontribusi

Silakan buat pull request atau laporkan bug melalui issues.
