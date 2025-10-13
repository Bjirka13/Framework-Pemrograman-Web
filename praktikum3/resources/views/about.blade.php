<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Dashboard Inventaris</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(135deg, #2c3e50, #3498db);
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #ffd700 !important;
        }
        .nav-link.active {
            color: #ffd700 !important;
        }
        .hero-about {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
        }
        .feature-card {
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
        }
        .team-card {
            transition: all 0.3s ease;
        }
        .team-card:hover {
            transform: scale(1.05);
        }
        .team-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        .timeline-item {
            padding: 20px 0;
            position: relative;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: #667eea;
        }
        .timeline-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .stats-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="home.html">
                <i class="fas fa-warehouse me-2"></i>
                Dashboard Inventaris
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('barang')}}">
                            <i class="fas fa-boxes me-1"></i>Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('about')}}">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('company_profile')}}">
                            <i class="fas fa-building me-1"></i>Company Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-about">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Tentang Sistem Inventaris Kami</h1>
            <p class="lead fs-4">Solusi manajemen inventaris yang efisien dan modern untuk bisnis Anda</p>
        </div>
    </div>

    <!-- About Content -->
    <div class="container mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('images/about_us.jpg') }}" alt="Dashboard" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Apa itu Dashboard Inventaris?</h2>
                <p class="text-muted fs-5 mb-4">Dashboard Inventaris adalah sistem manajemen stok barang yang dirancang untuk membantu bisnis dalam mengelola inventaris mereka dengan lebih efisien dan akurat.</p>
                <p class="text-muted">Dengan antarmuka yang intuitif dan fitur-fitur canggih, sistem kami memungkinkan Anda untuk memantau stok secara real-time, mengelola kategori produk, melacak barang yang hampir habis, dan menghasilkan laporan inventaris dengan mudah.</p>
            </div>
        </div>

        <!-- Features Section -->
        <h2 class="text-center fw-bold mb-5">Fitur Unggulan</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card feature-card shadow-sm p-4 text-center">
                    <div class="feature-icon bg-primary bg-opacity-10 text-primary">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Real-time Monitoring</h4>
                    <p class="text-muted">Pantau stok barang Anda secara real-time dengan dashboard yang informatif dan mudah dipahami.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-sm p-4 text-center">
                    <div class="feature-icon bg-success bg-opacity-10 text-success">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Notifikasi Otomatis</h4>
                    <p class="text-muted">Dapatkan pemberitahuan ketika stok barang hampir habis atau mencapai batas minimum.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-sm p-4 text-center">
                    <div class="feature-icon bg-warning bg-opacity-10 text-warning">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Laporan Lengkap</h4>
                    <p class="text-muted">Generate laporan inventaris dengan berbagai format untuk analisis bisnis yang lebih baik.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-sm p-4 text-center">
                    <div class="feature-icon bg-info bg-opacity-10 text-info">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Responsive Design</h4>
                    <p class="text-muted">Akses sistem dari berbagai perangkat - desktop, tablet, atau smartphone dengan tampilan optimal.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-sm p-4 text-center">
                    <div class="feature-icon bg-danger bg-opacity-10 text-danger">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Keamanan Data</h4>
                    <p class="text-muted">Data inventaris Anda terlindungi dengan sistem keamanan berlapis dan backup otomatis.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-sm p-4 text-center">
                    <div class="feature-icon bg-secondary bg-opacity-10 text-secondary">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Multi-user Support</h4>
                    <p class="text-muted">Kelola tim dengan sistem role dan permission yang fleksibel sesuai kebutuhan bisnis.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="col-md-3">
						<div class="card team-card shadow-sm border-0 text-center p-4">
							<img src="https://via.placeholder.com/120/667eea/ffffff?text=A" alt="Team Member" class="team-img">
							<h5 class="fw-bold mt-3 mb-1">Ahmad Fauzi</h5>
							<p class="text-muted mb-2">Project Manager</p>
							<div class="social-links">
								<a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
								<a href="#" class="text-info me-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="text-danger"><i class="fab fa-instagram"		></i></a>
							</div>
						</div>
					</div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="col-md-3">
						<div class="card team-card shadow-sm border-0 text-center p-4">
							<img src="https://via.placeholder.com/120/764ba2/ffffff?text=S" alt="Team Member" class="team-img">
							<h5 class="fw-bold mt-3 mb-1">Siti Nurhaliza</h5>
							<p class="text-muted mb-2">Lead Developer</p>
							<div class="social-links">
								<a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
								<a href="#" class="text-info me-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="col-md-3">
						<div class="card team-card shadow-sm border-0 text-center p-4">
							<img src="https://via.placeholder.com/120/667eea/ffffff?text=B" alt="Team Member" class="team-img">
							<h5 class="fw-bold mt-3 mb-1">Budi Santoso</h5>
							<p class="text-muted mb-2">UI/UX Designer</p>
							<div class="social-links">
								<a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
								<a href="#" class="text-info me-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="col-md-3">
						<div class="card team-card shadow-sm border-0 text-center p-4">
							<img src="https://via.placeholder.com/120/764ba2/ffffff?text=D" alt="Team Member" class="team-img">
							<h5 class="fw-bold mt-3 mb-1">Dewi Lestari</h5>
							<p class="text-muted mb-2">Quality Assurance</p>
							<div class="social-links">
								<a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
								<a href="#" class="text-info me-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="text-danger"><i class="fab 	fa-instagram"></i></a>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container mb-5">
        <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="card-body text-center text-white py-5">
                <h2 class="fw-bold mb-3">Siap Mengelola Inventaris Anda?</h2>
                <p class="lead mb-4">Bergabunglah dengan ratusan bisnis yang telah mempercayai sistem kami</p>
                <a href="{{route('home')}}" class="btn btn-light btn-lg px-5">Mulai Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h5 class="fw-bold mb-3">Dashboard Inventaris</h5>
                    <p class="text-muted">Solusi manajemen inventaris yang efisien untuk bisnis modern.</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="home.html" class="text-muted text-decoration-none">Home</a></li>
                        <li><a href="barang.html" class="text-muted text-decoration-none">Barang</a></li>
                        <li><a href="about.html" class="text-muted text-decoration-none">About</a></li>
                        <li><a href="company.html" class="text-muted text-decoration-none">Company</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Kontak</h6>
                    <p class="text-muted mb-1"><i class="fas fa-envelope me-2"></i>info@inventaris.com</p>
                    <p class="text-muted mb-1"><i class="fas fa-phone me-2"></i>+62 812-3456-7890</p>
                    <p class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>Jakarta, Indonesia</p>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 Dashboard Inventaris. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>