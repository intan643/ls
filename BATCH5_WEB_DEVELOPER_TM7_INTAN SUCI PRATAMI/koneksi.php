<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$port = 3307;

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=db_lembaga_pelatihan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Hanya menampilkan pesan koneksi berhasil
    echo "Koneksi ke MySQL Berhasil<br>";

    // Jika Anda ingin melakukan query tanpa menampilkan hasilnya, Anda bisa meng-comment atau menghapus bagian ini
    /*
    // Query untuk mengambil data dari tabel
    $query = "SELECT * FROM user";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Ambil hasilnya
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Tampilkan hasil
    if ($results) {
        foreach ($results as $row) {
            echo "ID: " . $row['id'] . " - Nama: " . $row['nama'] . "<br>";
        }
    } else {
        echo "Tidak ada data ditemukan.";
    }
    */
} catch (PDOException $e) {
    echo "Koneksi Gagal: " . $e->getMessage();
}
?>
