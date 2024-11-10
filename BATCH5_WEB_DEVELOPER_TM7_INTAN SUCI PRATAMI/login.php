<?php
session_start();
require 'koneksi.php';

$error = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email dan password cocok dengan admin
    if ($email === 'admin@gmail.com' && $password === 'admin123') {
        // Jika cocok, buat session untuk admin
        $_SESSION['user'] = ['email' => $email, 'role' => 'admin']; // Simpan data admin ke session
        $_SESSION['success'] = "Login berhasil! Selamat datang, " . htmlspecialchars($email) . "!"; // Simpan pesan sukses
        header("Location: index.php");
        exit();
    } else {
        // Jika tidak cocok, tampilkan pesan error
        $error = "Email atau Password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f4f4f4;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            max-width: 400px; /* Ukuran box */
            margin: 0 auto;
            padding: 40px; /* Padding dalam box */
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: smaller;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            padding: 7px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            padding: 7px;
            margin-bottom: 20px;
            background-color: #f9b347;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
        }

        .alert {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .taut {
            text-align: center;
            margin-top: 10px; /* Mengatur jarak atas untuk tautan */
        }

        .taut p {
            font-size: 14px;
            color: #666;
            margin: 5px 0; /* Mengurangi jarak pada paragraf */
        }

        .taut a {
            text-decoration: none;
            color: #f9b347;
        }

        .taut a:hover {
            color: #f9e09a;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Login</h2>
        <?php if (isset($error)) : ?>
            <div class="alert"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <button type="submit" name="submit">Login</button>

            <div class="taut">
                <p>
                    Belum punya akun? <br />
                    <a href="register.php">Daftar sekarang!</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
