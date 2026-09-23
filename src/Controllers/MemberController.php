<?php
// file: src/controllers/MemberController.php

require_once __DIR__ . '/../models/Member.php';
require_once __DIR__ . '/../models/User.php';

function showAddMemberForm() {
    include __DIR__ . '/../views/form_member.php'; // Tampilkan form dengan field kosong
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Simpan data member
    $member_id = addMember(
        $_POST['nama'], $_POST['email'], $_POST['universitas'], $_POST['alamat'], $_POST['telepon']
    );

    // Hash password untuk keamanan
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Simpan data user (username, password, member_id)
    addUser(
        $member_id,
        $_POST['username'],
        $hashedPassword
    );

    echo "<p>Data berhasil disimpan!</p>";
}

//ambil semua data member untuk ditampilkan
$members = getAllMembers();
include __DIR__ . '/../views/members.php';





?>