@extends('layouts.app')

@section('title', 'RFT')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h2 class="display-2 text-white mb-4 animated slideInDown">RFT</h2>
            <nav aria-label="breadcrumb animated slideInDown">
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-3">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Fact End -->

      <!-- Dashboard Section -->
    <div class="dashboard-section py-4 py-lg-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 600px;">
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">RFT Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Right First Time quality metrics and production statistics</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded-3 shadow-sm">
                                <div class="text-center p-4">
                                    <h1 class="text-secondary fw-bold mb-3">ON PROGRESS CONNECT TO ERP</h1>
                                    <p class="text-muted mb-0">Dashboard sedang dalam proses integrasi dengan ERP system</p>
                                </div>
                            </div>
                            <!-- Uncomment when ready to activate
                            <iframe src="https://lookerstudio.google.com/embed/reporting/75f78948-575c-4ef4-aca3-73cfa2a8eaeb/page/kGm6D"
                                    frameborder="0"
                                    allowfullscreen
                                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                                    title="RFT Dashboard"
                                    class="dashboard-iframe border-0 shadow-lg rounded-3">
                            </iframe>
                            -->
                        </div>
                    </div>
                    <!-- Dashboard Info -->
                    <div class="dashboard-info text-center mt-3 mt-lg-4">
                        <p class="dashboard-note small text-muted mb-0">
                            <i class="fas fa-link me-2"></i>
                            Coming soon: ERP integration for real-time RFT tracking and analysis
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
