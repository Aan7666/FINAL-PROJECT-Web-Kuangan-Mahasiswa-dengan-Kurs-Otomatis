<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== "admin") {
    header("Location: login.php");
    exit;
}

$adminName = $_SESSION['admin_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body { font-family: Arial; background: #f0f4ff; padding: 20px; }
        .box { background: white; padding: 20px; border-radius: 10px; width: 400px; margin: auto; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { color: #1e40af; }
        a { text-decoration: none; display: block; margin-top: 20px; }
        .logout { color: red; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, <b><?= $adminName; ?></b></p>

    <hr>

    <p><a href="kelola_mahasiswa.php">Kelola Data Mahasiswa</a></p>
    <p><a href="kelola_tagihan.php">Kelola Tagihan</a></p>
    <p><a href="kelola_transaksi.php">Kelola Transaksi</a></p>
    <p><a href="kurs_rate.php">Kurs Otomatis</a></p>

    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>
