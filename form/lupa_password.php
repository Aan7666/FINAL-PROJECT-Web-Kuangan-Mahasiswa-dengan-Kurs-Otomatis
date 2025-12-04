<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4 rounded-4" style="width: 350px;">
        <h4 class="text-center mb-3">Lupa Password</h4>
        <p class="text-muted text-center mb-4">Masukkan email kamu untuk reset password</p>

        <form action="proses_lupa_password.php" method="POST" >
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email kamu" required>
                <label for="email">Masukkan Email</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 rounded-4">Kirim Link Reset</button>

            <div class="text-center mt-3">
                <a href="login.php" class="text-decoration-none">Kembali ke Login</a>
            </div>
        </form>
    </div>

</body>
</html>