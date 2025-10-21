<!-- 
ADITYA DWI WIBOWO
41523010089 
-->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section class="section-1">
        <header class="main-header">
            <img src="images/inaklug.png" alt="Inaklug Logo" class="header-logo">
            <h1>Inaklug</h1>
            <nav class="main-nav">
                <a href="/home">Home</a>
                <a href="/about">Tentang Kami</a>
                <a href="/service">Layanan</a>
                <a href="#artikel">Artikel</a>
                <a href="#hubungi">Hubungi Kami</a>
            </nav>

            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Ketik pencarian">
                </div>
                <a href="#daftar" class="register-btn">DAFTAR ON-LINE</a>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </header>

        <div id="mobile-nav">
            <nav class="main-nav">
                <a href="/home">Home</a>
                <a href="/about">Tentang Kami</a>
                <a href="/service">Layanan</a>
                <a href="#artikel">Artikel</a>
                <a href="#hubungi">Hubungi Kami</a>
            </nav>
            <div class="search-box">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Ketik pencarian">
            </div>
        </div>

        <div class="container-fluid p-0">
            <img src="images/home-section01.png" alt="Hero Image" class="section-1-image">

            <div class="gradient-box">
                <p class="box-text">
                    INGIN KULIAH DAN BERKARIR DI LUAR NEGERI ?
                </p>
                <a href="#layanan" class="action-button">
                    SELENGKAPNYA
                    <i class="fas fa-chevron-down icon-v"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="section-2" id="tentang">
        <h2>TENTANG KAMI</h2>
        <p>
            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
        </p>
    </section>

    <hr class="section-divider">

    <section class="section-3" id="layanan">
        <h2>Layanan Kami</h2>
        <div class="service-grid">
            <div class="service-card">
                <img src="images/bachelor.png" alt="Studi S1 - Bachelor">
                <div class="service-card-overlay">
                    <h3 class="service-card-title">Studi S1 - Bachelor</h3>
                </div>
            </div>
            <div class="service-card">
                <img src="images/master.png" alt="Studi S2 - Master">
                <div class="service-card-overlay">
                    <h3 class="service-card-title">Studi S2 - Master</h3>
                </div>
            </div>
            <div class="service-card">
                <img src="images/phd.jpg" alt="Studi S3 - Ph.D">
                <div class="service-card-overlay">
                    <h3 class="service-card-title">Studi S3 - Ph.D</h3>
                </div>
            </div>
            <div class="service-card">
                <img src="images/kursus.png" alt="Kursus Bahasa Asing">
                <div class="service-card-overlay">
                    <h3 class="service-card-title">Kursus Bahasa Asing</h3>
                </div>
            </div>
            <div class="service-card">
                <img src="images/studytour.png" alt="Study Tour">
                <div class="service-card-overlay">
                    <h3 class="service-card-title">Study Tour</h3>
                </div>
            </div>
            <div class="service-card">
                <img src="images/ausbildung.jpg" alt="Ausbildung">
                <div class="service-card-overlay">
                    <h3 class="service-card-title">Ausbildung</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4">
        <h2>Mitra Kami</h2>
        <div class="partner-grid">
            <div class="partner-logo">
                <img src="images/aviation.jpg" alt="Partner 1">
            </div>
            <div class="partner-logo">
                <img src="images/adrew.png" alt="Partner 2">
            </div>
            <div class="partner-logo">
                <img src="images/htw.png" alt="Partner 3">
            </div>
            <div class="partner-logo">
                <img src="images/studygroup.png" alt="Partner 4">
            </div>
        </div>

        <div class="cta-box">
            <h3>GRATIS KONSELING STUDI DI LUAR NEGERI</h3>
            <p>Konsultasi Seputar Kuliah/Bekerja di Luar Negeri</p>
            <a href="#hubungi" class="cta-button">
                MULAI KONSULTASI
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>

    <section class="section-5" id="artikel">
        <h2>Artikel Terbaru</h2>
        <div class="article-grid">
            <div class="article-card">
                <img src="images/studijerman.png" alt="Artikel 1">
                <div class="article-card-content">
                    <h3 class="article-card-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h3>
                </div>
            </div>
            <div class="article-card">
                <img src="images/korona.png" alt="Artikel 2">
                <div class="article-card-content">
                    <h3 class="article-card-title">Uni Eropa Menghadapi Virus Korona</h3>
                </div>
            </div>
            <div class="article-card">
                <img src="images/bahasajerman.png" alt="Artikel 3">
                <div class="article-card-content">
                    <h3 class="article-card-title">Belajar Bahasa Jerman Bersama Goethe Institut</h3>
                </div>
            </div>
            <div class="article-card">
                <img src="images/gatescambride.png" alt="Artikel 4">
                <div class="article-card-content">
                    <h3 class="article-card-title">Apa Itu Gates Cambridge? Yuk Cari Tahu</h3>
                </div>
            </div>
        </div>
        <a href="#" class="view-all-btn">LAINNYA</a>
    </section>

    <hr class="section-divider">

    <section class="section-6" id="hubungi">
        <h2>Hubungi Kami</h2>
        <h3>Kantor Pusat</h3>
        <div class="contact-info">
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone: 085286754052</p>
        </div>
        <div class="contact-buttons">
            <a href="#" class="contact-btn contact-btn-primary">LOKASI KAMI</a>
            <a href="#" class="contact-btn contact-btn-secondary">KIRIM PESAN</a>
        </div>
    </section>

    <footer>
        <p>Copyright @ 2020 - Inaklug Indonesia | Hak Cipta dilindungi undang-undang</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const hamburger = document.querySelector('.hamburger-menu');
        const mobileNav = document.querySelector('#mobile-nav');

        hamburger.addEventListener('click', () => {
            mobileNav.classList.toggle('active');
        });
    </script>
</body>

</html>