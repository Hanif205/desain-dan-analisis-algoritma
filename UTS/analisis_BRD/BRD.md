# **Dokumen Persyaratan Bisnis (BRD)**  
## **Proyek: Tema Data Fakultas**  
**Versi**: 1.2  
**Tanggal**: 11 November 2024  

---

## **1. Tujuan Proyek**

### Objektif  
Aplikasi ini bertujuan untuk mempermudah pengelolaan data fakultas, yang meliputi informasi tentang departemen, dosen, mahasiswa, mata kuliah, dan status ketersediaan mahasiswa. Admin dapat menambah, mengubah, dan menghapus data fakultas, sementara mahasiswa dapat melihat status mereka dan informasi terkait mata kuliah.

---

## **2. Fitur Utama**

### **Untuk Mahasiswa**
- **Melihat Data Fakultas**: Mahasiswa dapat melihat data terkait fakultas, seperti:
  - Departemen tempat mereka terdaftar
  - Dosen pengajar
  - Mata kuliah yang diambil
  - Status ketersediaan mahasiswa (misalnya, aktif atau tidak aktif)

### **Untuk Admin**
- **Pengelolaan Data Fakultas**: Admin dapat menambah, mengubah, dan menghapus data fakultas yang mencakup:
  - Departemen
  - Dosen
  - Mahasiswa
  - Mata Kuliah
  - Status Ketersediaan Mahasiswa

---

## **3. Persyaratan Fungsional**

### **Sistem Login**
- **Akses Berdasarkan Peran**: Mahasiswa dan admin memiliki hak akses berbeda:
  - **Admin**: Dapat mengelola semua data fakultas, termasuk menambah, mengubah, dan menghapus data.
  - **Mahasiswa**: Hanya dapat melihat data yang relevan dengan status mereka.

### **Pengaturan & Tampilan Data Fakultas**
- **Admin**: Dapat mengelola data fakultas (input, update, delete).
- **Mahasiswa**: Dapat melihat data fakultas yang relevan dengan informasi mereka, namun tidak memiliki akses untuk mengubah data.

---

## **4. Persyaratan Non-Fungsional**

### **Kegunaan**
- Antarmuka harus mudah digunakan oleh mahasiswa dan admin, dengan desain yang intuitif dan responsif.

### **Keamanan**
- **Pengelolaan Data**: Hanya admin yang dapat mengelola data fakultas.
- **Akses Mahasiswa**: Mahasiswa hanya dapat melihat informasi yang relevan dengan peran mereka.

---

## **5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat**

### **Model: Fakultas**
Model ini digunakan untuk menyimpan informasi terkait fakultas, seperti departemen, dosen, mahasiswa, mata kuliah, dan status ketersediaan mahasiswa.

#### Atribut:
- **id**: `bigint UNSIGNED` (Primary Key)
- **Departemen**: `string` - Nama departemen.
- **Dosen**: `string` - Nama dosen pengajar.
- **Mahasiswa**: `string` - Nama mahasiswa yang terdaftar.
- **MataKuliah**: `string` - Nama mata kuliah yang diambil.
- **availability**: `string` - Status ketersediaan mahasiswa (misalnya, 'Aktif' atau 'Tidak Aktif').
- **created_at**: `timestamp` - Waktu data dibuat.
- **updated_at**: `timestamp` - Waktu data diperbarui.

---

## **6. Analisis Permissions untuk Mahasiswa dan Admin**

Pada aplikasi ini, **permissions** diperlukan untuk membatasi akses mahasiswa terhadap fitur yang sesuai dengan peran mereka, sementara admin memiliki akses penuh untuk mengelola data fakultas.

### **Permissions yang Diperlukan**
- **Admin**: Memiliki akses penuh untuk menambah, mengubah, dan menghapus data fakultas.
- **Mahasiswa**: Memiliki hak terbatas, hanya dapat melihat data yang relevan dengan status mereka, tanpa hak untuk mengubah atau menghapus data.

### **Permissions untuk Mahasiswa**
- **view_fakultas**: Mengizinkan mahasiswa untuk melihat informasi fakultas yang terkait dengan mereka.
- **view_any_fakultas**: Mengizinkan mahasiswa untuk melihat semua data fakultas yang tersedia, namun hanya dengan status mereka yang relevan.

---

## **7. Implementasi Model dan Seeder untuk Permissions**

### **Model: Permission**
Model **Permission** disediakan oleh paket **Spatie Laravel Permission** untuk mengelola permissions. Berikut adalah contoh penggunaan model `Permission` untuk membuat permission yang diperlukan untuk aplikasi ini.

### **Seeder: PermissionsSeeder**
Seeder **PermissionsSeeder** akan digunakan untuk membuat dan menetapkan permissions kepada **role mahasiswa**, memungkinkan mereka mengakses informasi fakultas sesuai dengan hak yang ditentukan.

