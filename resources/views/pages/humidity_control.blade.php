@extends('layouts.app')

@section('title', 'Humidity Control')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Humidity Control</h1>
            <p class="lead text-white animated slideInDown">Environmental monitoring and control system</p>
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
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Environmental Monitoring Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Real-time humidity and temperature monitoring systems</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://enggtemp.weebly.com/" title="Humidity Control Dashboard"
                                class="dashboard-iframe border-0 shadow-lg rounded-3"
                                allowfullscreen
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                            </iframe>
                        </div>
                    </div>
                    <!-- Dashboard Info -->
                    <div class="dashboard-info text-center mt-3 mt-lg-4">
                        <p class="dashboard-note small text-muted mb-0">
                            <i class="fas fa-tint me-2"></i>
                            Live environmental monitoring with real-time data visualization
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Device & Overview Section -->
    <div class="container-fluid py-5 humidity-info-section">
        <div class="container py-5">
            <!-- Main Title Section -->
            <div class="text-center mb-5">
                <h2 class="display-4 text-primary mb-3">Device & Maintenance Overview</h2>
                <p class="lead text-muted">Advanced humidity monitoring system for optimal environmental control</p>
            </div>

            <!-- Content Section Layout -->
            <div class="row g-5 align-items-center">
                <!-- Left Side: Image -->
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="humidity-image-container">
                        <img src="{{ asset('storage/images/humidity/humidity.jpg') }}" class="img-fluid w-100 rounded shadow-lg"
                            alt="Workers monitoring digital humidity screen" onerror="this.src='/asset/qualityprod.png'">
                        <div class="image-caption text-center mt-3 text-muted">
                            <small><i class="fas fa-users me-2"></i>Workers monitoring digital humidity control systems</small>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Textual Information -->
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="humidity-content">
                        <p class="lead mb-4 text-justify">
                            <strong>Humidity</strong> refers to the amount of water vapor present in the air. It's a measure
                            of the moisture content in the atmosphere. High humidity means there's a lot of moisture in the
                            air, while low humidity indicates less moisture.
                        </p>

                        <h3 class="h4 text-primary mb-4"><i class="fas fa-chart-line me-2"></i>Importance of Humidity Control</h3>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <h5 class="card-title text-primary">Indoor Quality</h5>
                                        <p class="card-text small">Ensuring pleasant indoor environments by preventing excessive dryness or moisture</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h5 class="card-title text-success">Health & Safety</h5>
                                        <p class="card-text small">Minimizing mold, allergens, and respiratory issues associated with high humidity</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-archive"></i>
                                        </div>
                                        <h5 class="card-title text-info">Asset Protection</h5>
                                        <p class="card-text small">Protecting artifacts, documents, and materials from humidity fluctuations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-industry"></i>
                                        </div>
                                        <h5 class="card-title text-warning">Production Quality</h5>
                                        <p class="card-text small">Maintaining product quality, safety, and process efficiency in various industries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Device Section -->
    <div class="container-fluid py-5 device-section bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 text-primary mb-3">Device Specifications</h2>
                <p class="lead text-muted">Advanced humidity monitoring technology developed in-house</p>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="device-content">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="card-title text-primary mb-4"><i class="fas fa-microchip me-2"></i>Technical Specifications</h3>

                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-bottom pb-2 mb-3">
                                            <div class="icon-box bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-size: 14px;">
                                                <i class="fas fa-bullseye"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1 text-primary">Purpose</h5>
                                                <p class="mb-0 text-muted small">Monitor temperature and humidity in different areas/buildings</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-bottom pb-2 mb-3">
                                            <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-size: 14px;">
                                                <i class="fas fa-thermometer-half"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1 text-success">Sensor</h5>
                                                <p class="mb-0 text-muted small">DHT-22 sensor (same as RHT Datalogger)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-bottom pb-2 mb-3">
                                            <div class="icon-box bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-size: 14px;">
                                                <i class="fas fa-wifi"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1 text-info">Connectivity</h5>
                                                <p class="mb-0 text-muted small">WiFi module for real-time data transmission</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-bottom pb-2 mb-3">
                                            <div class="icon-box bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-size: 14px;">
                                                <i class="fas fa-database"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1 text-warning">Data Storage</h5>
                                                <p class="mb-0 text-muted small">Sends data to database and dashboard</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-box bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-size: 14px;">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1 text-secondary">Accuracy</h5>
                                                <p class="mb-0 text-muted small">High real-time accuracy monitoring</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="device-image-container">
                        <img src="{{ asset('storage/images/humidity/humidity device.jpg') }}" class="img-fluid w-100 rounded shadow-lg"
                            alt="Humidity monitoring device prototype" onerror="this.src='/asset/qualityprod.png'">
                        <div class="device-info mt-3 p-3 bg-white rounded shadow-sm border-start border-4 border-primary">
                            <h5 class="text-primary mb-2"><i class="fas fa-info-circle me-2"></i>Development Team</h5>
                            <p class="mb-0 text-muted">Device prototype developed in-house by Parkland Indonesia Jepara team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Overview Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 text-primary mb-3">Device Installation Locations</h2>
                <p class="lead text-muted">Currently, humidity devices are installed at <strong>14 strategic points</strong> across Parkland Indonesia Jepara facilities</p>
            </div>

            <div class="row g-5 align-items-start">
                <!-- Left Side: Location Table -->
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="location-table-container">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Installation Sites</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Building / Area</th>
                                                <th scope="col" class="text-center">Devices</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-industry text-primary me-2"></i>Factory 1</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-warehouse text-success me-2"></i>FGWH F2</td>
                                                <td class="text-center"><span class="badge bg-success">2</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-warehouse text-primary me-2"></i>FGWH F5</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                             <tr>
                                                <td><i class="fas fa-warehouse text-primary me-2"></i>FGWH 6</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-layer-group text-primary me-2"></i>B/C Grade Area</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-warehouse text-success me-2"></i>FGWH F4</td>
                                                <td class="text-center"><span class="badge bg-success">2</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-tools text-primary me-2"></i>Laminating B1</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-tools text-primary me-2"></i>Laminating B2</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-truck text-success me-2"></i>Incoming B1</td>
                                                <td class="text-center"><span class="badge bg-success">2</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-truck text-primary me-2"></i>Incoming B2</td>
                                                <td class="text-center"><span class="badge bg-primary">1</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer bg-primary text-white text-center">
                                <div class="d-inline-block">
                                    <h5 class="mb-0"><i class="fas fa-tint me-2"></i>Total Devices: <strong>14</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Location Image -->
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="location-image-container">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('storage/images/humidity/location.png') }}"
                                class="card-img-top" alt="Device location map/diagram"
                                onerror="this.src='/asset/qualityprod.png'" style="height: 350px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><i class="fas fa-map-marked-alt me-2"></i>Coverage Areas</h5>
                                <p class="card-text text-muted">Strategic device installation ensures comprehensive environmental monitoring coverage across all critical production and storage areas in Parkland Indonesia Jepara facilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Maintenance Section -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 text-primary mb-3">Maintenance Procedures</h2>
                <p class="lead text-muted">Comprehensive maintenance program to ensure optimal device performance</p>
            </div>

            <!-- Maintenance Content -->
            <div class="row g-5 align-items-center">
                <!-- Left Side: Maintenance Procedures -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="icon-box bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="card-title text-warning">Regular Schedule</h5>
                                            <p class="card-text">Monthly calibration checks and quarterly comprehensive maintenance to ensure accuracy and reliability.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="icon-box bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="fas fa-microchip"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="card-title text-info">Sensor Calibration</h5>
                                            <p class="card-text">DHT-22 sensor calibration using reference devices to maintain measurement accuracy within ±2% RH.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="fas fa-wifi"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="card-title text-success">Connectivity Check</h5>
                                            <p class="card-text">WiFi connection verification and data transmission testing to ensure real-time monitoring functionality.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Maintenance Image & Metrics -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="card border-0 shadow-sm mb-4">
                        <img src="{{ asset('storage/images/humidity/maintenance.jpg') }}"
                             class="card-img-top" alt="Maintenance procedure for humidity devices"
                             onerror="this.src='/asset/qualityprod.png'" style="height: 280px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><i class="fas fa-tools me-2"></i>Professional Maintenance</h5>
                            <p class="card-text text-muted">Regular maintenance ensures optimal device performance and data accuracy across all monitoring points.</p>
                        </div>
                    </div>

                    <!-- Key Performance Metrics -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Performance Metrics</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 text-center">
                                <div class="col-6">
                                    <div class="metric-box p-3 bg-light rounded">
                                        <h3 class="text-primary mb-0">98%</h3>
                                        <small class="text-muted">Device Uptime</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="metric-box p-3 bg-light rounded">
                                        <h3 class="text-success mb-0">24/7</h3>
                                        <small class="text-muted">Monitoring</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="metric-box p-3 bg-light rounded">
                                        <h3 class="text-warning mb-0">±2%</h3>
                                        <small class="text-muted">Accuracy Rate</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="metric-box p-3 bg-light rounded">
                                        <h3 class="text-info mb-0">30min</h3>
                                        <small class="text-muted">Response Time</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Activities Section -->
            <div class="row mt-5">
                <div class="col-12 text-center mb-4">
                    <h3 class="h4 text-primary mb-3">Maintenance Team Activities</h3>
                    <p class="lead text-muted">Professional team ensuring system reliability and performance</p>
                </div>

                <div class="col-lg-6 mb-4 wow fadeIn" data-wow-delay=".6s">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('storage/images/humidity/mantenance 1.jpg') }}"
                             class="card-img-top" alt="Team performing maintenance"
                             onerror="this.src='/asset/qualityprod.png'" style="height: 220px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><i class="fas fa-users me-2"></i>Expert Team</h5>
                            <p class="card-text text-muted">Technical specialists performing routine maintenance and calibration on humidity monitoring equipment</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success mb-3"><i class="fas fa-clipboard-check me-2"></i>Documentation & Quality</h5>
                            <p class="card-text text-muted mb-3">Comprehensive maintenance logs and performance records for traceability and quality assurance:</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Detailed maintenance logs</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Performance tracking records</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Quality assurance procedures</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Continuous improvement monitoring</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection