# 🎓 Sistem Informasi Data Mahasiswa (Simple CRUD)

![PHP](https://img.shields.io/badge/PHP-7.4%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

Aplikasi berbasis web sederhana untuk pengelolaan data mahasiswa. Proyek ini dibuat untuk mendemonstrasikan operasi **CRUD** (Create, Read, Update, Delete) menggunakan PHP Native dan database MySQL.

---

## 📸 Tampilan Aplikasi
![alt text](https://github.com/tanzil45/crud_kampus/blob/main/Tampilan%20Aplikasi.png?raw=true)
## ✨ Fitur Utama
* **Create:** Menambahkan data mahasiswa baru (NIM, Nama, Prodi).
* **Read:** Menampilkan daftar mahasiswa dalam tabel yang rapi.
* **Update:** Mengedit data mahasiswa yang sudah tersimpan.
* **Delete:** Menghapus data dengan konfirmasi keamanan (*alert dialog*).
* **Responsive:** Tampilan rapi di HP dan Laptop berkat **Bootstrap 5**.

## 🛠️ Struktur Database
Aplikasi ini menggunakan database `db_kampus` dengan tabel `mahasiswa`.

| Kolom | Tipe Data | Keterangan |
| :--- | :--- | :--- |
| `id` | INT(11) | Primary Key, Auto Increment |
| `nim` | VARCHAR(20) | Nomor Induk Mahasiswa |
| `nama` | VARCHAR(100)| Nama Lengkap |
| `prodi`| VARCHAR(50) | Program Studi |

## 🚀 Cara Instalasi & Menjalankan

### 1. Persiapan Folder
Clone repository ini ke dalam folder `htdocs` (jika menggunakan XAMPP).

```bash
cd C:/xampp/htdocs/
git clone [https://github.com/tanzil45/crud_kampus.git](https://github.com/tanzil45/crud_kampus.git)
