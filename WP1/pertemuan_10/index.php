<!DOCTYPE html>
<html lang="id">
<head>
    <title>Rasa Nusantara - Restoran Masakan Indonesia Terbaik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
        }
        .navbar-brand img {
            height: 50px;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        .footer-bg {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        }
        .btn-primary-custom {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: bold;
        }
        .btn-primary-custom:hover {
            background: linear-gradient(45deg, #c0392b, #a93226);
            transform: translateY(-2px);
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .section-title {
            position: relative;
            margin-bottom: 3rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #e74c3c;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-utensils text-danger me-2"></i>
                <strong>Rasa Nusantara</strong>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><i class="fas fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu"><i class="fas fa-book-open"></i> Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-phone"></i> Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reservation"><i class="fas fa-calendar-alt"></i> Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container text-center">
            <h1 class="display-2 fw-bold mb-4">Rasa Nusantara</h1>
            <p class="lead mb-5">Nikmati Cita Rasa Autentik Indonesia dalam Suasana yang Hangat dan Ramah</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-primary-custom btn-lg">
                    <i class="fas fa-utensils me-2"></i>Lihat Menu
                </button>
                <button class="btn btn-outline-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Reservasi Sekarang
                </button>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="py-5">
        <div class="container">
            <div id="restaurantCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#restaurantCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#restaurantCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#restaurantCarousel" data-bs-slide-to="2"></button>
                </div>
                
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2022/04/27/ilustrasi-restoran-1_169.jpeg?w=1200" class="d-block w-100" alt="Suasana Restoran">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                            <h5>Suasana Hangat dan Nyaman</h5>
                            <p>Nikmati pengalaman bersantap dalam suasana yang hangat dengan dekorasi tradisional Indonesia.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=1974&q=80" class="d-block w-100" alt="Makanan Lezat">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                            <h5>Hidangan Autentik Indonesia</h5>
                            <p>Rasakan kelezatan masakan tradisional yang diracik dengan resep turun temurun.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1974&q=80" class="d-block w-100" alt="Chef Profesional">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                            <h5>Chef Berpengalaman</h5>
                            <p>Dipimpin oleh chef berpengalaman dengan keahlian masakan Nusantara.</p>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#restaurantCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#restaurantCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Menu Cards Section -->
    <section id="menu" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Menu Unggulan Kami</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 card-hover shadow">
                        <img src="https://images.unsplash.com/photo-1596797038530-2c107229654b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Nasi Gudeg">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Gudeg Jogja Spesial</h5>
                            <p class="card-text">Gudeg tradisional dengan nangka muda, opor ayam, dan sambal krecek yang menggugah selera.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-success mb-0">Rp 35.000</span>
                                <button class="btn btn-danger btn-sm">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 card-hover shadow">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlGE3EVWpzvCnIhelI2hfNnpZEGAXuThsqqg&s" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Rendang">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Rendang Daging Sapi</h5>
                            <p class="card-text">Rendang autentik Minangkabau dengan daging sapi empuk dan bumbu rempah yang kaya.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-success mb-0">Rp 45.000</span>
                                <button class="btn btn-danger btn-sm">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 card-hover shadow">
                        <img src="https://www.dapurkobe.co.id/wp-content/uploads/sate-ayam.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Sate Ayam">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Sate Ayam Madura</h5>
                            <p class="card-text">Sate ayam bakar dengan bumbu kacang khas Madura yang gurih dan sedikit pedas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-success mb-0">Rp 25.000</span>
                                <button class="btn btn-danger btn-sm">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 card-hover shadow">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Nasi Padang">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Nasi Padang Komplit</h5>
                            <p class="card-text">Nasi putih hangat dengan berbagai lauk khas Padang: rendang, gulai, dan sayur.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-success mb-0">Rp 40.000</span>
                                <button class="btn btn-danger btn-sm">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 card-hover shadow">
                        <img src="https://www.cookmeindonesian.com/wp-content/uploads/2022/06/gado-gado-jakarta2.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Gado-gado">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Gado-gado Jakarta</h5>
                            <p class="card-text">Salad sayuran segar dengan bumbu kacang yang creamy dan kerupuk yang renyah.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-success mb-0">Rp 20.000</span>
                                <button class="btn btn-danger btn-sm">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 card-hover shadow">
                        <img src="https://images.unsplash.com/photo-1551218372-a8789b81b253?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Es Cendol">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Es Cendol Durian</h5>
                            <p class="card-text">Minuman segar dengan cendol, santan, gula merah, dan durian yang manis.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-success mb-0">Rp 15.000</span>
                                <button class="btn btn-danger btn-sm">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    <i class="fas fa-clock text-danger me-2"></i>
                                    Jam Operasional Restoran
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Rasa Nusantara buka setiap hari dari pukul 10:00 - 22:00 WIB. Untuk hari Jumat, kami tutup sementara dari 12:00-13:30 untuk ibadah Jumat. Reservasi sangat disarankan untuk makan malam di akhir pekan.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    <i class="fas fa-utensils text-danger me-2"></i>
                                    Apakah Tersedia Menu Vegetarian?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Ya, kami menyediakan berbagai pilihan menu vegetarian seperti Gado-gado, Pecel, Sayur Lodeh, Tempe Bacem, dan berbagai menu sayuran tradisional Indonesia lainnya. Semua disajikan dengan cita rasa autentik.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                    <i class="fas fa-motorcycle text-danger me-2"></i>
                                    Layanan Delivery dan Take Away
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Tentu saja! Kami melayani delivery dalam radius 5km dengan minimal pembelian Rp 50.000. Tersedia juga layanan take away. Anda bisa memesan melalui aplikasi GrabFood, GoFood, atau langsung menghubungi nomor restoran kami.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                    <i class="fas fa-birthday-cake text-danger me-2"></i>
                                    Event dan Catering
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Kami menyediakan layanan catering untuk berbagai acara seperti ulang tahun, meeting kantor, arisan, dan acara keluarga. Minimum order 20 porsi dengan berbagai paket pilihan. Hubungi kami untuk konsultasi menu dan harga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Table Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Paket Menu Keluarga</h2>
                    <p class="lead">Pilihan paket hemat untuk keluarga besar</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col"><i class="fas fa-list-ol"></i> No</th>
                                    <th scope="col"><i class="fas fa-utensils"></i> Nama Paket</th>
                                    <th scope="col"><i class="fas fa-users"></i> Untuk</th>
                                    <th scope="col"><i class="fas fa-clipboard-list"></i> Menu Utama</th>
                                    <th scope="col"><i class="fas fa-money-bill-wave"></i> Harga</th>
                                    <th scope="col"><i class="fas fa-shopping-cart"></i> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><strong>Paket Keluarga Kecil</strong></td>
                                    <td>3-4 Orang</td>
                                    <td>Rendang, Ayam Gulai, Sayur Lodeh, Nasi Putih</td>
                                    <td><span class="text-success fw-bold">Rp 120.000</span></td>
                                    <td><button class="btn btn-danger btn-sm">Pesan</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><strong>Paket Keluarga Sedang</strong></td>
                                    <td>5-6 Orang</td>
                                    <td>Rendang, Gulai Ayam, Ikan Bakar, Gado-gado, Nasi Putih</td>
                                    <td><span class="text-success fw-bold">Rp 180.000</span></td>
                                    <td><button class="btn btn-danger btn-sm">Pesan</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><strong>Paket Keluarga Besar</strong></td>
                                    <td>7-8 Orang</td>
                                    <td>Rendang, Gulai Ayam, Ikan Bakar, Sate Ayam, Sayur Asem, Nasi Putih</td>
                                    <td><span class="text-success fw-bold">Rp 250.000</span></td>
                                    <td><button class="btn btn-danger btn-sm">Pesan</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><strong>Paket Spesial Lebaran</strong></td>
                                    <td>10+ Orang</td>
                                    <td>Opor Ayam, Rendang, Ketupat, Sambal Goreng, Kue Lebaran</td>
                                    <td><span class="text-success fw-bold">Rp 350.000</span></td>
                                    <td><button class="btn btn-danger btn-sm">Pesan</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-4">
                        <p class="text-muted">* Harga sudah termasuk nasi putih dan kerupuk. Minuman dijual terpisah.</p>
                        <button class="btn btn-primary-custom btn-lg">
                            <i class="fas fa-phone me-2"></i>Konsultasi Paket Menu
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservation" class="py-5" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="mb-3">Reservasi Meja</h2>
                    <p class="lead">Pastikan tempat Anda dengan melakukan reservasi sekarang</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded shadow text-dark">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" placeholder="08xx-xxxx-xxxx">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Waktu</label>
                                    <select class="form-select">
                                        <option>Pilih Waktu</option>
                                        <option>12:00 - 14:00</option>
                                        <option>14:00 - 16:00</option>
                                        <option>18:00 - 20:00</option>
                                        <option>20:00 - 22:00</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Jumlah Tamu</label>
                                <select class="form-select">
                                    <option>Pilih Jumlah Tamu</option>
                                    <option>1-2 Orang</option>
                                    <option>3-4 Orang</option>
                                    <option>5-8 Orang</option>
                                    <option>9+ Orang</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Catatan Khusus</label>
                                <textarea class="form-control" rows="3" placeholder="Permintaan khusus (opsional)"></textarea>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger btn-lg">
                                    <i class="fas fa-calendar-check me-2"></i>Konfirmasi Reservasi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-bg text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase mb-3">
                        <i class="fas fa-utensils text-danger me-2"></i>Rasa Nusantara
                    </h5>
                    <p>Restoran masakan Indonesia terbaik di kota Medan. Nikmati cita rasa autentik Nusantara dalam suasana yang hangat dan ramah keluarga.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-uppercase mb-3">Menu</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Makanan Utama</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Minuman</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Dessert<a><li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>