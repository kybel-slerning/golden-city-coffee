<div align="center">

# GOLDEN CITY COFFEE

**Aplikasi manajemen kafe Laravel 12**  
*Built by a 19-year-old ex-barista who left corruption behind*

[![Laravel](https://img.shields.io/badge/Laravel-12-red?logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-orange)](https://php.net)
[![Fedora](https://img.shields.io/badge/Fedora-43-blue)](#)

</div>

---

## Abyss Layer 1: Menu Kopi

- [x] Lihat daftar kopi  
- [ ] Tambah, edit, hapus kopi  
- [ ] Sistem order & laporan harian  

---

## Tech Stack

| Tech | Version |
|------|---------|
| Laravel | 12.x |
| PHP | 8.2+ |
| Database | MariaDB |
| OS | Fedora 43 XFCE |

---

## How to Run

```bash
git clone https://github.com/kybel-slerning/golden-city-coffee.git
cd golden-city-coffee
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
