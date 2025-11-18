@extends('layouts.app')

@section('title', 'Quality Ambassador')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4 position-relative overflow-hidden"
         style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);">
        <!-- Background Image Layer -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background-image: url('https://images.unsplash.com/photo-1559028012-c72a832580c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
                    background-size: cover;
                    background-position: center;
                    background-attachment: fixed;
                    opacity: 0.3;
                    z-index: 0;">
        </div>

        <!-- Animated Overlay Pattern -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
            <div class="pattern-dots pattern-dots-lg text-white opacity-10"
                 style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px);
                        background-size: 30px 30px;">
            </div>
        </div>

        <div class="container text-center py-5 position-relative" style="z-index: 1;">
            <!-- Animated Icons -->
            <div class="row justify-content-center mb-4">
                <div class="col-auto">
                    <div class="animated-icon-wrapper">
                        <i class="fas fa-award text-white animated-pulse-slow"
                           style="font-size: 3rem; text-shadow: 0 0 20px rgba(255,255,255,0.5);"></i>
                    </div>
                </div>
            </div>

            <h1 class="display-2 text-white mb-4 animated slideInDown fw-bold">
                Quality Ambassador
                <div class="d-inline-block mt-2">
                    <span class="badge bg-white text-primary fs-6 ms-3 animated-fade-in-up">
                        <i class="fas fa-users me-2"></i>Excellence Leaders
                    </span>
                </div>
            </h1>

            <p class="lead text-white mb-4 animated slideInUp" style="opacity: 0.95;">
                Meet the champions who drive our commitment to quality excellence and innovation
            </p>

            <nav aria-label="breadcrumb animated slideInUp">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}" class="text-white text-decoration-none hover-white">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        <i class="fas fa-user-tie me-1"></i>Quality Ambassador
                    </li>
                </ol>
            </nav>

            <!-- Floating Quality Badges -->
            <div class="position-absolute" style="top: 10%; left: 5%; z-index: 0;">
                <div class="floating-badge animated-float-slow">
                    <i class="fas fa-certificate text-white" style="font-size: 2rem; opacity: 0.3;"></i>
                </div>
            </div>
            <div class="position-absolute" style="top: 20%; right: 10%; z-index: 0;">
                <div class="floating-badge animated-float-delayed">
                    <i class="fas fa-medal text-white" style="font-size: 1.8rem; opacity: 0.3;"></i>
                </div>
            </div>
            <div class="position-absolute" style="bottom: 15%; left: 8%; z-index: 0;">
                <div class="floating-badge animated-float-slow-reverse">
                    <i class="fas fa-trophy text-white" style="font-size: 2.2rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Quality Ambassador Introduction -->
    <div class="container-fluid py-4">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <h4 class="text-primary mb-3">Meet Our Quality Ambassadors</h4>
                <h2 class="display-6 text-dark mb-4">Quality Champions</h2>
                <p class="lead text-muted">Our Quality Ambassadors are the driving force behind our commitment to excellence. Each ambassador represents the highest standards of quality management and inspires our team to achieve excellence in every aspect of our operations.</p>
            </div>

            <!-- Statistics Overview -->
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                        <h3 class="h2 text-primary mb-0">{{ $ambassadors->count() }}</h3>
                        <p class="text-muted mb-0">Active Ambassadors</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                        <h3 class="h2 text-primary mb-0">@if($ambassadors->isNotEmpty()) {{ number_format($ambassadors->max('adi_daser_score'), 1) }}@else 0 @endif</h3>
                        <p class="text-muted mb-0">Highest Adi Daser Score</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                        <h3 class="h2 text-primary mb-0">@if($ambassadors->isNotEmpty()) {{ number_format($ambassadors->avg('adi_daser_score'), 1) }}@else 0 @endif</h3>
                        <p class="text-muted mb-0">Average Score</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 bg-light rounded">
                        <h3 class="h2 text-primary mb-3">{{ count($ambassadors->groupBy('department')) }}</h3>
                        <p class="text-muted mb-0">Departments</p>
                    </div>
                </div>
            </div>

            <!-- Quality Ambassador Cards Grid -->
            @if($ambassadors->isNotEmpty())
                <div class="row">
                    @foreach($ambassadors as $ambassador)
                        <div class="col-12 mb-4">
                            <div class="card shadow-sm border-0 hover-lift overflow-hidden">
                                <div class="row g-0">
                                    <!-- Left Side - Profile Image -->
                                    <div class="col-md-4 col-lg-3">
                                        <div class="bg-gradient-primary h-100 d-flex flex-column align-items-center justify-content-center p-4 text-white">
                                            <img src="{{ $ambassador->profile_image_url }}"
                                                 alt="{{ $ambassador->name }}"
                                                 class="rounded-circle mb-3 border border-white border-3"
                                                 style="width: 150px; height: 150px; object-fit: cover;"
                                                 onerror="this.src='{{ asset('images/default-avatar.svg') }}'">
                                            <h5 class="mb-2 text-center">{{ $ambassador->name }}</h5>
                                            @if($ambassador->position)
                                                <small class="text-white-50">{{ $ambassador->position }}</small>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Right Side - Content -->
                                    <div class="col-md-8 col-lg-9">
                                        <div class="card-body h-100 d-flex flex-column">
                                            <!-- Top Section with Score and Badges -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="h3 text-primary me-3">{{ number_format($ambassador->adi_daser_score, 1) }}</span>
                                                        <div class="flex-grow-1">
                                                            <small class="text-muted d-block">Adi Daser Score</small>
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-{{ $ambassador->adi_daser_score >= 80 ? 'success' : ($ambassador->adi_daser_score >= 60 ? 'warning' : 'danger') }}"
                                                                     role="progressbar"
                                                                     style="width: {{ $ambassador->adi_daser_score }}%"
                                                                     aria-valuenow="{{ $ambassador->adi_daser_score }}"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-end">
                                                    @if($ambassador->department)
                                                        <span class="badge bg-primary me-2">{{ $ambassador->department }}</span>
                                                    @endif
                                                    <span class="badge bg-{{ $ambassador->is_active ? 'success' : 'secondary' }}">
                                                        {{ $ambassador->is_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Motto Section -->
                                            @if($ambassador->motto)
                                                <div class="mb-3">
                                                    <div class="bg-light rounded p-3">
                                                        <p class="mb-0 fst-italic text-center">
                                                            <i class="fas fa-quote-left text-primary me-2"></i>
                                                            "{{ $ambassador->motto }}"
                                                            <i class="fas fa-quote-right text-primary ms-2"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif

                                            <!-- Biography Section -->
                                            @if($ambassador->biography)
                                                <div class="mb-3 flex-grow-1">
                                                    <h6 class="text-muted mb-2">Biography</h6>
                                                    <p class="text-muted small mb-0">{{ \Illuminate\Support\Str::limit($ambassador->biography, 200) }}</p>
                                                </div>
                                            @endif

                                            <!-- Action Buttons -->
                                            <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                                <div>
                                                    <small class="text-muted">
                                                        <i class="fas fa-clock me-1"></i>
                                                        Updated {{ $ambassador->updated_at->diffForHumans() }}
                                                    </small>
                                                </div>
                                                <div>
                                                    <a href="{{ route('quality_ambassador.show', $ambassador->id) }}"
                                                       class="btn btn-primary btn-sm me-2">
                                                        <i class="fas fa-user me-1"></i>View Full Profile
                                                    </a>
                                                    <a href="{{ route('quality_ambassador.show', $ambassador->id) }}#contact"
                                                       class="btn btn-outline-primary btn-sm">
                                                        <i class="fas fa-envelope me-1"></i>Contact
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-users fa-4x text-muted mb-3"></i>
                    <h5 class="text-muted">No Quality Ambassadors found</h5>
                    <p class="text-muted">Quality Ambassadors will be displayed here once they are added to the system.</p>
                </div>
            @endif
        </div>
    </div>

    <style>
    .hover-lift {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .hover-lift:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15) !important;
    }
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        border: none;
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    /* Left-right layout specific styles */
    .border-white.border-3 {
        border-width: 3px !important;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.75) !important;
    }

    /* Progress bar animation */
    .progress-bar {
        transition: width 0.6s ease;
    }

    /* Hero Section Animations */
    .animated-pulse-slow {
        animation: pulse 3s infinite;
    }

    .animated-float-slow {
        animation: float 6s ease-in-out infinite;
    }

    .animated-float-delayed {
        animation: float 6s ease-in-out infinite;
        animation-delay: 2s;
    }

    .animated-float-slow-reverse {
        animation: float-reverse 6s ease-in-out infinite;
        animation-delay: 1s;
    }

    .animated-fade-in-up {
        animation: fadeInUp 0.8s ease-out;
    }

    .hover-white:hover {
        color: rgba(255, 255, 255, 0.8) !important;
        text-decoration: underline !important;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.8;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-10px) rotate(5deg);
        }
        75% {
            transform: translateY(5px) rotate(-5deg);
        }
    }

    @keyframes float-reverse {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        25% {
            transform: translateY(10px) rotate(-5deg);
        }
        75% {
            transform: translateY(-5px) rotate(5deg);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .bg-gradient-primary.h-100 {
            min-height: 200px;
        }

        .card-body {
            padding: 1rem;
        }

        .display-2 {
            font-size: 2.5rem !important;
        }

        .floating-badge {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .animated-icon-wrapper i {
            font-size: 2rem !important;
        }

        .lead {
            font-size: 1rem !important;
        }
    }
    </style>
@endsection
