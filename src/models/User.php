<?php

require_once __DIR__ . '/../helpers/db.php';
//tambah user baru
function addUser($member_id, $username, $hash_password) {
    $conn = getDbConnection();
    $stmt = $conn->prepare("INSERT INTO users (member_id, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $member_id, $username, $hash_password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>