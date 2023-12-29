<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hairloss';

$db = new mysqli($host, $username, $password, $database);

if ($db->connect_error) {
    die("Koneksi database gagal: " . $db->connect_error);
}
?>