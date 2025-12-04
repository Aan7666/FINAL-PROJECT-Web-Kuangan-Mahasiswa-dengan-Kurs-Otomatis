<?php
include "db.php";

$nim      = $_POST['nim'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$jurusan  = $_POST['jurusan'];
$semester = $_POST['semester'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$check = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim='$nim'");
if (mysqli_num_rows($check) > 0) {

    echo "
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial;
            background-image: url('IMG_2057.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 350px;
            padding: 25px;
            text-align: center;
            background: rgba(214, 214, 214, 0.57);
            border: 2px solid red;
            border-radius: 12px;
            backdrop-filter: blur(5px);
        }
    </style>

    <div class='box'>
        <h2 style='color:red;'>Gagal!</h2>
        <p>NIM sudah terdaftar.</p>
        <a href='register.html' style='color:red; text-decoration: underline;'>Kembali ke halaman register</a>
    </div>
    ";

    exit;
}

$sql = "INSERT INTO mahasiswa (nim, nama, email, jurusan, semester, password)
        VALUES ('$nim', '$nama', '$email', '$jurusan', '$semester', '$password')";

if (mysqli_query($conn, $sql)) {

    echo "
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial;
            background-image: url('IMG_2057.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 380px;
            padding: 25px;
            text-align: center;
            background: rgba(255, 255, 255, 0.3);
            border: 2px solid #28a745;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            color: #fff;
        }
        h2 {
            color: #0f0;
            margin-bottom: 10px;
        }
    </style>

    <div class='box'>
        <h2>Daftar Berhasil!</h2>
        <p>Anda akan dialihkan ke halaman login...</p>
    </div>

    <script>
        setTimeout(function(){
            window.location.href = 'login.html';
        }, 3000);
    </script>
    ";

} else {
    echo "Error: " . mysqli_error($conn);
}
?>
