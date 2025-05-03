<?php
include "../koneksi.php"; 


$kegiatan = mysqli_query($konek, "SELECT * FROM kegiatan ORDER BY no DESC LIMIT 3");
$organisasi = mysqli_query($konek, "SELECT * FROM organisasi ORDER BY no DESC LIMIT 3");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrasi</title>
    <link rel="stylesheet" href="style.css?v=1.2" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>
<body>
   
     <?php 
      $page = 'beranda';
     include 'navberanda.php';
      ?>

    <!-- Carousel -->
    <main>
        <!-- Hero Carousel -->
        <section class="hero-section">
            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../gambar/oo.jpg" class="d-block w-100" alt="Kegiatan Organisasi 1">
                        <div class="carousel-caption">
                            <h2>Portal Administrasi dan Keuangan Utama (PAKU)</h2>
                            <p> Selamat Datang di Portal Administrasi dan Keuangan Utama (PAKU) BPS Kabupaten Buton Utara </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../gambar/mc.jpg" class="d-block w-100" alt="Kegiatan Organisasi 2">
                        <div class="carousel-caption">
                            <h2>Pedoman Administrasi Keuangan</h2>
                            <p>Check List Kelengkapan, Administrasi dan Panduan Lengkap</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../gambar/pc.jpg" class="d-block w-100" alt="Kegiatan Organisasi 3">
                        <div class="carousel-caption">
                            <h2>Naskah Dinas</h2>
                            <p>Sesuai dengan perban BPS nomor 1 tahun 2023. Berlaku sejak tanggal 1 januari 2024</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Program Unggulan -->
        <section class="featured-programs py-5">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Pedoman Administrasi Keuangan</h2>
                    <p class="section-subtitle"></p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="program-card">
                            <div class="program-icon">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <a class="link" href="kelengkapan.php"> 
                                 <h3>CHECK LIST KELENGKAPAN</h3>
                            <p>Check list ini dapat digunakan untuk memudahkan dalam memastikan semua kelengkapannya sudah terpenuhi atau belum, ya!</p>
                        </a>
                          
                        </div>
                    </div>
                 
                    <div class="col-md-4">
                        <div class="program-card">
                            <div class="program-icon">
                               <i class="fa-solid fa-laptop"></i>
                            </div>
                            <a class="link" href="panduan.php"> 
                                 <h3>Panduan Lengkap</h3>
                            <p>Untuk lebih jelasnya, bisa cek pada buku pedoman administrasi keuangan versi lengkap disini, ya!</p>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kegiatan Terbaru -->
        <section class="latest-events py-5 bg-light">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Kegiatan Rapat BPS Kabupaten Barito Selatan</h2>
                    <p class="section-subtitle"> Berikut adalah Daftar Kegiatan rapat BPS Kabupaten Barito Selatan.</p>
                </div>
                <div class="row g-4 justify-content-center">
                   
               <div class="card-group">

            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Dokumetasi Rapat</h5>
                    <p class="card-text">Untuk lebih jelasnya dari dokumentasi rapat, bisa cek versi lengkap disini, ya! </p>
                    <a href="https://drive.google.com/drive/folders/1NCGC263hXbg-OZELzwPK9Y8GXOQGE6-f" target="_blank" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>

            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Notula Rapat BPS</h5>
                    <p class="card-text">Untuk lebih jelasnya dari notula rapat BPS, bisa cek versi lengkap disini, ya! </p>
                    <a href="https://drive.google.com/drive/folders/1XV2lvaz1GmjV77hJlldiMjkOZJsrsFTf" target="_blank" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            
    </div>
                   
                </div>
                <div class="text-center mt-4">
                    <a href="kegiatan.php" class="btn btn-outline-primary">Lihat Semua Kegiatan</a>
                </div>
            </div>
        </section>

        <!-- Organisasi Kampus -->
        <section class="campus-orgs py-5">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Naskah Dinas</h2>
                    <p class="section-subtitle">Sesuai Dengan Perban Bps Nomor 1 Tahun 2023 Berlaku Sejak Tanggal 1 Januari 2024</p>
                </div>
                <div class="row g-4">
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="org-card">
                           
                            <div class="org-body">
                                <h3 class="org-title">Format Naskah Dinas</h3>
                                <p class="org-description">Untuk lebih jelasnya tentang format naskah dinas, bisa cek versi lengkap disini, ya! </p>
                                <a href="https://sites.google.com/view/pak-bps-barsel/tata-naskah-dinas/format-naskah-dinas" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="org-card">
                           
                            <div class="org-body">
                                <h3 class="org-title">Kode Klasifikasi Arsip</h3>
                                <p class="org-description">Kode Klasifikasi Arsip yang digunakan disesuaikan dengan kebutuhanmu, ya! <br>Semangat!!! <br>*Pengambilan kode klasifikasi arsip hanya sampai kode di kolom kedua</p>
                                <a href="https://sites.google.com/view/pak-bps-barsel/tata-naskah-dinas/kode-klasifikasi-arsip" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="org-card">
                           
                            <div class="org-body">
                                <h3 class="org-title">Agenda Surat 2024</h3>
                                <p class="org-description">Untuk lebih jelasnya tentang agenda surat 2024, bisa cek versi lengkap disini, ya!</p>
                                <a href="https://docs.google.com/spreadsheets/d/1gepR3u2sbsi7Hx24wAGkxEqYxbmYpn_GoJk7_racNQU/edit?gid=184042805#gid=184042805" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                
                   
                   
                </div>
                <div class="text-center mt-4">
                    <a href="administrasi.php" class="btn btn-outline-primary">Lihat Semua Organisasi</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <p>&copy; 2025 Badan Pusat Statistik. Semua Hak Dilindungi.</p>
    </footer>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>