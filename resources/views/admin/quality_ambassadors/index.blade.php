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

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Adi Daser Score</th>
                                    <th>Status</th>
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
                                                    @if($ambassador->motto)
                                                        <br><small class="text-muted">{{ \Illuminate\Support\Str::limit($ambassador->motto, 50) }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $ambassador->position ?? 'N/A' }}</td>
                                        <td>{{ $ambassador->department ?? 'N/A' }}</td>
                                        <td>
                                            @if($ambassador->adi_daser_score)
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-{{ $ambassador->adi_daser_score >= 80 ? 'success' : ($ambassador->adi_daser_score >= 60 ? 'warning' : 'danger') }} me-2">
                                                        {{ number_format($ambassador->adi_daser_score, 1) }}
                                                    </span>
                                                    <small class="text-muted">/100</small>
                                                </div>
                                            @else
                                                <span class="text-muted">N/A</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $ambassador->is_active ? 'success' : 'secondary' }}">
                                                {{ $ambassador->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="{{ route('quality_ambassador.show', $ambassador->id) }}"
                                                   class="btn btn-outline-primary"
                                                   title="View Profile">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.quality_ambassadors.edit', $ambassador->id) }}"
                                                   class="btn btn-outline-warning"
                                                   title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.quality_ambassadors.destroy', $ambassador->id) }}"
                                                      method="POST"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-outline-danger"
                                                            title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this Quality Ambassador?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4">
                                            <i class="fas fa-users fa-3x text-muted mb-3"></i>
                                            <h5 class="text-muted">No Quality Ambassadors found</h5>
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
@endsection