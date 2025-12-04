<?php
session_start();

// Koneksi database
$conn = new mysqli("localhost", "root", "", "web keuangan mahasiswa dengan kurs otomatis");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // Cek admin
    $sql = "SELECT * FROM admin WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password_hash'])) {

            $_SESSION['admin_id']   = $row['id_admin'];
            $_SESSION['admin_name'] = $row['nama'];
            $_SESSION['role']       = $row['role'];

            header("Location: dashboard_admin.php");
            exit;

        } else {
            echo "<script>alert('Password salah'); window.location='login.html';</script>";
        }

    } else {
        echo "<script>alert('Email admin tidak ditemukan'); window.location='login.html';</script>";
    }
}
?>