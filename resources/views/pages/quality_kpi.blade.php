@extends('layouts.app')

@section('title', 'Quality KPI')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Quality KPI</h1>
            <p class="lead text-white animated slideInDown">Quality Key Performance Indicators & Metrics</p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-3">
    </div>
    <!-- Fact End -->

    <!-- Dashboard Section -->
    <div class="container-fluid dashboard-section py-4 py-lg-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 600px;">
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Quality KPI Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Real-time quality performance monitoring and metrics analysis</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://lookerstudio.google.com/embed/reporting/79a8c7b1-4c89-4eef-a465-bb10c600ab15/page/p_2ul6f30yfd"
                                    frameborder="0"
                                    allowfullscreen
                                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                                    title="Quality KPI Dashboard"
                                    class="dashboard-iframe border-0 shadow-lg rounded-3">
                            </iframe>
                        </div>
                    </div>
                    <!-- Dashboard Info -->
                    <div class="dashboard-info text-center mt-3 mt-lg-4">
                        <p class="dashboard-note small text-muted mb-0">
                            <i class="fas fa-chart-line me-2"></i>
                            Interactive quality metrics dashboard with comprehensive KPI tracking
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Quality KPI Information Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 text-primary mb-3">Understanding Quality KPI</h2>
                <p class="lead text-muted">Key Performance Indicators for Quality Management Excellence</p>
            </div>

            <!-- Main Content Layout -->
            <div class="row g-5 align-items-center">
                <!-- Left Side: Image -->
                <div class="col-lg-5 wow fadeIn" data-wow-delay=".3s">
                    <div class="quality-kpi-image-container">
                        <img src="{{ asset('asset/qkpi.png') }}" class="img-fluid w-100 rounded shadow-lg" alt="Quality KPI" onerror="this.src='/asset/qualityprod.png'">
                        <div class="image-caption text-center mt-3 text-muted">
                            <small><i class="fas fa-chart-bar me-2"></i>Quality KPI visualization and metrics dashboard</small>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Content -->
                <div class="col-lg-7 wow fadeIn" data-wow-delay=".5s">
                    <div class="quality-kpi-content">
                        <h3 class="h3 text-primary mb-4">What is Quality KPI?</h3>

                        <p class="lead mb-4 text-justify">
                            A Quality Key Performance Indicator (KPI) is a measurable value that demonstrates how effectively a company is achieving its quality objectives. These KPIs are used to evaluate the performance of a business in relation to its quality management system, processes, products, or services.
                        </p>

                        <h4 class="h4 text-secondary mb-4"><i class="fas fa-list-check me-2"></i>Common Quality KPIs</h4>

                        <div class="kpi-cards">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="icon-box bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-size: 14px;">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="card-title text-danger">Defect Rate</h5>
                                                    <p class="card-text small">Number of defects compared to total products/services produced</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-size: 14px;">
                                                        <i class="fas fa-smile"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="card-title text-success">Customer Satisfaction</h5>
                                                    <p class="card-text small">CSAT measure through surveys and customer feedback</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="icon-box bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-size: 14px;">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="card-title text-primary">First Pass Yield</h5>
                                                    <p class="card-text small">Products meeting quality standards without rework</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="icon-box bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-size: 14px;">
                                                        <i class="fas fa-undo"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="card-title text-warning">Return Rate</h5>
                                                    <p class="card-text small">Products returned due to quality issues vs. total sold</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="icon-box bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-size: 14px;">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="card-title text-info">Cost of Quality</h5>
                                                    <p class="card-text small">Total costs for prevention, appraisal, and failure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="icon-box bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-size: 14px;">
                                                        <i class="fas fa-truck"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="card-title text-secondary">On-Time Delivery</h5>
                                                    <p class="card-text small">Products delivered on or before agreed date</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional KPI -->
                        <div class="mt-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="icon-box bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 16px;">
                                                <i class="fas fa-handshake"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="card-title text-primary">Supplier Quality</h5>
                                            <p class="card-text">The percentage of materials or components received from suppliers that meet quality standards and specifications, ensuring consistent input quality for production processes.</p>
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

    <!-- Benefits Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 text-primary mb-3">Benefits of Quality KPI</h2>
                <p class="lead text-muted">Why tracking Quality KPIs matters for your business</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 wow fadeIn" data-wow-delay=".2s">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <h5 class="card-title text-primary">Performance Monitoring</h5>
                            <p class="card-text text-muted">Real-time tracking of quality metrics enables quick identification of issues and trends for immediate corrective action.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-trophy fa-2x"></i>
                            </div>
                            <h5 class="card-title text-success">Continuous Improvement</h5>
                            <p class="card-text text-muted">Data-driven insights help organizations implement systematic improvements and achieve operational excellence.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeIn" data-wow-delay=".6s">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h5 class="card-title text-warning">Customer Satisfaction</h5>
                            <p class="card-text text-muted">Higher quality standards lead to increased customer loyalty, better reviews, and enhanced brand reputation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection