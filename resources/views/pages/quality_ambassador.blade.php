@extends('layouts.app')

@section('title', 'Quality Ambassadors')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h2 class="display-2 text-white mb-4 animated slideInDown">Quality Ambassador</h2>
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
        </div>
    </div>
    <!-- Fact End -->   

    <div class="container py-4">

        @if($ambassadors->count() > 0)
            <!-- Ambassadors Grid -->
            <div class="row g-4">
                @foreach($ambassadors as $ambassador)
                    <div class="col-lg-4 col-md-6">
                        <!-- Ambassador Card -->
                        <div class="card h-100 shadow-sm border-0 hover-card d-flex flex-column">
                            <!-- Profile Section -->
                            <div class="card-body text-center p-4 flex-grow-1 d-flex flex-column">
                                <!-- Profile Image -->
                                <div class="mb-4">
                                    <img src="{{ $ambassador->profile_image_url }}"
                                         alt="{{ $ambassador->name }}"
                                         class="rounded-circle shadow-sm"
                                         style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #e3f2fd;"
                                         onerror="this.src='{{ asset('images/default-avatar.svg') }}'">
                                </div>

                                <!-- Name -->
                                <h4 class="mb-3 text-primary">{{ $ambassador->name }}</h4>

                                <!-- Adi Dasler Standard -->
                                @if($ambassador->adi_daser_score)
                                    <div class="mb-3">
                                        <div class="mb-2 d-flex justify-content-between align-items-center">
                                            <small class="text-muted fw-semibold">Adi Dasler Standard</small>
                                            <span class="badge bg-{{ $ambassador->adi_daser_score >= 80 ? 'success' : ($ambassador->adi_daser_score >= 60 ? 'warning' : 'danger') }} rounded-pill">
                                                {{ number_format($ambassador->adi_daser_score, 1) }}
                                            </span>
                                        </div>
                                    </div>
                                @endif

                                <!-- Motto -->
                                @if($ambassador->motto)
                                    <div class="mb-3 mt-auto">
                                        <p class="text-muted fst-italic mb-0">
                                            <i class="fas fa-quote-left text-primary me-1"></i>
                                            {{ $ambassador->motto }}
                                            <i class="fas fa-quote-right text-primary ms-1"></i>
                                        </p>
                                    </div>
                                @endif
                            </div>

                            <!-- View Profile Button (Fixed at bottom) -->
                            <div class="card-footer bg-transparent border-top-0 p-3">
                                <a href="{{ route('quality_ambassador.show', $ambassador->id) }}"
                                   class="btn btn-outline-primary w-100 rounded-pill">
                                    <i class="fas fa-user me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

                    @else
            <!-- Empty State -->
            <div class="text-center py-5">
                <div class="mb-4">
                    <i class="fas fa-users fa-4x text-muted"></i>
                </div>
                <h3 class="text-muted mb-3">No Quality Ambassadors Found</h3>
                <p class="text-muted">Our Quality Ambassadors team is being updated. Please check back soon!</p>
            </div>
        @endif
    </div>
</div>

<!-- Custom Styles -->
<style>
/* Custom page header for Quality Ambassadors */
/* .page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url('asset/qualityprod.png') center center no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
}

.page-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(25, 135, 84, 0.6));
    z-index: 1;
}

.page-header .container {
    position: relative;
    z-index: 2;
}

.page-header .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.page-header .breadcrumb-item a:hover {
    color: white;
}

.page-header .breadcrumb-item.active {
    color: rgba(255, 255, 255, 0.9);
} */

.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.card {
    transition: all 0.3s ease;
}

.card-body {
    padding-bottom: 0 !important;
}

.card-footer {
    margin-top: auto;
    padding: 1rem;
}

.rounded-circle {
    transition: transform 0.3s ease;
}

.rounded-circle:hover {
    transform: scale(1.1);
}

.btn-outline-primary {
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.15);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .display-4 {
        font-size: 2.5rem;
    }

    .lead {
        font-size: 1.1rem;
    }

    .card {
        margin-bottom: 1rem;
    }
}

/* Animation for card entrance */
.card {
    animation: fadeInUp 0.6s ease-out;
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

/* Ensure consistent card height across different content lengths */
.card {
    display: flex;
    flex-direction: column;
}

.card-body {
    flex: 1 1 auto;
}

.mt-auto {
    margin-top: auto;
}
</style>

@push('scripts')
<script>
    // Initialize WOW.js for animations
    new WOW().init();
</script>
@endpush
@endsection