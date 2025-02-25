# Firebase-realtime-db-PHP
Tutorial Implementasi Firebase Realtime Database dengan PHP

# Pre-requisites
## Instalasi Firebase SDK di PHP
1. Instal Composer (jika belum terinstal)

Unduh dan instal Composer dari: [https://getcomposer.org/](https://getcomposer.org/)

2. Instal Firebase SDK untuk PHP

Jalankan perintah berikut di terminal/cmd di direktori proyek PHP Anda: `composer require kreait/firebase-php`

3. Konfigurasi Firebase di PHP

Lihat file **firebase_config.php**

# Firebase Project
1. Buka Firebase Console dan buat proyek baru.
2. Aktifkan Realtime Database → Firebase Console → Build → Realtime Database → Create Database.
3. Pilih Start in test mode agar database bisa diakses tanpa aturan keamanan ketat (bisa diubah nanti).
4. Klik Project Settings > Service Accounts.
5. Klik Generate new private key, unduh file JSON, dan simpan sebagai firebase_credentials.json di direktori proyek PHP.
