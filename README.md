# Projek Web Kuliah Semester 4 Web Programming✨

Dalam proyek ini, saya mengembangkan sebuah website toko online dengan melakukan riset mendalam terhadap toko kopi yang sudah ada, yaitu Kopi Kila yang berlokasi di Jalan Jatiwarna, Bekasi. Riset ini mencakup analisis terhadap model bisnis, sistem penjualan, dan fitur-fitur yang ditawarkan oleh Kopi Kila.

## 💻 Demo Website
![kopi kila github](https://github.com/user-attachments/assets/e9177316-aa35-4817-85b3-51d9a6f7fd37)

[![Tonton di YouTube](https://img.shields.io/badge/Tonton%20di%20YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=wdxuAd8G5-I)

## 🚀 Tech Stack Used
- HTML, CSS, Javascript
- Bootstrap
- PHP, CodeIgniter 3

## 📝 Panduan Instalasi

### Prasyarat

- **PHP 7.x atau lebih baru**
- **Web Server Apache**
- **MySQL Database Server**

---

### Langkah-langkah Instalasi

#### 1. Clone atau Download Repositori:

**Clone repositori:**

```bash
git clone https://github.com/auliyaapri/Projek-Web-Kuliah-Semester-4.git
cd Projek-Web-Kuliah-Semester-4
```

**Atau download repositori sebagai file ZIP dan ekstrak:**

```bash
cd path/to/extracted-folder
```

---

#### 2. Ubah nama direktori proyek:

Pindahkan folder proyek ke dalam direktori **xampp/htdocs** atau sejenisnya:

```bash
mv Projek-Web-Kuliah-Semester-4 kopi_kila
cd kopi_kila
```

---

#### 3. Buat Basis Data:

- Buat basis data baru di server MySQL Anda dengan nama **`kopi_kila`**.

---

#### 4. Import Basis Data:

- Import file SQL **`kopi_kila.sql`** yang disediakan ke dalam basis data MySQL Anda. Pastikan file ini berada di direktori yang sesuai di komputer Anda.

- Gunakan terminal atau alat seperti phpMyAdmin untuk mengimpor:

```bash
mysql -u your-username -p kopi_kila < path/to/kopi_kila.sql
```

- Jika menggunakan phpMyAdmin, unggah file SQL tersebut melalui antarmuka import.

---

#### 5. Konfigurasi Aplikasi:

- Perbarui konfigurasi basis data di **`application/config/database.php`**:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'your-username',
    'password' => 'your-password',
    'database' => 'kopi_kila',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

---

#### 6. Jalankan Aplikasi:

- Mulai server Apache Anda.
- Buka browser, lalu navigasikan ke **[http://localhost/kopi_kila](http://localhost/kopi_kila)** atau sesuai dengan konfigurasi yang Anda gunakan.

---


