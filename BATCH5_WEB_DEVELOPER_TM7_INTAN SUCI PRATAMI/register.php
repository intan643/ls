<?php
session_start();
require 'koneksi.php'; // Koneksi ke database

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $role = ($_POST['role'] == 'admin') ? 1 : (($_POST['role'] == 'peserta') ? 2 : 3); // Mengubah role menjadi angka

    // Handle upload foto
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $foto = $target_file;
    } else {
        echo "Error uploading file.";
        exit;
    }

    try {
        // Query untuk menyimpan data registrasi
        $query = "INSERT INTO user (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, no_telp, email, password, foto, role) 
                  VALUES (:nama, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :alamat, :no_telp, :email, :password, :foto, :role)";
        $stmt = $conn->prepare($query);

        // Bind parameter
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':jenis_kelamin', $jenis_kelamin);
        $stmt->bindParam(':tempat_lahir', $tempat_lahir);
        $stmt->bindParam(':tanggal_lahir', $tanggal_lahir);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':no_telp', $no_telp);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':role', $role);

        // Eksekusi query
        if ($stmt->execute()) {
            header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
            exit();
        } else {
            echo "<div class='alert'>Registrasi gagal. Silakan coba lagi.</div>";
        }
    } catch (PDOException $e) {
        echo "Registrasi gagal: " . $e->getMessage();
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
    <link rel="icon" type="image/png" href="images/icon.png" alt=""/>
    <title>Insightify</title>
    <style>
        body {
            background-color: #f4f4f4;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
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
        input[type="date"],
        input[type="file"],
        select,
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
            margin-bottom: 10px;
            margin-top: 10px;
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
        }

        .taut {
            text-align: center;
            margin-top: 5px;
        }

        .taut p {
            font-size: 14px;
            color: #666;
            text-align: center;
        }

        .taut a {
            text-decoration: none;
            color: #f9b347;
        }

        .taut a:hover {
            color: #f9e09a;
        }

        @media (max-width: 500px) {
            .form-container {
                padding: 15px; /* Mengurangi padding di layar kecil */
            }

            h2 {
                font-size: 1.5em; /* Menyesuaikan ukuran font di layar kecil */
            }

            button {
                padding: 8px; /* Mengurangi padding tombol */
            }

            input[type="text"],
            input[type="email"],
            input[type="date"],
            input[type="file"],
            select,
            input[type="password"] {
                padding: 8px; /* Mengurangi padding input di layar kecil */
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Daftar Akun</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
            </label>

            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>

            <label for="no_hp">Nomor HP</label>
            <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan nomor" required>

            <label for="foto">Upload Foto</label>
            <input type="file" id="foto" name="foto" accept="image/*" required>

            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="peserta">Peserta</option>
                <option value="mentor">Mentor</option>
            </select>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <button type="submit" name="submit">Daftar</button>

            <div class="taut">
                <p>
                    Sudah memiliki akun? <br />
                    <a href="login.php">Masuk sekarang!</a>
                </p>
            </div>
        </form>

        <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
            <div class="alert">Registrasi berhasil!</div>
        <?php endif; ?>
    </div>
</body>
</html>
