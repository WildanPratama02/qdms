@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            {{-- <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol> --}}
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="/asset/PWJ.png" class="d-block w-100" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary display-1 mb-4 animated fadeInRight">QDMS</h6>
                            <h1 class="text-white animated fadeInUp">QUALITY DATA MANAGEMENT SYSTEM</h1>

                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <img src="/asset/rqc.jpg"class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption">
                         <div class="container carousel-content">
                            <h6 class="text-secondary display-1 mb-4 animated fadeInRight">QDMS</h6>
                            <h1 class="text-white animated fadeInUp">QUALITY DATA MANAGEMENT SYSTEM</h1>

                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-info py-5">
        <div class="container">
            <h2 class="text-white text-center">VISI-MISI PERUSAHAAN</h2>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class="company-vision-section position-relative overflow-hidden">
        <div class="vision-background">
            <img src="/asset/background.jpg" class="w-100 h-100" alt="Company Background" style="object-fit: cover;">
        </div>
        <div class="vision-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="vision-content text-white text-center" style="position: relative; z-index: 100;">
                            <!-- Vision -->
                            <div class="vision-item mb-5 mb-lg-5 wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="vision-title h3 h2-lg mb-4">VISI</h2>
                                <p class="vision-text fs-5 fs-lg-4 mb-2">
                                    Menjadi perusahaan yang paling kreatif, dapat diandalkan dan dipercaya bagi mitra kami.
                                </p>
                                <p class="vision-text-en fst-italic fs-6 fs-lg-5">
                                    "Be the most creative, trusted and reliable manufacturing source for our partners"
                                </p>
                            </div>

                            <!-- Mission -->
                            <div class="vision-item mb-5 mb-lg-5 wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="vision-title h3 h2-lg mb-4">MISI</h2>
                                <p class="vision-text fs-5 fs-lg-4 mb-2">
                                    Menjadi perusahaan yang paling kreatif, dapat diandalkan dan dipercaya bagi mitra kami.
                                </p>
                                <p class="vision-text-en fst-italic fs-6 fs-lg-5">
                                    "Be the most creative, trusted and reliable manufacturing source for our partners"
                                </p>
                            </div>

                            <!-- Value -->
                            <div class="vision-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="vision-title h3 h2-lg mb-4">VALUE</h2>
                                <p class="vision-text fs-4 fs-lg-3 fw-bold">
                                    GOOD PEOPLE, GOOD CULTURE, GOOD COMPANY
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Start -->
    <div class="container-fluid bg-info py-5">
        <div class="container">
            <h2 class="text-white text-center">VISI-MISI QUALITY</h2>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Quality Vision Start -->
    <div class="quality-vision-section position-relative overflow-hidden">
        <div class="quality-background">
            <img src="/asset/QC.jpg" class="w-100 h-100" alt="Quality Background" style="object-fit: cover;">
        </div>
        <div class="quality-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="quality-content text-white text-center" style="position: relative; z-index: 100;">
                            <!-- Vision -->
                            <div class="quality-item mb-5 mb-lg-5 wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="quality-title h3 h2-lg mb-4">VISI</h2>
                                <p class="quality-text fs-5 fs-lg-4 mb-2">
                                    Menjadi perusahaan manufaktur Adidas nomor satu di dunia
                                </p>
                                <p class="quality-text-en fst-italic fs-6 fs-lg-5">
                                    "#1 Adidas manufacturer in the world"
                                </p>
                            </div>

                            <!-- Mission -->
                            <div class="quality-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="quality-title h3 h2-lg mb-4">MISI</h2>
                                <p class="quality-text fs-5 fs-lg-4 mb-2">
                                    Menyediakan Produk yang bagus dengan harga paling kompetitif di pasar
                                </p>
                                <p class="quality-text-en fst-italic fs-6 fs-lg-5">
                                    "Supply beautiful product with the most competitive price to the market"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quality Vision End -->

    <!-- Our Focus Section -->
<div class="our-focus-section py-5 py-lg-6">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mx-auto pb-4 pb-lg-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h2 class="focus-header h2 h1-lg text-primary mb-3">Our Focus</h2>
            <p class="focus-subtitle lead text-muted">Key areas that drive our quality management excellence</p>
        </div>

        <!-- Focus Grid -->
        <div class="row g-3 g-lg-4 g-xl-5">
            <!-- Left Side - KPI Score Image -->
            <div class="col-12 col-lg-5 order-lg-1">
                <div class="kpi-card wow fadeInLeft" data-wow-delay=".3s">
                    <div class="kpi-image-container">
                        <img src="/asset/q-kpi score.png" alt="Quality KPI Score" class="kpi-image w-100">
                        <div class="kpi-overlay text-white text-center p-4">
                            <h3 class="kpi-title h4 mb-2">Quality KPI Score</h3>
                            <p class="kpi-description mb-0">Real-time performance metrics and quality indicators</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Focus Items -->
            <div class="col-12 col-lg-7 order-lg-2">
                <div class="row g-3 g-lg-4 g-xl-5 h-100">
                    <!-- Audit -->
                    <div class="col-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="focus-item h-100">
                            <div class="focus-card h-100 position-relative overflow-hidden rounded shadow-sm border-0">
                                <img src="/asset/audit.png" class="focus-img w-100" alt="Audit" style="object-fit: cover; height: 200px;">
                                <div class="focus-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 transition-all">
                                    <div class="text-center text-white p-3">
                                        <h4 class="focus-title h5 mb-2">Audit</h4>
                                        <p class="focus-desc small mb-0 d-none d-md-block">Internal and external quality audits</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RFT -->
                    <div class="col-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="focus-item h-100">
                            <div class="focus-card h-100 position-relative overflow-hidden rounded shadow-sm border-0">
                                <img src="/asset/rft.png" class="focus-img w-100" alt="RFT" style="object-fit: cover; height: 200px;">
                                <div class="focus-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 transition-all">
                                    <div class="text-center text-white p-3">
                                        <h4 class="focus-title h5 mb-2">RFT</h4>
                                        <p class="focus-desc small mb-0 d-none d-md-block">Right First Time quality metrics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Q-KPI -->
                    <div class="col-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="focus-item h-100">
                            <div class="focus-card h-100 position-relative overflow-hidden rounded shadow-sm border-0">
                                <img src="/asset/kpi.png" class="focus-img w-100" alt="Q-KPI" style="object-fit: cover; height: 200px;">
                                <div class="focus-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 transition-all">
                                    <div class="text-center text-white p-3">
                                        <h4 class="focus-title h5 mb-2">Q-KPI</h4>
                                        <p class="focus-desc small mb-0 d-none d-md-block">Quality Key Performance Indicators</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ambassador -->
                    <div class="col-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="focus-item h-100">
                            <div class="focus-card h-100 position-relative overflow-hidden rounded shadow-sm border-0">
                                <img src="/asset/ambassador.jpg" class="focus-img w-100" alt="Ambassador" style="object-fit: cover; height: 200px;">
                                <div class="focus-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 transition-all">
                                    <div class="text-center text-white p-3">
                                        <h4 class="focus-title h5 mb-2">Ambassador</h4>
                                        <p class="focus-desc small mb-0 d-none d-md-block">Quality champion programs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
    <hr>

    <!-- Dashboard Embed Section -->
    <div class="dashboard-section py-4 py-lg-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 600px;">
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Performance Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Real-time quality metrics and performance indicators</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://drive.google.com/file/d/1i8xSNojIfhgDLi9Oh2sPFC00ZHhbn0Ib/preview"
                                    allow="autoplay"
                                    title="Dashboard Preview"
                                    class="dashboard-iframe border-0 shadow-lg rounded-3">
                            </iframe>
                        </div>
                    </div>
                    <!-- Dashboard Info -->
                    <div class="dashboard-info text-center mt-3 mt-lg-4">
                        <p class="dashboard-note small text-muted mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Interactive dashboard with real-time quality management data
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
