<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madura Mart</title>

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        /* Variables */
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #1e40af;
            --text-color: #1f2937;
            --light-bg: #f3f4f6;
            --white: #ffffff;
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
            --spacing-sm: 15px;
            --spacing-md: 30px;
            --spacing-lg: 60px;
            --border-radius: 50px;
        }

        /* Base Styles */
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            line-height: 1.2;
        }

        /* Header & Navigation */
        .navbar {
            background-color: var(--white);
            box-shadow: var(--shadow-sm);
            padding: var(--spacing-sm) 0;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.5rem;
            text-decoration: none;
        }

        .btn-login {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 8px var(--spacing-md);
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }

        .btn-login:hover {
            background-color: var(--secondary-color);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: var(--spacing-lg) 0;
            color: var(--white);
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .search-bar {
            background: var(--white);
            padding: var(--spacing-sm);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
        }

        .search-input {
            border: none;
            outline: none;
            width: 100%;
            padding: 10px 20px;
        }

        /* Category Section */
        .category-card {
            background: var(--white);
            border-radius: 15px;
            padding: var(--spacing-md);
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        /* Tentang Toko Section */
        .featured-section {
            background-color: var(--light-bg);
            padding: var(--spacing-lg) 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: var(--spacing-md);
        }

        .product-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-details {
            padding: var(--spacing-md);
        }

        /* CTA Section */
        .cta-section {
            background-color: var(--accent-color);
            padding: var(--spacing-lg) 0;
            text-align: center;
        }

        .cta-section .container h2 {
            color: var(--white);
            font-size: 2rem;
        }

        .cta-section .container button {
            background-color: var(--white);
            color: var(--text-color);
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: var(--border-radius);
            transition: var(--transition);
            margin-top: 20px;
            /* Memberikan jarak antara teks dan tombol */
        }

        .cta-section .container button:hover {
            background-color: var(--text-color);
            color: var(--white);
        }

        /* Footer */
        .footer {
            background-color: var(--text-color);
            color: var(--white);
            padding: var(--spacing-lg) 0 var(--spacing-md);
        }

        .footer-title {
            font-weight: 700;
            margin-bottom: var(--spacing-md);
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--white);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .category-card {
                margin-bottom: var(--spacing-sm);
            }

            .product-card {
                margin-bottom: var(--spacing-md);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Madura Mart</a>
            <a href="{{ route('login') }}" class="btn-login">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Temukan Penawaran Terbaik Setiap Hari</h1>
                    <p class="hero-subtitle">Belanja ribuan produk dengan harga termurah</p>
                    <div class="search-bar">
                        <input type="text" class="search-input" placeholder="Cari produk...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Kategori Belanja</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-laptop category-icon"></i>
                        <h5>Elektronik</h5>
                        <p>Gadget dan teknologi terbaru</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-tshirt category-icon"></i>
                        <h5>Fashion</h5>
                        <p>Tren fashion terkini</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-home category-icon"></i>
                        <h5>Rumah</h5>
                        <p>Percantik rumah Anda</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-basketball-ball category-icon"></i>
                        <h5>Olahraga</h5>
                        <p>Peralatan & aksesori</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Toko -->
    <section class="featured-section">
        <div class="container">
            <h2 class="section-title">Tentang Toko</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-details" style="text-align: center;">
                            <h5 style="font-weight: bold; margin-bottom: 15px;">Madura Mart</h5>
                            <p style="text-align: justify;">Kami menyediakan berbagai produk kebutuhan sehari-hari
                                dengan harga terjangkau. Dengan pengalaman lebih dari 10 tahun, kami berkomitmen
                                memberikan pelayanan terbaik bagi para pelanggan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-details" style="text-align: center;">
                            <h5 style="font-weight: bold; margin-bottom: 15px;">Komitmen Kami</h5>
                            <p style="text-align: justify;">Kami selalu berusaha untuk menyediakan produk dengan
                                kualitas terbaik. Dari kebutuhan pokok hingga elektronik, Anda dapat menemukan semuanya
                                di Madura Mart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-details" style="text-align: center;">
                            <h5 style="font-weight: bold; margin-bottom: 15px;">Belanja Nyaman</h5>
                            <p style="text-align: justify;">Dengan sistem belanja online yang mudah, Madura Mart
                                memastikan pengalaman belanja Anda aman dan nyaman. Belanja kapan saja dan di mana saja!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Mulai Belanja Sekarang!</h2>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="footer-title">Madura Mart</h5>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Karir</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Bantuan</h5>
                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Pengiriman</a></li>
                        <li><a href="#">Pengembalian</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Ikuti Kami</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
