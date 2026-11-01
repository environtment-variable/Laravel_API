
# 🚀 Commercial-Grade Laravel REST API & SaaS Starter Kit (V1)

Boilerplate RESTful API kelas komersial yang dibangun menggunakan **Laravel 11**, **Laravel Sanctum**, dan **PostgreSQL**. Dirancang dengan standar arsitektur modern untuk fondasi aplikasi SaaS, Web, maupun Mobile.

---

## 📌 Fitur Utama & Arsitektur

- **API Versioning Architecture (V1):** Pemisahan rute terisolasi berbasis `/api/v1/`.
- **Standardized API Response Trait:** Format respons JSON yang seragam (`status`, `message`, `data`, `errors`).
- **Authentication & Token Management:** Registrasi dan login terproteksi via Laravel Sanctum.
- **Global Force JSON Middleware:** Mengunci format respons agar selalu berupa JSON.

---

## 📂 Struktur Direktori & Dokumentasi Lengkap

Struktur topologi direktori secara lengkap serta contoh payload dan respons JSON secara utuh dapat disesuaikan pada implementasi standar repositori profesional.

---

## 🛠️ Persyaratan Sistem & Instalasi Ringkas

### Persyaratan

- PHP >= 8.2, Composer, dan PostgreSQL.

### Cara Instalasi Singkat

1. Kloning repositori: `git clone https://github.com`
2. Masuk direktori dan instal dependensi: `cd Laravel_API && composer install`
3. Salin konfigurasi dan generate key: `cp .env.example .env && php artisan key:generate`
4. Jalankan migrasi dan server lokal: `php artisan migrate && php artisan serve`
