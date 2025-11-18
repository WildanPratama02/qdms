@extends('layouts.app')

@section('title', 'Audit Library')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Audit Library</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Audit Library</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Search and Filter Section -->
    <div class="container-fluid py-4">
        <div class="container">
            <div class="bg-light rounded p-4 mb-4">
                <form method="GET" action="{{ route('audit_library') }}" id="filterForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Search Audit Documents</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" id="search" name="search"
                                       placeholder="Search by audit name..." value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="category" class="form-label">Audit Category</label>
                            <select class="form-select" id="category" name="category">
                                <option value="">All Categories</option>
                                @foreach($auditCategories as $category)
                                    <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                        {{ $category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-filter me-2"></i>Filter
                            </button>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <a href="{{ route('audit_library') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-times me-1"></i>Clear Filters
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Results Summary -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">
                    Found {{ $files->total() }} audit{{ $files->total() != 1 ? 's' : '' }}
                    @if(request('search') || request('category'))
                        <span class="text-muted">(filtered)</span>
                    @endif
                </h5>
            </div>

            <!-- Audit Categories Overview -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-primary bg-opacity-10 rounded p-3">
                        <h6 class="mb-3"><i class="fas fa-folder-tree me-2"></i>Audit Categories</h6>
                        <div class="row">
                            @foreach($auditCategories as $category)
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <span class="badge bg-primary me-2">{{ $category }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documents Grid -->
            @if($files->count() > 0)
                <div class="row g-4">
                    @foreach($files as $file)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-header bg-gradient-primary text-white py-2">
                                    <small class="fw-bold">{{ $file->category ?? 'Uncategorized' }}</small>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3">
                                            @if(str_contains($file->file_name, '.pdf'))
                                                <i class="fas fa-file-pdf text-danger fa-2x"></i>
                                            @elseif(str_contains($file->file_name, '.doc') || str_contains($file->file_name, '.docx'))
                                                <i class="fas fa-file-word text-primary fa-2x"></i>
                                            @elseif(str_contains($file->file_name, '.xls') || str_contains($file->file_name, '.xlsx'))
                                                <i class="fas fa-file-excel text-success fa-2x"></i>
                                            @else
                                                <i class="fas fa-file text-secondary fa-2x"></i>
                                            @endif
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="card-title mb-1 text-truncate" title="{{ str_replace(time() . '_', '', $file->file_name) }}">
                                                {{ str_replace(time() . '_', '', $file->file_name) }}
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="text-muted small mb-3">
                                        @if($file->document_date)
                                            <div><i class="fas fa-calendar me-1"></i>{{ $file->document_date->format('M d, Y') }}</div>
                                        @endif
                                        <div><i class="fas fa-clock me-1"></i>{{ $file->created_at->format('M d, Y h:i A') }}</div>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="btn-group w-100" role="group">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                    onclick="viewDocument({{ $file->id }})">
                                                <i class="fas fa-eye me-1"></i>View
                                            </button>
                                            <a href="{{ route('audit_library.download', $file->id) }}"
                                               class="btn btn-outline-success btn-sm">
                                                <i class="fas fa-download me-1"></i>Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $files->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">No audit documents found</h5>
                    <p class="text-muted">Try adjusting your filters or search terms.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Document View Modal -->
    <div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="documentModalLabel">Document Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="documentPreview">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="downloadBtn">
                        <i class="fas fa-download me-1"></i>Download
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function viewDocument(fileId) {
    const modal = new bootstrap.Modal(document.getElementById('documentModal'));
    const preview = document.getElementById('documentPreview');
    const downloadBtn = document.getElementById('downloadBtn');

    // Update download button
    downloadBtn.onclick = function() {
        window.location.href = `/audit_library/download/${fileId}`;
    };

    // Show loading spinner
    preview.innerHTML = `
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    `;

    modal.show();

    // Load document
    fetch(`/audit_library/view/${fileId}`)
        .then(response => {
            if (response.ok) {
                return response.blob();
            }
            throw new Error('Document not found');
        })
        .then(blob => {
            const url = URL.createObjectURL(blob);
            const fileExtension = blob.type.includes('pdf') ? 'pdf' : 'doc';

            if (fileExtension === 'pdf') {
                preview.innerHTML = `
                    <iframe src="${url}" width="100%" height="600px" style="border: none;"></iframe>
                `;
            } else {
                preview.innerHTML = `
                    <div class="text-center py-4">
                        <i class="fas fa-file-word fa-3x text-primary mb-3"></i>
                        <h5>Document Preview</h5>
                        <p class="text-muted">This document type cannot be previewed in browser.</p>
                        <p class="text-muted">Please download to view the document.</p>
                    </div>
                `;
            }
        })
        .catch(error => {
            preview.innerHTML = `
                <div class="text-center py-4">
                    <i class="fas fa-exclamation-triangle fa-2x text-warning mb-3"></i>
                    <h5>Unable to load document</h5>
                    <p class="text-muted">${error.message}</p>
                </div>
            `;
        });
}

// Auto-submit form on filter change
document.getElementById('category').addEventListener('change', function() {
    document.getElementById('filterForm').submit();
});
</script>
@endpush