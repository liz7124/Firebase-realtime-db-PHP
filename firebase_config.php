<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

// Konfigurasi Firebase (Ganti dengan file JSON yang diunduh dari Firebase)
$factory = (new Factory)
    ->withServiceAccount(__DIR__ . '/firebase_credentials.json') // Ganti dengan file JSON Firebase Anda
    ->withDatabaseUri('https://your-database-url.firebaseio.com/'); // Ganti dengan URL database Anda

$database = $factory->createDatabase();
?>
