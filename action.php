<?php
    require 'koneksi.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama_lengkap = $_POST['nama_lengkap'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenisKelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $pesan_kesan = $_POST['pesan_kesan'];

        $sql ="INSERT INTO `mahasiswa` (`nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `prodi`, `fakultas`, `pesan_kesan`)
        VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$no_hp', '$prodi', '$fakultas', '$pesan_kesan')";

        if (mysqli_query($conn, $sql)) {
            echo "Data Berhasil Dimasukkan";
        };
        header("Location: Index.php");

        mysqli_close($conn);
    };
?>