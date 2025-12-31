<?php
// file: src/models/Member.php

require_once __DIR__ . '/../helpers/db.php';

//tampilkan semua data member
function getAllMembers() {
    $conn = getDbConnection();
    $result = $conn->query("SELECT * FROM members ORDER BY created_at DESC");
    $members = [];
    while ($row = $result->fetch_assoc()) {
        $members[] = $row;
    }
    $conn->close();
    return $members;
}

//tambah member baru
function addMember($nama, $email, $universitas, $alamat, $telepon) {
    $conn = getDbConnection();
    $stmt = $conn->prepare("INSERT INTO members (nama, email, universitas, alamat, telepon) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $email, $universitas, $alamat, $telepon);
    $stmt->execute();
    $id = $stmt->insert_id;
    $stmt->close();
    $conn->close();
    return $id; // kembalikan id member baru

}

?>