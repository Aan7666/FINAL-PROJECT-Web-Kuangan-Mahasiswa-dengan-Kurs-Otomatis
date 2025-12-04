<?php
session_start();
include "db.php";

$email    = trim($_POST['email']);
$password = trim($_POST['password']);


$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE email='$email'");
$data = mysqli_fetch_assoc($sql);


if (!$data) {
    echo "
    <script>
        alert('Email tidak ditemukan!');
        window.location.href = 'login.html';
    </script>
    ";
    exit;
}


if (password_verify($password, $data['password'])) {


    $_SESSION['nim']  = $data['nim'];
    $_SESSION['nama'] = $data['nama'];

    echo "
    <script>
        alert('Login Berhasil!');
        window.location.href = 'dashboard_mahasiswa.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Password salah!');
        window.location.href = 'login.html';
    </script>
    ";
}
?>
