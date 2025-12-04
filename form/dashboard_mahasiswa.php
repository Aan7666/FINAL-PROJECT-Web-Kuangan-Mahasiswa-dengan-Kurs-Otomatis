<?php
session_start();
include "db.php";

// Cek apakah mahasiswa sudah login
if (!isset($_SESSION['nim'])) {
    header("Location: login.html");
    exit;
}

$nama = $_SESSION['nama'];
$nim  = $_SESSION['nim'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .sidebar h3 {
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        .content {
            margin-left: 270px;
            padding: 30px;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h3>Mahasiswa</h3>

    <p><strong><?php echo $nama; ?></strong><br>
    NIM: <?php echo $nim; ?></p>

    <a href="dashboard_mahasiswa.php">🏠 Dashboard</a>
    <a href="tagihan.php">📌 Tagihan</a>
    <a href="pembayaran.php">💰 Pembayaran</a>
    <a href="transaksi.php">📄 Riwayat Transaksi</a>
    <a href="kurs.php">💱 Kurs Otomatis</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="content">
    <h2>Dashboard Mahasiswa</h2>
    <p>Selamat datang, <strong><?php echo $nama; ?></strong> 👋</p>

    <div class="row mt-4">

        <!-- Tagihan -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Total Tagihan</h5>
                <h2 class="text-danger">Rp 2.500.000</h2>
                <a href="tagihan.php" class="btn btn-primary mt-2">Lihat Tagihan</a>
            </div>
        </div>

        <!-- Pembayaran -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Pembayaran Terakhir</h5>
                <h2 class="text-success">Rp 1.000.000</h2>
                <a href="pembayaran.php" class="btn btn-success mt-2">Bayar Sekarang</a>
            </div>
        </div>

        <!-- Card Kurs -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Nilai Kurs Hari ini</h5>
                <h2 class="text-primary">$1 = Rp 15.900</h2>
                <a href="kurs.php" class="btn btn-info mt-2">Lihat Detail</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
