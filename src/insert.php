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

<form method="POST">
    <input type="text" name="name" placeholder="Nama" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="age" name="age" placeholder="Age" required>
    <button type="submit">Simpan</button>
</form>
