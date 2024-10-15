<?php

$host = 'localhost'; 
$user = 'root';      
$password = '';    
$dbname = 'biodata mahasiswa'; 
$koneksi = mysqli_connect(hostname: $host, username: $user, password: $password, database: $dbname);

$conn = new mysqli($host, $user, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . $conn->connect_error);
} 


?>
