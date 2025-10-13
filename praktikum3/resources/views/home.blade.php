<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventaris</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(135deg, #2c3e50, #3498db);
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .hero-section {
            background: linear-gradient(135deg, #e3f2fd, #f5f5f5);
            border: 2px solid #e0e0e0;
        }
        .stat-icon {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 20px;
            margin-right: 20px;
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-warehouse me-2"></i>
                Dashboard Inventaris
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang') }}">
                            <i class="fas fa-boxes me-1"></i>Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('company_profile') }}">
                            <i class="fas fa-building me-1"></i>Company Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5">

        <div class="hero-section p-5 mb-4 rounded-3 shadow-sm">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold text-dark">Selamat Datang di Dasbor Inventaris</h1>
                <p class="col-md-8 fs-5 text-muted mb-4">Gunakan panel ini untuk memantau dan mengelola stok barang Anda secara efisien.</p>
                <hr class="my-4">
                <a href="{{ route('barang') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-boxes-stacked me-2"></i> 📦 Kelola Barang
                </a>
            </div>
        </div>

        <h2 class="mb-4 fw-bold text-dark">Ringkasan Sistem</h2>
        <div class="row g-4">
		
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="stat-icon">
                            <i class="fas fa-box fa-3x text-primary"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="text-muted mb-1">Total Barang</div>
                            <div class="fs-1 fw-bold text-primary">{{ $jumlahBarang}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="stat-icon">
                            <i class="fas fa-tags fa-3x text-success"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="text-muted mb-1">Jumlah Kategori</div>
                            <div class="fs-1 fw-bold text-success">12</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="stat-icon">
                            <i class="fas fa-triangle-exclamation fa-3x text-warning"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="text-muted mb-1">Stok Hampir Habis</div>
                            <div class="fs-1 fw-bold text-warning">3</div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="stat-icon">
                            <i class="fas fa-dollar-sign fa-3x text-info"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="text-muted mb-1">Nilai Inventaris</div>
                            <div class="fs-3 fw-bold text-info">Rp 15.2Jt</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Dashboard Inventaris. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>