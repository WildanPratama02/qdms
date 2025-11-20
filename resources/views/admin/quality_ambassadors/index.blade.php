@extends('layouts.admin')

@section('title', 'Quality Ambassadors Management')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-users me-2"></i>Quality Ambassadors Management
                    </h5>
                    <a href="{{ route('admin.quality_ambassadors.create') }}" class="btn btn-light">
                        <i class="fas fa-plus me-2"></i>Add New Ambassador
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Statistics Cards -->
                    @if($ambassadors->count() > 0)
                        <div class="row mb-4">
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="bg-primary bg-gradient rounded p-3 text-white text-center">
                                    <h4 class="mb-1">{{ $ambassadors->count() }}</h4>
                                    <small class="mb-0 d-block">Total Ambassadors</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="bg-success bg-gradient rounded p-3 text-white text-center">
                                    <h4 class="mb-1">{{ $ambassadors->where('adi_daser_score', '>=', 80)->count() }}</h4>
                                    <small class="mb-0 d-block">High Performers (80+)</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="bg-info bg-gradient rounded p-3 text-white text-center">
                                    <h4 class="mb-1">{{ number_format($ambassadors->avg('adi_daser_score'), 1) }}</h4>
                                    <small class="mb-0 d-block">Average Adi Dasler Score</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="bg-warning bg-gradient rounded p-3 text-white text-center">
                                    <h4 class="mb-1">{{ $ambassadors->whereNotNull('motto')->count() }}</h4>
                                    <small class="mb-0 d-block">With Mottos</small>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Motto</th>
                                    <th>Adi Dasler Score</th>
                                    <th>Profile Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($ambassadors as $ambassador)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $ambassador->profile_image_url }}"
                                                     alt="{{ $ambassador->name }}"
                                                     class="rounded-circle me-3"
                                                     style="width: 40px; height: 40px; object-fit: cover;"
                                                     onerror="this.src='{{ asset('images/default-avatar.svg') }}'">
                                                <div>
                                                    <strong>{{ $ambassador->name }}</strong>
                                                    <br>
                                                    <small class="text-muted">ID: #{{ $ambassador->id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if($ambassador->motto)
                                                <span class="text-muted fst-italic" title="{{ $ambassador->motto }}">
                                                    {{ Str::limit($ambassador->motto, 50) }}
                                                </span>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($ambassador->adi_daser_score)
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-{{ $ambassador->adi_daser_score >= 80 ? 'success' : ($ambassador->adi_daser_score >= 60 ? 'warning' : 'danger') }} me-2">
                                                        {{ number_format($ambassador->adi_daser_score, 1) }}
                                                    </span>
                                                    <small class="text-muted">/100</small>
                                                </div>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($ambassador->profile_image)
                                                <span class="badge bg-success">
                                                    <i class="fas fa-image me-1"></i>Yes
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">
                                                    <i class="fas fa-times me-1"></i>No
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="{{ route('quality_ambassador.show', $ambassador->id) }}"
                                                   target="_blank"
                                                   class="btn btn-outline-primary"
                                                   title="View Profile">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.quality_ambassadors.edit', $ambassador->id) }}"
                                                   class="btn btn-outline-warning"
                                                   title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.quality_ambassadors.destroy', $ambassador->id) }}" method="POST"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-outline-danger"
                                                            title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this ambassador?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            <i class="fas fa-users fa-3x text-muted mb-3"></i>
                                            <h5 class="text-muted">No Quality Ambassadors Found</h5>
                                            <p class="text-muted">Get started by adding your first Quality Ambassador.</p>
                                            <a href="{{ route('admin.quality_ambassadors.create') }}" class="btn btn-primary">
                                                <i class="fas fa-plus me-2"></i>Add First Ambassador
                                            </a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($ambassadors->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $ambassadors->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-gradient {
    background: linear-gradient(45deg, var(--bs-primary) 0%, var(--bs-primary) 100%);
}

.bg-gradient.bg-success {
    background: linear-gradient(45deg, var(--bs-success) 0%, var(--bs-success) 100%);
}

.bg-gradient.bg-info {
    background: linear-gradient(45deg, var(--bs-info) 0%, var(--bs-info) 100%);
}

.bg-gradient.bg-warning {
    background: linear-gradient(45deg, var(--bs-warning) 0%, var(--bs-warning) 100%);
}

.table td {
    vertical-align: middle;
}

.badge {
    font-size: 0.8em;
}

.btn-group-sm > .btn {
    padding: 0.375rem 0.5rem;
}

.btn i {
    display: inline-block;
    width: 1.25em;
    text-align: center;
}
</style>
@endsection