@extends('layouts.app')

@section('title', 'Quality Production')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h2 class="display-2 text-white mb-4 animated slideInDown">Quality Production</h2>
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

    <!-- In-frame Looker Studio -->
        <div class="container-fluid">
        <div class="embed-responsive embed-responsive-16by9">
            <div class="text-center p-5">
                <iframe width="1500" height="900" src="https://lookerstudio.google.com/embed/reporting/75f78948-575c-4ef4-aca3-73cfa2a8eaeb/page/kGm6D" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="asset/qualityprod.png" class="img-fluid w-100 rounded" alt="" style="margin-bottom: 25%;">
                        <!-- <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h1 class="mb-4">PQR (PRODUCT QUALITY REVIEW)</h1>
                    <p style="text-align: justify">RQC validates after passing TQC 10 pairs randomly to ensure that the shoes are truly perfect and there are no problems. Not only does it carry out validation after passing TQC, RQC also checks the process area starting from the cutting, sewing and assembly processes to minimize defects.</p>
                    <br>
                    <h1 class="mb-4">AQL INSPECTION</h1>
                    <p class="mb-4" style="text-align: justify">Ensuring that products meet the required quality standards before they are shipped out to customers. 
                        <br>Here's a breakdown of the typical responsibilities :</br>
                        <ul class="rapi">
                            <li>Inspection Planning : Develop inspection plans based on the AQL standards provided by the company or the client. This involves determining the sampling size and inspection criteria for various stages of production.</li>
                            <li>Sampling : Select random samples from the production line according to the inspection plan. This may involve using statistical sampling techniques to ensure representative samples are chosen.</li>
                            <li>Visual Inspection : Conduct visual inspections of the samples to check for defects, inconsistencies, or deviations from quality standards. This may include assessing factors like color, size, shape, texture, and overall appearance.</li>
                            <li>Functional Testing : Perform functional tests on samples to ensure they meet performance requirements. This could involve testing functionality, durability, reliability, or other specific parameters depending on the product.</li>
                            <li>Documentation : Accurately record inspection results, including any defects found and their severity. Maintain detailed records of inspection activities for traceability and quality assurance purposes.</li>
                            <li>Communication : Communicate inspection findings to relevant stakeholders, such as production managers, quality control teams, and suppliers. Provide feedback on areas for improvement and collaborate with other departments to address quality issues.</li>
                            <li>Problem Resolution : Assist in identifying the root causes of quality issues and work with cross-functional teams to implement corrective and preventive actions.</li>
                            <li>Compliance : Ensure compliance with relevant quality standards, regulations, and customer requirements. Stay updated on industry best practices and quality management principles.</li>
                            <li>Continuous Improvement : Participate in continuous improvement initiatives to enhance quality processes, reduce defects, and improve overall product quality.</li>
                        </ul>
                        <p>Overall, the role of an AQL inspector is crucial in maintaining product quality, minimizing defects, and ensuring customer satisfaction in manufacturing environments.</p></br>
                    <!-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> -->

                    <h1 class="mb-4">3rd PARTY INSPECTION</h1>
                    <p class="mb-4" style="text-align: justify">Third-party validation refers to the process of having an independent, unbiased organization assess and confirm the quality, accuracy, or compliance of a product, service, process, or system. This validation is conducted by an entity that is not directly involved in the development, production, or sale of the item being validated. 
                    <br>In various industries, third-party validation serves several purposes:</br>
                    <ul class="rapi">
                        <li>Quality Assurance: It ensures that products or services meet predefined standards of quality or performance.</li>
                        <li>Credibility: Third-party validation adds credibility and trustworthiness to claims made by the company about its offerings.</li>
                        <li>Regulatory Compliance: In regulated industries, third-party validation may be required to demonstrate compliance with industry standards, regulations, or legal requirements.</li>
                        <li>Impartiality: Since the validation is conducted by an independent entity, it provides an unbiased assessment without conflicts of interest.</li>
                    </ul>
                    <p class="mb-4" style="text-align: justify">Common examples of third-party validation include:</p>
                    <ul class="rapi">
                        <li>Certifications: Such as ISO certifications for quality management systems, or safety certifications for products.</li>
                        <li>Audits: Independent audits of financial statements, environmental practices, or cybersecurity measures.</li>
                        <li>Testing: Testing laboratories or organizations that evaluate the performance or safety of products.</li>
                        <li>Reviews and Endorsements: Independent reviews, ratings, or endorsements by reputable organizations or experts.</li>
                    </ul>
                    <p>Overall, third-party validation adds credibility and assurance to stakeholders, whether they are consumers, regulators, or business partners, by verifying that certain claims or standards are met through an impartial assessment</p></br>
                    <!-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> -->

                    <h1 class="mb-4">B-GRADE</h1>
                    <p class="mb-4" style="text-align: justify">B-Grade refers to products that do not meet the primary quality standards, or A-Grade, but are still usable or sellable. These products typically have minor defects that do not affect their main functionality but may impact their appearance or other details.</p>
                    Characteristics of B-Grade:</br>
                    <ul class="rapi">
                        <li>Minor Defects: Such as scratches, slight color variations, or minor dimensional inconsistencies.</li>
                        <li>Functionality Remains Intact: The product can still be used as intended.</li>
                        <li>Lower Price: Sold at a discounted price due to not meeting the highest quality specifications.</li>
                        <li>Targeted for Specific Markets: Often intended for markets prioritizing affordability over aesthetics.</li>
                    </ul>
                    <p>In quality management systems, B-Grade products are usually tracked and managed separately to minimize their impact on brand reputation or production efficiency.</p></br>
                    <!-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid pb-5 mb-5 team">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Team</h5>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->
@endsection
