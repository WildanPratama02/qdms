@extends('layouts.app')

@section('title', $ambassador->name . ' - Quality Ambassador Profile')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $ambassador->name }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('quality_ambassador') }}" class="text-white">Quality Ambassadors</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">{{ $ambassador->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Ambassador Profile -->
    <div class="container-fluid py-4">
        <div class="container">
            <div class="row">
                <!-- Profile Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-gradient-primary text-white text-center py-3">
                            <h5 class="mb-0">
                                <i class="fas fa-user-circle me-2"></i>Profile
                            </h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ $ambassador->profile_image_url }}"
                                 alt="{{ $ambassador->name }}"
                                 class="rounded-circle mb-4"
                                 style="width: 180px; height: 180px; object-fit: cover; border: 5px solid #007bff;"
                                 onerror="this.src='{{ asset('images/default-avatar.svg') }}'">

                            <h4 class="mb-3">{{ $ambassador->name }}</h4>

                            @if($ambassador->adi_daser_score)
                                <div class="mt-4 mb-3">
                                    <h5 class="text-primary mb-3">Adi Dasler Standard Score</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <span class="h2 text-primary me-2">{{ number_format($ambassador->adi_daser_score, 1) }}</span>
                                        <small class="text-muted">/100</small>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-{{ $ambassador->adi_daser_score >= 80 ? 'success' : ($ambassador->adi_daser_score >= 60 ? 'warning' : 'danger') }}"
                                             role="progressbar"
                                             style="width: {{ $ambassador->adi_daser_score }}%"
                                             aria-valuenow="{{ $ambassador->adi_daser_score }}"
                                             aria-valuemin="0"
                                             aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">
                                        {{ $ambassador->adi_daser_score >= 80 ? 'Excellent' : ($ambassador->adi_daser_score >= 60 ? 'Good' : 'Needs Improvement') }}
                                    </p>
                                </div>
                            @endif

                            <div class="mt-4">
                                <a href="{{ route('quality_ambassador') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Ambassadors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Details Section -->
                <div class="col-lg-8">
                    <!-- Motto Card -->
                    @if($ambassador->motto)
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-header bg-gradient-primary text-white">
                                <h5 class="mb-0">
                                    <i class="fas fa-quote-left me-2"></i>Motto
                                </h5>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="mb-0 fst-italic">"{{ $ambassador->motto }}"</p>
                                </blockquote>
                            </div>
                        </div>
                    @endif

                    
                    <!-- Statistics Card -->
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-header bg-gradient-primary text-white">
                            <h5 class="mb-0">
                                <i class="fas fa-chart-line me-2"></i>Adi Dasler Standard Performance
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                @if($ambassador->adi_daser_score)
                                    <div class="col-md-12 mb-3">
                                        <div class="p-3 bg-light rounded">
                                            <h4 class="text-primary mb-2">{{ number_format($ambassador->adi_daser_score, 1) }}</h4>
                                            <p class="text-muted mb-0">Adi Dasler Score</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                                    </div>
            </div>
        </div>
    </div>

    <style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    }
    .card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    </style>
@endsection