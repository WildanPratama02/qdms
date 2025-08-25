@extends('layouts.app')

@section('title', 'Our Blog')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Moisture Dashboard</h1>
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
                <iframe width="1000" height="950"
                    src="https://lookerstudio.google.com/embed/reporting/eb46f77a-0351-4e0c-9fa3-09872778ed59/page/Tr41D"
                    frameborder="0" style="border:0" allowfullscreen
                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="asset/moisture1.jpeg" class="rounded" alt="moisture1.jpeg">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="asset/moisture2.jpeg" class="rounded" alt="moisture2.jpeg">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="asset/moisture3.jpeg" class="rounded" alt="moisture3.jpeg">
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <p class="text-justify mb-4" style="text-indent: 2em; line-height: 1.6;">
                        Moisture checking in shoe manufacturing refers to the process of assessing the moisture content in
                        various materials used to make shoes, such as leather, fabrics, and adhesives. Controlling moisture
                        levels is crucial because excessive moisture can lead to several problems:
                    </p>
                    <ul class="rapi list-unstyled ms-4">
                        <li><strong>🦠 Mold & Mildew</strong> – Moisture creates an ideal environment for mold growth, which
                            can damage the shoe’s appearance and weaken its structure.</li>
                        <li><strong>🧵 Material Degradation</strong> – Too much moisture can weaken materials like leather,
                            making them brittle, cracked, or deformed over time.</li>
                        <li><strong>🔗 Adhesive Failure</strong> – Excessive moisture can reduce the effectiveness of
                            adhesives, leading to delamination or separation of shoe components.</li>
                    </ul>
                    <p class="text-justify mt-4" style="text-indent: 2em; line-height: 1.6;">
                        Manufacturers typically use moisture meters or sensors to measure the moisture content at different
                        stages of production. By monitoring and controlling moisture levels, manufacturers can ensure the
                        quality and durability of their shoes.
                    </p>
                </div>
@endsection