# 📦 Vshop – Sistem Gudang Produk

Vshop adalah aplikasi manajemen gudang berbasis web yang dibuat dengan Laravel (backend) dan Vue 3 (frontend), menggunakan Tailwind CSS dan Flowbite untuk antarmuka pengguna. Aplikasi ini bertujuan untuk membantu perusahaan mencatat dan mengelola produk yang dijual, termasuk informasi stok, harga, status publikasi, dan lainnya.

---

## 🚀 Fitur Utama

- [x]✅ Manajemen Produk: Tambah, edit, hapus produk
- [x]📦 Manajemen Stok: Update jumlah stok, status in-stock / out-of-stock
- [x]💰 Manajemen Harga: Atur dan ubah harga jual produk
- [ ]📢 Status Publikasi: Tandai produk sebagai published / draft
- [x]🖼️ Upload Gambar Produk
- [ ]🔍 Pencarian dan filter produk
- [ ]📊 Dashboard ringkasan stok dan statistik produk
- [x]🔐 Autentikasi pengguna (Login & Register)

---

## 🧰 Teknologi yang Digunakan

### Backend
- [Laravel 12+](https://laravel.com/)
- RESTful API
- Laravel Inertia 

### Frontend
- [Vue 3 (Composition API)](https://vuejs.org/)
- [Vite](https://vitejs.dev/) (bundler modern)
- [Tailwind CSS](https://tailwindcss.com/)
- [Flowbite](https://flowbite.com/) (komponen UI berbasis Tailwind)
- [Vue Router](https://router.vuejs.org/) (navigasi halaman)

---

## 📦 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/anharsaja/vshop.git
cd vshop


cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve


cd frontend  # jika frontend dipisah
npm install
npm run dev

php artisan storage:link
```

## 📁 Struktur Direktori (Singkat)

```plaintext
vshop/
├── app/            # Laravel backend
├── public/
├── resources/
│   └── js/         # Vue frontend
├── routes/
│   └── api.php     # API routes
├── frontend/       # (jika frontend dipisah)
└── ...


```
👥 Kontributor
Saya hehe – Developer utama 😄
---

📌 Catatan
Proyek ini masih dalam tahap pengembangan. Feedback dan kontribusi sangat diterima!


---

Kalau kamu punya struktur frontend terpisah (misalnya folder `frontend` untuk Vue), bisa disesuaikan. Tapi kalau frontend-nya langsung di `resources/js`, tinggal hapus bagian `cd frontend`.

