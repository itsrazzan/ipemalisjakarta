<?php
// file: public/index.php

$page = $_GET['page'] ?? '';
$action = $_GET['action'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama Organisasi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4">
        // Tailwind CSS cuztomize
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'im-red': '#e83a24',
            'im-yellow': '#fbc02d',
          }
        }
      }
    }
    </script>
    <!-- <link href="output.css" rel="stylesheet"> Path absolut dari root project untuk CSS Tailwind -->

</head>
<body>
<!-- <p class=" text-blue-500 text-3xl ">Halaman Utama</p> -->
    <?php
    // Header selalu dimunculkan
    include __DIR__ . '/../src/views/header.php';

    // Routing sederhana berdasarkan URL
    if ($page === 'members' && $action === 'add') {
        require_once __DIR__ . '/../src/controllers/MemberController.php';
        showAddMemberForm();
    } else if ($page === 'members') {
        require_once __DIR__ . '/../src/controllers/MemberController.php';
        listMembers();
    } else if ($page === "kegiatan") {
        include __DIR__ . '/../src/views/kegiatan.php';
    } else if ($page === 'profil') {
        include __DIR__ . '/../src/views/profil.php';
    } else {
        include __DIR__ . '/../src/views/beranda.php';
    }

    // Footer selalu dimunculkan
    include __DIR__ . '/../src/views/footer.php';
    ?>

</body>
</html>
