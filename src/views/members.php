<!-- file: src/views/members.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Universitas</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tanggal Gabung</th>
        </tr>
        <?php foreach($members as $member): ?>
        <tr>
            <td><?= htmlspecialchars($member['nama']) ?></td>
            <td><?= htmlspecialchars($member['email']) ?></td>
            <td><?= htmlspecialchars($member['universitas']) ?></td>
            <td><?= htmlspecialchars($member['alamat']) ?></td>
            <td><?= htmlspecialchars($member['telepon']) ?></td>
            <td><?= htmlspecialchars($member['created_at']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
