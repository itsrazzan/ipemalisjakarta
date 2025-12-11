<?php 
// File: src/views/templates/header.php
// Pastikan variabel $data['title'] tersedia dari Controller

// Tentukan BASE_URL. Ini sangat penting untuk navigasi
// Asumsi proyek berada di http://localhost/MVC_TEST/
// Jika proyek Anda di root (http://localhost/), BASE_URL = ''
// Jika di subfolder (http://localhost/MVC_TEST/), BASE_URL = '/MVC_TEST'
// Anda harus mendefinisikan ini di public/index.php dan menyediakannya di $data
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['title']); ?></title>
    <!-- <link rel="stylesheet" href="<?php echo $data['BASE_URL']; ?>/css/style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding-top: 60px; } /* Padding top untuk navbar tetap */
        .navbar { 
            background-color: #007bff; /* Warna biru untuk identitas */
            overflow: hidden; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed; /* Membuat navbar tetap di atas */
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a { 
            float: left; 
            display: block; 
            color: white; 
            text-align: center; 
            padding: 18px 20px; 
            text-decoration: none; 
            font-weight: 500;
            transition: background-color 0.3s;
        }
        .navbar a:hover { 
            background-color: #0056b3; 
        }
        .container { 
            padding: 20px; 
            max-width: 1000px;
            margin: auto;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <a href="<?php echo $BASE_URL; ?>/">IPEMALIS</a>
    <a href="<?php echo $BASE_URL; ?>/home">Home</a>
    <a href="<?php echo $BASE_URL; ?>/profile">Profile</a>
    <a href="<?php echo $BASE_URL; ?>/activities">Kegiatan</a>
    <a href="<?php echo $BASE_URL; ?>/team">Tim</a>
    
    <a href="<?php echo $BASE_URL; ?>/account/login" style="float: right;">Login</a>
</nav>

<div class="container">