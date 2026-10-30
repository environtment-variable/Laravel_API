
# Simple E-Commerce RESTful API

RESTful API sederhana untuk platform *e-commerce* yang dibangun menggunakan **Laravel 11**, **Laravel Sanctum** untuk sistem otentikasi token yang aman, dan **PostgreSQL** sebagai sistem manajemen database relasional yang tangguh.

Proyek ini dirancang dengan standar arsitektur backend modern, pemisahan *logic* yang bersih, serta dokumentasi endpoint yang jelas untuk kebutuhan integrasi aplikasi mobile maupun web.

---

## 🚀 Fitur Utama

- **Otentikasi Token Robust:** Sistem registrasi dan login terproteksi menggunakan Laravel Sanctum guna menghasilkan Bearer Token yang aman.
- **Manajemen Produk Terproteksi (CRUD):** Fitur penambahan, pembacaan, pembaruan, dan penghapusan data produk yang hanya dapat diakses oleh pengguna sah (terautentikasi).
- **Arsitektur Laravel 11 Terpusat:** Memanfaatkan efisiensi struktur routing API terbaru dan manajemen *middleware* yang efisien.
- **Keamanan Database Relasional:** Menggunakan skema PostgreSQL dengan validasi *unique data* untuk menjaga integritas data pengguna dan produk.

---

## 🛠️ Persyaratan Sistem

Sebelum menjalankan proyek ini secara lokal, pastikan lingkungan pengembangan Anda telah memenuhi persyaratan berikut:

- PHP >= 8.2
- Composer (Dependency Manager)
- PostgreSQL Database Server
- Driver PHP PostgreSQL (`php-pgsql` / `pdo_pgsql` aktif)

---

## 💻 Cara Instalasi dan Konfigurasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer Anda:

### 1. Kloning Repositori

```bash
git clone https://github.com
cd Laravel_API
```

### 2. Instal Dependensi Composer

```bash
composer install
```

### 3. Konfigurasi Environment File

Salin file contoh konfigurasi `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Buka file `.env` yang baru dibuat menggunakan teks editor Anda, lalu sesuaikan kredensial koneksi database PostgreSQL Anda pada bagian berikut:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=simple_ecommerce_db
DB_USERNAME=username_postgres_anda
DB_PASSWORD=password_postgres_anda
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Jalankan Migrasi Database

Jalankan perintah ini untuk membuat seluruh tabel sistem otentikasi dan tabel produk secara otomatis ke dalam PostgreSQL:

```bash
php artisan migrate
```

### 6. Jalankan Server Lokal

```bash
php artisan serve
```

Aplikasi API Anda sekarang sudah aktif dan dapat diakses melalui alamat lokal: `http://127.0.0.1:8000`

---

## 📡 Dokumentasi Endpoint API

Gunakan *API Client* favorit Anda (seperti Thunder Client atau Postman) dengan menyertakan Header dasar wajib berikut pada setiap request:

- **Accept:** `application/json`

### 1. Jalur Akses Publik (Tanpa Token)

| HTTP Method    | Endpoint          | Deskripsi                                     | Payload (JSON Body)               |
| :------------- | :---------------- | :-------------------------------------------- | :-------------------------------- |
| **POST** | `/api/register` | Mendaftarkan akun developer baru              | `name`, `email`, `password` |
| **POST** | `/api/login`    | Autentikasi akun dan mendapatkan Bearer Token | `email`, `password`           |

### 2. Jalur Akses Terproteksi (Wajib Header: `Authorization: Bearer <token>`)

| HTTP Method         | Endpoint               | Deskripsi                                     | Payload (JSON Body)                                        |
| :------------------ | :--------------------- | :-------------------------------------------- | :--------------------------------------------------------- |
| **GET**       | `/api/products`      | Mengambil seluruh daftar produk dari database | *None*                                                   |
| **POST**      | `/api/products`      | Menambahkan produk baru ke database           | `name`, `description`, `price`, `stock`            |
| **GET**       | `/api/products/{id}` | Melihat informasi detail satu produk spesifik | *None*                                                   |
| **PUT/PATCH** | `/api/products/{id}` | Memperbarui informasi data produk tertentu    | `name`, `description`, `price`, `stock` (Opsional) |
| **DELETE**    | `/api/products/{id}` | Menghapus data produk secara permanen         | *None*                                                   |

---

## 📝 Contoh Respons Payload (JSON)

### Respons Sukses Login (`200 OK`)

```json
{
  "message": "Login sukses",
  "access_token": "1|qnXyZ...kunci_token_panjang...",
  "token_type": "Bearer"
}
```

### Respons Sukses Tambah Produk (`201 Created`)

```json
{
  "id": 1,
  "name": "Logitech G Pro X Superlight",
  "description": "Mouse gaming wireless ultra ringan pilihan atlet esport.",
  "price": "1900000.00",
  "stock": 5,
  "created_at": "2026-10-31T02:00:00.000000Z",
  "updated_at": "2026-10-31T02:00:00.000000Z"
}
```
