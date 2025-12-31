<?php
// file: src/helpers/db.php

function getDbConnection() {
    $config = require __DIR__ . '/../../config/database.php';
    $conn = new mysqli($config['host'], $config['user'], $config['password'], $config['database']);
    if ($conn->connect_error) {
        die('Koneksi gagal: ' . $conn->connect_error);
    }
    return $conn;
}
?>