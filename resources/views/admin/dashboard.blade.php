@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-tachometer-alt me-2"></i>Admin Dashboard
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Quick Stats -->
                        <div class="col-md-3 mb-4">
                            <div class="card border-0 shadow-sm bg-primary text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-users fa-2x mb-3"></i>
                                    <h4 class="mb-1">{{ \App\Models\QualityAmbassador::count() }}</h4>
                                    <p class="mb-0">Quality Ambassadors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card border-0 shadow-sm bg-success text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-file-alt fa-2x mb-3"></i>
                                    <h4 class="mb-1">{{ \App\Models\UploadedFile::count() }}</h4>
                                    <p class="mb-0">Total Files</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card border-0 shadow-sm bg-info text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-check-circle fa-2x mb-3"></i>
                                    <h4 class="mb-1">{{ \App\Models\QualityAmbassador::where('is_active', true)->count() }}</h4>
                                    <p class="mb-0">Active Ambassadors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card border-0 shadow-sm bg-warning text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-chart-line fa-2x mb-3"></i>
                                    <h4 class="mb-1">@if(\App\Models\QualityAmbassador::count() > 0) {{ number_format(\App\Models\QualityAmbassador::avg('adi_daser_score'), 1) }} @else 0 @endif</h4>
                                    <p class="mb-0">Avg. Score</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5 class="mb-3">Quick Actions</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('admin.quality_ambassadors.index') }}" class="btn btn-outline-primary w-100">
                                        <i class="fas fa-users me-2"></i>Manage Ambassadors
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('admin.quality_ambassadors.create') }}" class="btn btn-success w-100">
                                        <i class="fas fa-plus me-2"></i>Add Ambassador
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('admin.files.index') }}" class="btn btn-outline-info w-100">
                                        <i class="fas fa-file-alt me-2"></i>Manage Files
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('quality_ambassador') }}" class="btn btn-outline-secondary w-100">
                                        <i class="fas fa-eye me-2"></i>View Public Page
                                    </a>
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
