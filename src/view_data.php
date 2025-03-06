<?php
require 'firebase_config.php';

// Ambil data dari "users"
$users = $database->getReference('users')->getValue();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
</head>
<body>
    <h2>Daftar User</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Usia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($users): ?>
                <?php foreach ($users as $id => $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['age']) ?></td>
                        <td>
                            <a href="update_data.php?id=<?= $id ?>">Edit</a> |
                            <a href="delete_data.php?id=<?= $id ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">Tidak ada data.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="insert.php">Tambah User Baru</a>
</body>
</html>
