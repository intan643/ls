-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 03 Nov 2024 pada 11.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lembaga_pelatihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(255) DEFAULT NULL,
  `tanggal_agenda` date DEFAULT NULL,
  `waktu_agenda` time DEFAULT NULL,
  `lokasi_agenda` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `judul_agenda`, `tanggal_agenda`, `waktu_agenda`, `lokasi_agenda`) VALUES
(1, 'Workshop Digital Marketing', '2024-02-15', '09:00:00', 'Zoom Meeting'),
(2, 'Seminar Teknologi', '2024-12-01', '10:00:00', 'Kelas Kursus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tanggal_publikasi` date DEFAULT NULL,
  `foto_berita` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_publikasi`, `foto_berita`, `kategori`) VALUES
(1, 'Pelatihan Baru', 'Kami membuka program pelatihan baru.', '2024-01-01', 'pelatihan_baru.jpg', 'informasi'),
(2, 'Gaya Hidup', 'Lorem ipsum dolor sit amet consectetur ', '2024-10-01', 'gayahidup.jpg', 'life style');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL,
  `nilai_ujian` int(11) DEFAULT NULL,
  `nilai_tugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_peserta`, `id_program`, `nilai_ujian`, `nilai_tugas`) VALUES
(1, 3, 1, 85, 90),
(2, 2, 3, 88, 80),
(3, 8, 2, 78, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jadwal` text DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `materi` text DEFAULT NULL,
  `id_pelatih` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `nama_program`, `deskripsi`, `jadwal`, `biaya`, `materi`, `id_pelatih`) VALUES
(1, 'Kursus Pemula JavaScript', 'Pelajari dasar-dasar JavaScript dan cara mengimplementasikannya dalam proyek nyata', 'Setiap Senin & Rabu', 300000, 'HTML, CSS, JavaScript', 4),
(2, 'Kursus Data Analysis', 'Pelajari cara menganalisis data dengan menggunakan alat seperti Excel dan SQL', 'Setiap Selasa & Kamis', 300000, 'Excel, SQL', 5),
(3, 'Full Stack Web Development', 'Belajar membangun aplikasi web dari awal hingga akhir menggunakan berbagai teknologi', 'Setiap Jumat & Sabtu', 300000, 'Node.js, MongoDB', 6),
(4, 'Desain UI/UX', 'Teknik dasar dan praktik terbaik dalam desain antarmuka pengguna dan pengalaman pengguna', 'Minggu', 300000, 'Figma', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` enum('admin','peserta','mentor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `email`, `password`, `foto`, `role`) VALUES
(1, 'admin', '', '', '0000-00-00', '', '', 'admin@gmail.com', 'admin123', 'admin.jpg', 'admin'),
(2, 'Ahmad', 'Laki-laki', 'Jakarta', '1999-08-20', 'Jl. Sudirman No.1', '08123456789', 'ahmad@gmail.com', 'ahmad123', 'ahmad.jpg', 'peserta'),
(3, 'Citra', 'Perempuan', 'Bandung', '1999-08-20', 'Jl. Anggrek No.5', '081098765432', 'citra@gmail.com', 'citra123', 'citra.jpg', 'peserta'),
(4, 'Jessica Willson', 'Perempuan', 'Surabaya', '1999-08-20', 'Jl. Merdeka No.2', '08129876543', 'jessicaw@gmail.com', 'jessica123', 'jessica.jpg', 'mentor'),
(5, 'Justin Bieber', 'Laki-laki', 'Malang', '1999-08-20', 'Jl. Melati No.1', '0815678392012', 'jb@gmail.com', 'justin123', 'justinb.jpg', 'mentor'),
(6, 'Pak Didi', 'Laki-laki', 'Manado', '1999-08-20', 'Jl. Merdeka No.2', '081111111111', 'pakdd@gmail.com', 'pdd123', 'pdd.jpg', 'mentor'),
(7, 'Yolanda', 'Perempuan', 'Nganjuk', '1999-08-20', 'Jl. Merdeka No.2', '082222222222', 'yoland@gmail.com', 'yo123', 'yol.jpg', 'mentor'),
(8, 'Wardah', 'Perempuan', 'Kalimantan', '1999-08-20', 'Jl. Mustofa No. 72', '0866666666666', 'wardah@gmail.com', 'wardah123', 'wardah.jpg', 'peserta'),
(11, 'Intan Suci Pratami', 'Perempuan', 'bandung', '2024-11-05', 'Jl. Cimuncang No.27', '0895326164631', 'intansucipratami@gmail.com', '$2y$10$6P4R.9DxJByyfx5Zf8ovSeJDXoVbnQ.DnnZ58D6DWtac7p7ws0Oji', 'uploads/WhatsApp Image 2024-10-21 at 22.17.21_32a61f42.jpg', 'peserta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id_program` (`id_program`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
