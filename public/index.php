<!DOCTYPE html>
<html>
<head>
    <title>CRUD Firebase</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="../src/insert.php" method="POST">
        <input type="text" name="name" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Tambah</button>
    </form>
    <h2>Lihat Data</h2>
    <a href="../src/view_data.php">Lihat Semua Data</a>
</body>
</html>
