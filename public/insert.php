<?php
require 'firebase_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $newPostRef = $database->getReference('users')->push([
        'name' => $name,
        'email' => $email,
        'age' => $age
    ]);

    echo "Data berhasil disimpan!";
}
?>

<h2>Tambah Data</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Nama" required><br/>
    <input type="email" name="email" placeholder="Email" required><br/>
    <input type="age" name="age" placeholder="Age" required><br/>
    <button type="submit">Tambah</button>
</form>
<h2>Lihat Data</h2>
<a href="view_data.php">Lihat Semua Data</a>