<?php
session_start(); // Mulai session

// Jika ada pesan sukses, simpan dalam variabel
$successMessage = "";
if (isset($_SESSION['success'])) {
    $successMessage = $_SESSION['success'];
    unset($_SESSION['success']); // Hapus pesan setelah ditampilkan
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" href="images/icon.png" alt=""/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">

        <title>Insightify</title>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- Navigation -->
         <header>
         <nav>
            <a href="index.html">
                <img src="images/insightify.png" alt="">
            </a>
            <div class="navigation">
                <ul>
                    <i id="menu-close" class="fas fa-times"></i>
                    <li><a class="active" href="#">Beranda</a></li>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="blog.html">Artikel</a></li>
                    <li><a href="course.html">Kursus</a></li>
                    <li><a href="contact.html">Kontak</a></li>
                    <div class="nav-button">
                        <a href="login.php" class="btn login">Masuk</a>
                        <a href="register.php" class="btn register">Daftar</a>
                    </div>
                </ul>
                <img id="menu-btn" src="images/menu.png" alt="">
            </div> 
         </nav>
         </header>

        <!-- Home -->
         <section id="home">
            <h2>Selamat Datang di Insightify</h2>
            <p>Kami punya banyak kursus seru buat bantu kamu kembangkan skill dan pengetahuan. Cek berbagai program yang dibuat khusus buat memenuhi kebutuhan belajar kamu!</p>
             <div class="btn">
                <a class="blue" href="#features">Pelajari Selengkapnya</a>
                <a class="yellow" href="course.html">Lihat Kursus</a>
             </div>
         </section>

        <!-- features -->
         <section id="features">
            <h1>Benefit</h1>
            <p>Dapatkan akses ke materi pembelajaran berkualitas dan dukungan dari para ahli. Tingkatkan keterampilan Anda dan jalin koneksi dengan komunitas pembelajar lainnya untuk meraih kesuksesan lebih cepat!</p>            
            <div class="fea-base">
                <div class="fea-box">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Fasilitas Beasiswa</h3>
                    <p>Kami menawarkan beasiswa untuk membantu kamu mencapai pendidikan yang lebih tinggi</p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-file-certificate"></i>
                    <h3>Sertifikat</h3>
                    <p>Dapatkan sertifikat resmi setelah menyelesaikan kursus kami</p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-award"></i>
                    <h3>Sertifikasi Global</h3>
                    <p>Mendapatkan sertifikasi yang diakui secara internasional untuk meningkatkan kredibilitas</p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-book"></i>
                    <h3>Studi Kasus</h3>
                    <p>Assignments dari studi kasus profesional yang dapat membantu untuk mengasah keterampilan kamu</p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-angle-up"></i>
                    <h3>Upgrade Skill</h3>
                    <p>Dapatkan atau upgrade skill kamu disini</p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-briefcase"></i>
                    <h3>Portofolio</h3>
                    <p>Bangun portofolio yang menarik untuk meningkatkan peluang karier kamu</p>
                </div>
            </div>
         </section>

        <!-- Courses -->
         <section id="course">
            <h1>Kursus Populer Kami</h1>
            <p>Manfaatkan kesempatan untuk belajar dan berkembang dengan berbagai kursus kami</p>
            <div class="course-box">

                <div class="courses">
                    <img src="images/c1.jpg" alt="">
                    <div class="details">
                        <span>Diperbarui 30/9/24</span>
                        <h6>Kursus Pemula JavaScript</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        300k
                    </div>
                </div>

                <div class="courses">
                    <img src="images/c2.jpg" alt="">
                    <div class="details">
                        <span>Diperbarui 30/9/24</span>
                        <h6>HTML, CSS</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        300k
                    </div>
                </div>

                <div class="courses">
                    <img src="images/c3.jpg" alt="">
                    <div class="details">
                        <span>Updated 30/9/24</span>
                        <h6>JavaScript Beginners Courses</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        300k
                    </div>
                </div>

                <div class="courses">
                    <img src="images/c4.jpg" alt="">
                    <div class="details">
                        <span>Updated 30/9/24</span>
                        <h6>JavaScript Beginners Courses</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        300k
                    </div>
                </div>

                <div class="courses">
                    <img src="images/c5.jpg" alt="">
                    <div class="details">
                        <span>Updated 30/9/24</span>
                        <h6>JavaScript Beginners Courses</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        300k
                    </div>
                </div>

                <div class="courses">
                    <img src="images/c6.jpg" alt="">
                    <div class="details">
                        <span>Updated 30/9/24</span>
                        <h6>JavaScript Beginners Courses</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        300k
                    </div>
                </div>
            </div>
         </section>

         <section id="curriculum-details">
            <h1>Kurikulum Kursus</h1>
            <p>Berikut adalah informasi lebih lanjut tentang kurikulum yang kami tawarkan:</p>
            <table class="curriculum-table">
                <thead>
                    <tr>
                        <th>Nama Kursus</th>
                        <th>Durasi</th>
                        <th>Level</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kursus Pemula JavaScript</td>
                        <td>4 minggu</td>
                        <td>Pemula</td>
                        <td>Pelajari dasar-dasar JavaScript dan cara mengimplementasikannya dalam proyek nyata.</td>
                    </tr>
                    <tr>
                        <td>HTML & CSS</td>
                        <td>3 minggu</td>
                        <td>Pemula</td>
                        <td>Dasar-dasar HTML dan CSS untuk membangun website yang menarik.</td>
                    </tr>
                    <tr>
                        <td>Python untuk Data Science</td>
                        <td>6 minggu</td>
                        <td>Menengah</td>
                        <td>Pelajari penggunaan Python dalam analisis data dan pembelajaran mesin.</td>
                    </tr>
                    <tr>
                        <td>Desain UI/UX</td>
                        <td>5 minggu</td>
                        <td>Menengah</td>
                        <td>Teknik dasar dan praktik terbaik dalam desain antarmuka pengguna dan pengalaman pengguna.</td>
                    </tr>
                    <tr>
                        <td>Full Stack Web Development</td>
                        <td>8 minggu</td>
                        <td>Mahasiswa</td>
                        <td>Belajar membangun aplikasi web dari awal hingga akhir menggunakan berbagai teknologi.</td>
                    </tr>
                    <tr>
                        <td>Kursus Data Analysis</td>
                        <td>4 minggu</td>
                        <td>Pemula</td>
                        <td>Pelajari cara menganalisis data dengan menggunakan alat seperti Excel dan SQL.</td>
                    </tr>
                    <tr>
                        <td>Kursus Digital Marketing</td>
                        <td>6 minggu</td>
                        <td>Menengah</td>
                        <td>Strategi pemasaran digital untuk meningkatkan visibilitas bisnis.</td>
                    </tr>
                    <tr>
                        <td>Kursus Machine Learning</td>
                        <td>8 minggu</td>
                        <td>Menengah</td>
                        <td>Pelajari algoritma dan teknik dalam pembelajaran mesin.</td>
                    </tr>
                    <tr>
                        <td>Kursus React.js</td>
                        <td>5 minggu</td>
                        <td>Menengah</td>
                        <td>Mempelajari cara membangun aplikasi web interaktif dengan React.</td>
                    </tr>
                    <tr>
                        <td>Kursus DevOps</td>
                        <td>7 minggu</td>
                        <td>Mahasiswa</td>
                        <td>Pahami proses pengembangan perangkat lunak dan operasi IT secara bersamaan.</td>
                    </tr>
                </tbody>
            </table>
        </section>           

        <!-- Profiles -->
         <section id="experts">
            <h1>Mentor Kami</h1>
            <p>Bersama mentor yang expert di bidangnya</p>
            <div class="expert-box">
                <div class="profile">
                    <img src="images/pro1.webp" alt="">
                    <h6>Jessica Willson</h6>
                    <p>Python & Algorithm Expert</p>
                    <div class="pro-links">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>

                <div class="profile">
                    <img src="images/pro2.webp" alt="">
                    <h6>Justin Bieber</h6>
                    <p>Data Analyst Expert</p>
                    <div class="pro-links">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>

                <div class="profile">
                    <img src="images/pro3.webp" alt="">
                    <h6>Pak Didi</h6>
                    <p>Full Stack Developer</p>
                    <div class="pro-links">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>

                <div class="profile">
                    <img src="images/pro4.webp" alt="">
                    <h6>Yolanda</h6>
                    <p>Design Expert</p>
                    <div class="pro-links">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>

            </div>
         </section>

        <!-- Footer -->
         <footer>
            <div class="footer-col">
                <h3>Produk Unggulan</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Managed Website</li>
                <li>Marketing Service</li>
            </div>
            <div class="footer-col">
                <h3>Produk Unggulan</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Managed Website</li>
            </div>
            <div class="footer-col">
                <h3>Produk Unggulan</h3>
                <li>Manage Reputation</li>
                <li>Marketing Service</li>
            </div>
            <div class="footer-col">
                <h3>Panduan</h3>
                <li>Research</li>
                <li>Experts</li>
                <li>Manage Website</li>
                <li>Marketing Service</li>
            </div>
            
            <div class="footer-col">
                <h3>Insightify</h3>
                <p>Insightify merupakan platform pendidikan yang menyediakan pelajaran non-formal dan alternatif. Kami menawarkan kelas pengajaran baik dalam format online maupun offline, sehingga peserta atau pendaftar dapat memilih metode yang paling sesuai dengan kebutuhan mereka</p>                
            </div>
            

            <div class="copyright">
                <p>Copyright ©2024 All right reserved | Insightify | Intan Suci Pratami</p>
                <div class="pro-links">
                <i class="fab fa-facebook"></i>
                <a href="https://www.instagram.com/insightify00" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>                
                <i class="fab fa-linkedin"></i>
                </div>
            </div>
         </footer>


        <script src="script.js"></script>

        <?php if ($successMessage): ?>
        <div class="alert"><?php echo $successMessage; ?></div> <!-- Tampilkan pesan sukses -->
    <?php endif; ?>
    </body>

</html>