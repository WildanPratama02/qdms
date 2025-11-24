@extends('layouts.app')

@section('title', 'Q-KPI')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Q-KPI</h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">Projects</li>
                    </ol>
                </nav> -->
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-3">
        <div class="container">
            <div class="row">
                <!-- <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
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
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Quality KPI Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Comprehensive quality key performance indicators and metrics</p>
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
                            Real-time quality metrics with interactive data visualization
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-lg-5 wow fadeIn" data-wow-delay=".3s">
                    <div class="position-relative">
                        <img src="asset/qkpi.png" class="img-fluid w-100 rounded shadow-sm" alt="Quality KPI">
                    </div>
                </div>
                <div class="col-12 col-lg-7 wow fadeIn" data-wow-delay=".5s">
                    <h1 class="mb-4">QUALITY-KPI</h1>
                    <p class="mb-4" style="text-align: justify">A Quality Key Performance Indicator (KPI) is a measurable
                        value that demonstrates how effectively a company is achieving its quality objectives. These KPIs
                        are used to evaluate the performance of a business in relation to its quality management system,
                        processes, products, or services. Some common Quality KPIs include:
                    <ul class="rapi">
                        <li><b>Defect Rate:</b> The number of defects found in a product or service compared to the total
                            number of products or services produced or delivered.</li>
                        <li><b>Customer Satisfaction Score (CSAT):</b> A measure of how satisfied customers are with a
                            company's products or services, typically collected through surveys or feedback.</li>
                        <li><b>First Pass Yield (FPY):</b> The percentage of products or services that meet quality
                            standards without the need for rework or correction during the first production cycle.</li>
                        <li><b>Return Rate:</b> The percentage of products returned by customers due to quality issues
                            compared to the total number of products sold.</li>
                        <li><b>Cost of Quality (CoQ):</b> The total costs incurred by a company to ensure product or service
                            quality, including prevention, appraisal, and failure costs.</li>
                        <li><b>On-Time Delivery:</b> The percentage of products or services delivered to customers on or
                            before the agreed-upon delivery date.</li>
                        <li><b>Supplier Quality:</b> The percentage of materials or components received from suppliers that
                            meet quality standards and specifications.</li>
                    </ul>
                    <p>Overall, the role of an AQL inspector is crucial in maintaining product quality, minimizing defects,
                        and ensuring customer satisfaction in manufacturing environments.</p></br>
                    <!-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> -->

                    <!-- End Project -->
@endsection