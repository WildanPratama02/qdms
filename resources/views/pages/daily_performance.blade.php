@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Daily Performance Report</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
    </div>
    <!-- Fact End -->
    <!-- Contact Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <iframe width="1000" height="900"
                    src="https://lookerstudio.google.com/embed/reporting/d9942398-d643-44a5-8e86-edb77dec3268/page/p_rikxq8h2od"
                    frameborder="0" style="border:0" allowfullscreen
                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>

            </div>
        </div>
    </div>
    <!-- Contact End -->

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
@endsection