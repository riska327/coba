<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportPants - Toko Celana Olahraga Berkualitas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2a4365;
            --secondary: #ecc94b;
            --light: #f7fafc;
            --dark: #1a202c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: var(--primary);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white;
        }
        
        .navbar-brand span {
            color: var(--secondary);
        }
        
        .nav-link {
            color: white;
            font-weight: 500;
            margin: 0 10px;
        }
        
        .nav-link:hover {
            color: var(--secondary);
        }
        
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f1111100-6546-4af8-9e6e-57778b6d8526.png');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: #1e365b;
            border-color: #1e365b;
        }
        
        .btn-outline-secondary {
            color: white;
            border-color: white;
        }
        
        .btn-outline-secondary:hover {
            background-color: white;
            color: var(--dark);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--secondary);
        }
        
        .product-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .product-img {
            height: 250px;
            object-fit: cover;
        }
        
        .badge-discount {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--secondary);
            color: var(--dark);
            font-weight: bold;
        }
        
        .testimonial-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid var(--secondary);
        }
        
        .about-img {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 50px 0 0;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--secondary);
            color: var(--dark);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">SPORT<span>PANTS</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-4 fw-bold mb-4">Celana Olahraga Berkualitas Tinggi</h1>
                <p class="lead mb-4">Didesain untuk kenyamanan maksimal dan performa optimal dalam setiap gerakan Anda.</p>
                <div class="d-flex gap-3">
                    <a href="#products" class="btn btn-primary btn-lg px-4">Lihat Produk</a>
                    <a href="#contact" class="btn btn-outline-secondary btn-lg px-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5" id="products">
        <div class="container">
            <h2 class="text-center section-title">Produk Unggulan</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1be97980-7905-4da8-b101-8091a5f59050.png" class="img-fluid product-img" alt="Celana training premium warna hitam dengan detail garis merah di samping dan bahan quick dry stretch">
                            <span class="badge badge-discount p-2">20% OFF</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Training Pro Black</h5>
                            <p class="text-muted">Bahan quick dry stretch dengan ventilasi optimal</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-primary mb-0">Rp 299.000</h5>
                                <del class="text-muted">Rp 375.000</del>
                            </div>
                            <button class="btn btn-primary mt-3 w-100">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0a2cc313-575c-47a9-a6be-2cc106de521a.png" class="img-fluid product-img" alt="Celana jogging navy blue dengan kantong zip dan pinggang elastis yang nyaman">
                            <span class="badge badge-discount p-2">15% OFF</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jogging Master Navy</h5>
                            <p class="text-muted">Pinggang elastis dengan fitur kantong praktis</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-primary mb-0">Rp 275.000</h5>
                                <del class="text-muted">Rp 325.000</del>
                            </div>
                            <button class="btn btn-primary mt-3 w-100">Beli Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/93c355d4-6dd9-4581-94e3-609b0b1c5b4a.png" class="img-fluid product-img" alt="Celana basketball gray dengan bahan breathable dan panel ventilasi di sisi kaki">
                            <span class="badge badge-discount p-2">15% OFF</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jogging Master Navy</h5>
                            <p class="text-muted">Pinggang elastis dengan fitur kantong praktis</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-primary mb-0">Rp 275.000</h5>
                                <del class="text-muted">Rp 325.000</del>
                            </div>
                            <button class="btn btn-primary mt-3 w-100">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
                
                

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Testimoni Pelanggan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/aadf590b-c01e-4043-9aef-4190bde199ca.png" class="testimonial-img" alt="Foto pria muda tersenyum memakai celana training hitam dengan latar belakang gym">
                        <h5>Ahmad Fauzi</h5>
                        <p class="text-muted">Atlet Gym</p>
                        <p>"Celana Training Pro sangat nyaman dipakai untuk latihan berat. Bahannya adem dan elastis untuk semua gerakan."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1033f5f1-26ce-4c7b-9eb1-cf5fa872b22a.png" class="testimonial-img" alt="Wanita dengan kuncir kuda memakai celana jogging navy sedang berpose di taman">
                        <h5>Dewi Lestari</h5>
                        <p class="text-muted">Pelari Marathon</p>
                        <p>"Jogging Master sangat ringan dan tidak gerah. Sudah pakai 6 bulan tapi kualitas jahitan masih bagus."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/df3fc505-247e-4143-9399-bfa4b876942c.png" class="testimonial-img" alt="Remaja memegang bola basket dengan celana abu-abu di lapangan basket">
                        <h5>Rizal Pratama</h5>
                        <p class="text-muted">Pemain Basket</p>
                        <p>"Basket Pro sangat cocok untuk permainan cepat. Bahannya stretch dan ringan tetap nyaman saat banyak gerakan."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="py-5" id="about">
        <div class="container">
            <h2 class="text-center section-title">Tentang Kami</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/804aff88-b902-4795-a422-4fff2d49ee81.png" class="img-fluid about-img" alt="Toko SportPants modern dengan rak display celana dan karyawan yang membantu pelanggan">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">SPORTPANTS - Kualitas Tak Tertandingi</h3>
                    <p>Sejak 2015, SPORTPANTS berkomitmen menyediakan celana olahraga berkualitas tinggi dengan bahan terbaik dan desain ergonomis.</p>
                    <p>Kami bekerja langsung dengan atlet profesional untuk mengembangkan produk yang memenuhi kebutuhan performa tinggi.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Bahan impor berkualitas tinggi</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Desain oleh tim profesional</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Garansi kualitas 1 tahun</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Pengiriman ke seluruh Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light" id="contact">
        <div class="container">
            <h2 class="text-center section-title">Hubungi Kami</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h4 class="mb-4">Informasi Kontak</h4>
                    <p><i class="fas fa-map-marker-alt text-primary me-2"></i> Jl. Olahraga No. 123, Jakarta Selatan</p>
                    <p><i class="fas fa-phone text-primary me-2"></i> (021) 1234-5678</p>
                    <p><i class="fas fa-envelope text-primary me-2"></i> info@sportpants.com</p>
                    <p><i class="fas fa-clock text-primary me-2"></i> Buka Setiap Hari 09.00 - 21.00 WIB</p>
                    
                    <div class="mt-4">
                        <h5>Follow Kami</h5>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Anda" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>SPORTPANTS</h5>
                    <p>Toko celana olahraga dengan kualitas terbaik dan harga terjangkau.</p>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5>Produk</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Celana Training</a></li>
                        <li><a href="#">Celana Jogging</a></li>
                        <li><a href="#">Celana Basket</a></li>
                        <li><a href="#">Celana Sepakbola</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5>Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#products">Produk</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Newsletter</h5>
                    <p>Dapatkan promo dan produk terbaru langsung ke email Anda</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email Anda">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-3" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">© 2023 SPORTPANTS. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Made with <i class="fas fa-heart text-danger"></i> in Jakarta</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.');
            this.reset();
        });
        
        // Animate nav on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '10px 0';
                navbar.style.backgroundColor = 'rgba(42, 67, 101, 0.95)';
            } else {
                navbar.style.padding = '15px 0';
                navbar.style.backgroundColor = 'var(--primary)';
            }
        });
    </script>
</body>
</html>

