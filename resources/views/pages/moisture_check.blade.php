@extends('layouts.app')

@section('title', 'Moisture Check')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Moisture Control</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid bg-secondary py-3">
    </div>

    <!-- Dashboard Section -->
    <div class="container-fluid dashboard-section py-4 py-lg-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 600px;">
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Moisture Monitoring Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Real-time moisture monitoring and quality control metrics</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://lookerstudio.google.com/embed/reporting/eb46f77a-0351-4e0c-9fa3-09872778ed59/page/Tr41D"
                                title="Moisture Dashboard" class="dashboard-iframe border-0 shadow-lg rounded-3"
                                allowfullscreen
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
                        </div>
                    </div>
                    <!-- Dashboard Info -->
                    <div class="dashboard-info text-center mt-3 mt-lg-4">
                        <p class="dashboard-note small text-muted mb-0">
                            <i class="fas fa-tint me-2"></i>
                            Live moisture content monitoring and analysis dashboard
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Images Gallery Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h2 class="h3 h2-lg text-primary mb-3">Moisture Control Process</h2>
                <p class="lead text-muted">Visual documentation of moisture checking procedures and equipment</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 overflow-hidden">
                        <img src="{{ asset('asset/moisture1.jpeg') }}" class="card-img-top img-fluid" alt="Moisture Check Equipment" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Moisture Detection</h5>
                            <p class="card-text text-muted small text-center">Advanced moisture detection equipment in action</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 overflow-hidden">
                        <img src="{{ asset('asset/moisture2.jpeg') }}" class="card-img-top img-fluid" alt="Quality Control" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Quality Control</h5>
                            <p class="card-text text-muted small text-center">Quality inspection process for moisture levels</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 overflow-hidden">
                        <img src="{{ asset('asset/moisture3.jpeg') }}" class="card-img-top img-fluid" alt="Testing Process" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Material Testing</h5>
                            <p class="card-text text-muted small text-center">Systematic testing of materials for moisture content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Information Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="content">
                        <div class="text-center mb-5">
                            <h2 class="h3 h2-lg text-primary mb-4">Understanding Moisture Control</h2>
                            <p class="lead text-muted">
                                Critical process in shoe manufacturing to ensure product quality and durability
                            </p>
                        </div>

                        <p class="text-justify mb-4" style="text-indent: 2em; line-height: 1.6;">
                            Moisture checking in shoe manufacturing refers to the process of assessing the moisture content in
                            various materials used to make shoes, such as leather, fabrics, and adhesives. Controlling moisture
                            levels is crucial because excessive moisture can lead to several problems:
                        </p>

                        <div class="row g-4 mb-4">
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-danger text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="fas fa-bacteria fa-2x"></i>
                                        </div>
                                        <h5 class="card-title text-danger">Mold & Mildew</h5>
                                        <p class="card-text">
                                            Moisture creates an ideal environment for mold growth, which can damage the shoe's appearance and weaken its structure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="fas fa-exclamation-triangle fa-2x"></i>
                                        </div>
                                        <h5 class="card-title text-warning">Material Degradation</h5>
                                        <p class="card-text">
                                            Too much moisture can weaken materials like leather, making them brittle, cracked, or deformed over time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="fas fa-unlink fa-2x"></i>
                                        </div>
                                        <h5 class="card-title text-info">Adhesive Failure</h5>
                                        <p class="card-text">
                                            Excessive moisture can reduce the effectiveness of adhesives, leading to delamination or separation of shoe components.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="highlight p-4 bg-white rounded border-start border-4 border-primary shadow-sm">
                            <h5 class="text-primary mb-3"><i class="fas fa-tint me-2"></i>Solution & Prevention</h5>
                            <p class="text-justify mb-0" style="text-indent: 2em; line-height: 1.6;">
                                Manufacturers typically use moisture meters or sensors to measure the moisture content at different
                                stages of production. By monitoring and controlling moisture levels, manufacturers can ensure the
                                quality and durability of their shoes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection