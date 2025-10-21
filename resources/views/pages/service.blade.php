<!-- 
ADITYA DWI WIBOWO
41523010089 
-->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="main-header">
        <img src="images/inaklug.png" alt="Inaklug Logo" class="header-logo">
        <h1>Inaklug</h1>
        <nav class="main-nav-service">
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
        <nav class="main-nav-service">
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

    <section class="section-1 about-page">
        <img src="images/gatescambride.png" alt="Tentang Kami" class="section-1-image">
        <h1 class="about-page-title">LAYANAN KAMI</h1>
    </section>



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

    <script>
        const hamburger = document.querySelector('.hamburger-menu');
        const mobileNav = document.querySelector('#mobile-nav');

        hamburger.addEventListener('click', () => {
            mobileNav.classList.toggle('active');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>