@extends('layouts.app')

@section('title', 'Daily Performance Quality')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Daily Performance Report</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-3">
    </div>
    <!-- Fact End -->
    <!-- Dashboard Section -->
    <div class="dashboard-section py-4 py-lg-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-4 mb-lg-5" style="max-width: 600px;">
                <h2 class="dashboard-title h3 h2-lg text-primary mb-3">Daily Performance Dashboard</h2>
                <p class="dashboard-subtitle lead text-muted">Daily quality performance metrics and production indicators
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="dashboard-container">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://lookerstudio.google.com/embed/reporting/d9942398-d643-44a5-8e86-edb77dec3268/page/p_rikxq8h2od"
                                frameborder="0" allowfullscreen
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                                title="Daily Performance Dashboard" class="dashboard-iframe border-0 shadow-lg rounded-3">
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
    <!-- Dashboard End -->

    <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <h1 class="text-white fw-bold d-block">STOPLINE</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/stopline.jpg') }}" alt="Stopline Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h1>Stopline</h1>
                    <p>
                        A <strong>stopline</strong> refers to a designated point on the production line
                        where the assembly or manufacturing process may be stopped for specific reasons.
                        This mechanism ensures that production runs smoothly while maintaining quality and safety standards.
                    </p>

                    <h3>Common Reasons for Stopline</h3>
                    <ul>
                        <li><strong>🛠 Equipment Maintenance</strong> – Temporary halts for machine servicing, adjustments,
                            or repairs.</li>
                        <li><strong>✅ Quality Control Checks</strong> – Stopping the line to inspect and ensure products
                            meet required standards.</li>
                        <li><strong>🔄 Changeovers</strong> – Switching between different product types, sizes, or designs.
                        </li>
                        <li><strong>⚠️ Safety Concerns</strong> – Immediate stoppage if operator safety is at risk.</li>
                    </ul>

                    <div class="highlight">
                        <h3>Why Stopline Matters</h3>
                        <p>
                            Stoplines help manufacturers:
                        </p>
                        <ul>
                            <li>🔍 Detect and fix quality issues early</li>
                            <li>⚙️ Keep machines in good working condition</li>
                            <li>📈 Improve production efficiency in the long term</li>
                            <li>🦺 Maintain a safe working environment</li>
                        </ul>
                        <p>
                            By implementing stoplines effectively, the footwear industry can balance
                            <strong>productivity, quality, and safety</strong> throughout the production process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <h1 class="text-white fw-bold d-block">METAL MANAGEMENT</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/stopline.jpg') }}" alt="Stopline Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h1>BROKEN NEEDLE</h1>
                    <p>
                        <strong>Broken needles</strong> are one of the most common issues in shoe production,
                        especially during the sewing stage. Needles play a key role in penetrating materials
                        and joining components. When they break, the impact on production efficiency
                        and product quality is significant.
                    </p>
                    <p>
                        A broken needle means the sewing process must be stopped to replace it.
                        This interruption slows down production, disrupts operators’ work rhythm,
                        and may even damage materials or cause defective stitches.
                        In some cases, it can also pose safety risks to operators.
                    </p>

                    <h3>Main Causes of Broken Needles</h3>
                    <ul>
                        <li><strong>⚙️ Poor Needle Quality</strong> – Low-grade materials break more easily compared to
                            high-quality needles.</li>
                        <li><strong>🔧 Incorrect Machine Settings</strong> – Excessive presser foot pressure or improper
                            alignment can lead to breakage.</li>
                        <li><strong>🧵 Incompatible Thread</strong> – Using thread that does not match the needle or
                            material increases friction and heat.</li>
                        <li><strong>⚡ High Sewing Speed</strong> – Running machines too fast puts extra strain on needles.
                        </li>
                        <li><strong>🪡 Tough or Thick Materials</strong> – Hard materials can overload the needle and cause
                            snapping.</li>
                    </ul>

                    <div class="highlight">
                        <h3>Prevention Measures</h3>
                        <p>
                            To minimize needle breakage and maintain smooth production:
                        </p>
                        <ul>
                            <li>✅ Use high-quality needles suitable for the material.</li>
                            <li>✅ Ensure machine settings follow proper standards.</li>
                            <li>✅ Match the thread type with the needle and material.</li>
                            <li>✅ Keep sewing speed at a safe, controlled level.</li>
                            <li>✅ Perform regular machine maintenance.</li>
                        </ul>
                        <p>
                            By applying these preventive steps, manufacturers can reduce needle breakage,
                            improve productivity, and ensure the consistent quality of shoe production.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/stopline.jpg') }}" alt="Stopline Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h1>METAL FINDING</h1>
                    <p>
                        <strong>Metal finding</strong> is a crucial inspection process in the footwear industry
                        to guarantee both product quality and user safety.
                        Its main purpose is to detect any foreign metal objects that may remain inside the shoe.
                    </p>
                    <p>
                        Leftover metal can cause multiple problems — from discomfort for the wearer
                        to potential damage to production machines.
                        That’s why this inspection step is essential before shoes reach the customer.
                    </p>

                    <h3>How the Process Works</h3>
                    <ul>
                        <li><strong>📡 X-ray Scanning</strong> – Shoes are scanned using an X-ray machine that generates a
                            digital image of the inside.</li>
                        <li><strong>🔍 Detection</strong> – Even the smallest pieces of metal will appear clearly in the
                            image.</li>
                        <li><strong>⛔ Action</strong> – If metal is detected, the shoe is separated and inspected further
                            before continuing production.</li>
                    </ul>

                    <div class="highlight">
                        <h3>Corrective Actions</h3>
                        <p>
                            When contamination is found, production is paused immediately.
                            The root cause is investigated, and corrective measures may include:
                        </p>
                        <ul>
                            <li>🔧 Repairing or adjusting machines</li>
                            <li>👩‍🏫 Retraining operators</li>
                            <li>📦 Replacing raw materials</li>
                        </ul>
                        <p>
                            The ultimate goal is to ensure every pair of shoes is <strong>100% free from metal
                                contamination</strong>
                            and meets established quality standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quality Process Sections -->
    <!-- Inline Inspection Section -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <h1 class="text-white fw-bold d-block">INLINE INSPECTION</h1>
        </div>
    </div>
    <div class="container-fluid py-5 quality-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="quality-image-container">
                        <img src="/asset/quality-prod-1.jpg" alt="Inline Inspection Process"
                            class="img-fluid rounded shadow-lg" onerror="this.src='/asset/qualityprod.png'">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="quality-content">
                        <h2 class="text-primary mb-4">Inline Inspection</h2>
                        <p class="lead mb-4">
                            Inline Inspection is a quality control process conducted at different stages of production to
                            detect defects before mass production. Its purpose is to ensure quality standards, reduce waste,
                            and improve efficiency.
                        </p>
                        <h4 class="text-secondary mb-3">Key Functions:</h4>
                        <div class="key-functions">
                            <div class="function-item mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px;">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Early Defect Detection</h5>
                                        <p class="mb-0">Identify potential issues before they affect large production
                                            batches</p>
                                    </div>
                                </div>
                            </div>
                            <div class="function-item mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px;">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Quality Control Checkpoints</h5>
                                        <p class="mb-0">Establish critical inspection points throughout the production
                                            process</p>
                                    </div>
                                </div>
                            </div>
                            <div class="function-item mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-info text-white rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px;">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Process Monitoring</h5>
                                        <p class="mb-0">Continuous monitoring of production parameters and quality metrics
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="function-item">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-warning text-white rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px;">
                                            <i class="fas fa-tools"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Immediate Corrective Actions</h5>
                                        <p class="mb-0">Real-time adjustments to prevent defect propagation and improve
                                            efficiency</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <h1 class="text-white fw-bold d-block">CTP/CTQ</h1>
        </div>
    </div>
    <!-- CTP/CTQ Process Section -->
    <div class="container-fluid py-5 bg-light ctp-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-delay=".3s">
                    <div class="quality-image-container">
                        <img src="/asset/quality-prod-2.jpg" alt="CTP CTQ Process" class="img-fluid rounded shadow-lg"
                            onerror="this.src='/asset/qualityprod.png'">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-delay=".5s">
                    <div class="quality-content">
                        <h2 class="text-primary mb-4">CTP/CTQ Process</h2>
                        <p class="lead mb-4">
                            In shoe manufacturing, product quality depends heavily on critical processes. These processes
                            are monitored using Critical to Process (CTP) and Critical to Quality (CTQ) controls.
                        </p>
                        <h4 class="text-secondary mb-3">Key Points:</h4>
                        <ul class="ctp-points">
                            <li><strong>Identify process stages critical to quality</strong> - Determine which manufacturing
                                steps directly impact product quality</li>
                            <li><strong>Ensure accuracy of product requirements</strong> - Validate that all critical
                                parameters meet specified standards</li>
                            <li><strong>Detect variations early</strong> - Monitor for deviations from established quality
                                benchmarks</li>
                            <li><strong>Validate final product compliance</strong> - Ensure finished products meet all
                                quality criteria</li>
                        </ul>
                        <div class="mt-4 p-3 bg-white rounded shadow-sm border-start border-4 border-primary">
                            <p class="mb-0"><i class="fas fa-info-circle text-primary me-2"></i>
                                <strong>CTP focuses on process control</strong> while <strong>CTQ emphasizes product
                                    quality</strong> requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PQR Section -->
     <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <h1 class="text-white fw-bold d-block">PQR</h1>
        </div>
    </div>
    <div class="container-fluid py-5 pqr-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="quality-image-container">
                        <img src="/asset/quality-prod-3.jpg" alt="Product Quality Review"
                            class="img-fluid rounded shadow-lg" onerror="this.src='/asset/qualityprod.png'">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="quality-content">
                        <h2 class="text-primary mb-4">PQR (Product Quality Review)</h2>
                        <p class="lead mb-4">
                            Product Quality Review (PQR) is a periodic evaluation of produced quality based on key
                            performance indicators. It helps detect recurring issues, analyze problems, and improve quality
                            consistency.
                        </p>
                        <h4 class="text-secondary mb-3">Objectives:</h4>
                        <div class="pqr-objectives">
                            <div class="objective-item mb-3 p-3 bg-light rounded">
                                <h5 class="text-primary mb-2"><i class="fas fa-chart-bar me-2"></i>Evaluate Production
                                    Consistency</h5>
                                <p class="mb-0">Monitor and assess the uniformity of production output over time</p>
                            </div>
                            <div class="objective-item mb-3 p-3 bg-light rounded">
                                <h5 class="text-success mb-2"><i class="fas fa-check-double me-2"></i>Validate Test Results
                                    & Standards</h5>
                                <p class="mb-0">Ensure all quality tests meet established benchmarks and requirements</p>
                            </div>
                            <div class="objective-item mb-3 p-3 bg-light rounded">
                                <h5 class="text-info mb-2"><i class="fas fa-search-plus me-2"></i>Detect Trends and Root
                                    Causes</h5>
                                <p class="mb-0">Analyze patterns to identify underlying issues affecting quality</p>
                            </div>
                            <div class="objective-item p-3 bg-light rounded">
                                <h5 class="text-warning mb-2"><i class="fas fa-cogs me-2"></i>Optimize Production Efficiency
                                </h5>
                                <p class="mb-0">Implement improvements based on quality review findings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cutting Dies Section -->
     <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <h1 class="text-white fw-bold d-block">CUTTING DIES</h1>
        </div>
    </div>
    <div class="container-fluid py-5 bg-light cutting-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-delay=".3s">
                    <div class="quality-image-container">
                        <img src="/asset/quality-prod-4.jpg" alt="Cutting Dies Inspection"
                            class="img-fluid rounded shadow-lg" onerror="this.src='/asset/qualityprod.png'">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-delay=".5s">
                    <div class="quality-content">
                        <h2 class="text-primary mb-4">Cutting Dies</h2>
                        <p class="lead mb-4">
                            Cutting dies refer to mold/tool inspection accuracy. Ensures cutting precision to be used in
                            long-term mass production. Focuses on defect detection, wear tracking, and process optimization.
                        </p>
                        <h4 class="text-secondary mb-3">Key Concepts:</h4>
                        <div class="cutting-concepts">
                            <div class="concept-item mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-primary text-white rounded d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; font-size: 14px;">
                                            <i class="fas fa-ruler"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Dimensional Accuracy</h5>
                                        <p class="mb-0">Precise measurement verification to ensure cutting dies meet exact
                                            specifications</p>
                                    </div>
                                </div>
                            </div>
                            <div class="concept-item mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-success text-white rounded d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; font-size: 14px;">
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Tool Maintenance Scheduling</h5>
                                        <p class="mb-0">Regular inspection and maintenance to prolong tool life and maintain
                                            quality</p>
                                    </div>
                                </div>
                            </div>
                            <div class="concept-item mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-warning text-white rounded d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; font-size: 14px;">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Wear Detection</h5>
                                        <p class="mb-0">Early identification of tool wear to prevent quality issues in
                                            production</p>
                                    </div>
                                </div>
                            </div>
                            <div class="concept-item">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-info text-white rounded d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; font-size: 14px;">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-2">Quality Compliance</h5>
                                        <p class="mb-0">Ensuring all cutting operations meet established quality standards
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection