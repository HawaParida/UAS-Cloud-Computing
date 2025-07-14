<?php
$host = 'db'; // gunakan nama service database di docker-compose
$user = 'kasiruser'; // user sesuai environment MariaDB
$pass = 'kasirpass'; // password sesuai environment MariaDB
$db   = 'kasirdb';

$dbconnect = new mysqli($host, $user, $pass, $db);

if ($dbconnect->connect_error) {
    echo 'Koneksi gagal -> ' . $dbconnect->connect_error;
    exit;
}
