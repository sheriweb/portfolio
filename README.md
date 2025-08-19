<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🌐 Portfolio Website (Laravel + Filament + Livewire)

This is a **portfolio CMS website** built with **Laravel, Filament, and Livewire**.  
It allows you to showcase articles, services, projects, and team members in a fully manageable way with a modern admin panel (Filament).

---

## 🚀 Tech Stack

- **Backend**: [Laravel 11](https://laravel.com)
- **Admin Panel**: [Filament](https://filamentphp.com)
- **Frontend Interactivity**: [Livewire](https://laravel-livewire.com)
- **UI Styling**: [TailwindCSS](https://tailwindcss.com)
- **Database**: MySQL / PostgreSQL
- **Deployment Ready**: Works with Forge, Vapor, Docker

---

## ✨ Features

- **Articles** – Publish blog posts with categories, author, images, and full content.
- **Categories** – Organize content into relevant categories.
- **FAQ Section** – Manage frequently asked questions dynamically.
- **Pages** – Create static pages like About, Contact, Services, etc.
- **Services** – Add your professional services with details and icons.
- **Team Members** – Showcase your team with social links and images.
- **Filament Admin Panel** – Easy-to-use backend to manage all content.
- **Livewire Components** – Real-time UI without writing JavaScript.
- **Responsive Design** – Optimized for desktop and mobile.

---

## ⚙️ Installation

Clone the repository:

```bash
git clone https://github.com/sheriweb/portfolio.git
cd portfolio

composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan serve
```
