<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body>
    <!-- Form tambah/edit member + user -->
<form method="POST" action="">
    <label>Nama Lengkap :</label> <br>
    <input type="text" name="nama" required><br>
    <label>Email:</label> <br>
    <input type="email" name="email" required><br>
    <label>Universitas:</label><br>
    <input type="text" name="universitas"><br>
    <label>Alamat:</label><br>
    <input type="text" name="alamat"><br>
    <label>Telepon:</label><br>
    <input type="text" name="telepon"><br>
    <hr>
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>

</body>
</html>