<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $minat = $_POST['minat'];

    // Menyimpan data ke dalam array
    $data = [
        'nama' => $nama,
        'email' => $email,
        'jenis_kelamin' => $jenis_kelamin,
        'minat' => $minat,
    ];

    // Menampilkan data yang telah disimpan
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    // Redirect ke halaman notifikasi registrasi berhasil
    header("Location: notifikasi.php");
    exit();
}
?>