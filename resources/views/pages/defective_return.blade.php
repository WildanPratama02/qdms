@extends('layouts.app')

@section('title', 'Defective Return')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h2 class="display-2 text-white mb-4 animated slideInDown">Defective Return</h2>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-3">
        <div class="container">
        </div>
    </div>
    <!-- Fact End -->

    <!-- In-frame Looker Studio -->
    <!-- Dashboard Section -->
    <div class="dashboard-section py-4 py-lg-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 600px;">
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Defective Return Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Track and analyze defective product returns and quality issues
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://lookerstudio.google.com/embed/reporting/050a7d77-aabe-41ab-8cd2-cb14a2af5075/page/p_3yunmwi4td"
                                frameborder="0"
                                allowfullscreen
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                                title="Defective Return Dashboard"
                                class="dashboard-iframe border-0 shadow-lg rounded-3">
                            </iframe>
                        </div>
                    </div>
                    <!-- Dashboard Info -->
                    <div class="dashboard-info text-center mt-3 mt-lg-4">
                        <p class="dashboard-note small text-muted mb-0">
                            <i class="fas fa-chart-bar me-2"></i>
                            Daily tracking of quality metrics and production performance
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="/asset/qualityprod.png" class="img-fluid w-100 rounded shadow" alt="Quality Production">
                        <!-- <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                        <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div> -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <div class="content-section">
                        <h1 class="mb-4 text-primary">Defective Return Management</h1>
                        <p class="lead mb-4">
                            Defective returns refer to products that customers return due to defects or malfunctions.
                            This includes items that are damaged, broken, or not functioning properly upon arrival or after a short period of use.
                        </p>
                        <div class="key-points">
                            <div class="point-item mb-3">
                                <h5 class="text-secondary"><i class="fas fa-search me-2"></i>Inspection Process</h5>
                                <p>Thorough inspection and analysis of returned defective products to identify root causes and prevent future occurrences.</p>
                            </div>
                            <div class="point-item mb-3">
                                <h5 class="text-success"><i class="fas fa-exchange-alt me-2"></i>Resolution Options</h5>
                                <p>Multiple resolution paths including replacement, repair, or refunding of defective items based on severity and customer preference.</p>
                            </div>
                            <div class="point-item mb-3">
                                <h5 class="text-info"><i class="fas fa-chart-line me-2"></i>Quality Improvement</h5>
                                <p>Continuous improvement of quality processes based on defect analysis and customer feedback to reduce return rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection