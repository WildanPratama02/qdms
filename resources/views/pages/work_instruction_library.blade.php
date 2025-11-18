@extends('layouts.app')

@section('title', 'Work Instruction Library')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Work Instruction Library</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Work Instruction Library</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Search and Filter Section -->
    <div class="container-fluid py-4">
        <div class="container">
            <div class="bg-light rounded p-4 mb-4 shadow-sm">
                <form method="GET" action="{{ route('work_instruction_library') }}" id="filterForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="search" class="form-label fw-bold">
                                <i class="fas fa-search me-2 text-primary"></i>Search Work Instructions
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" id="search" name="search"
                                       placeholder="Search by instruction name..." value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="category" class="form-label fw-bold">
                                <i class="fas fa-list me-2 text-primary"></i>Inspection Category
                            </label>
                            <select class="form-select" id="category" name="category">
                                <option value="">All Categories</option>
                                @foreach($workInstructionCategories as $category)
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
                    <div class="row mt-3">
                        <div class="col-12">
                            <a href="{{ route('work_instruction_library') }}" class="btn btn-outline-secondary btn-sm me-2">
                                <i class="fas fa-times me-1"></i>Clear Filters
                            </a>
                            <span class="text-muted small">
                                <i class="fas fa-info-circle me-1"></i>
                                Click on any document to preview, or use the download button to save locally.
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Results Summary -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">
                    <i class="fas fa-folder-open me-2 text-primary"></i>
                    Found {{ $files->total() }} instruction{{ $files->total() != 1 ? 's' : '' }}
                    @if(request('search') || request('category'))
                        <span class="text-muted">(filtered)</span>
                    @endif
                </h5>
            </div>

            <!-- Work Instruction Categories Overview -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-primary bg-opacity-10 rounded p-4 border border-primary border-opacity-25">
                        <h6 class="mb-3">
                            <i class="fas fa-clipboard-list me-2"></i>
                            Inspection Categories
                        </h6>
                        <div class="row">
                            @foreach($workInstructionCategories as $category)
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <span class="badge bg-gradient-primary text-decoration-none p-2 me-2">
                                        <i class="fas fa-check-circle me-1"></i>{{ $category }}
                                    </span>
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
                            <div class="card h-100 shadow-sm border-0 hover-lift">
                                <div class="card-header bg-gradient-success text-white py-2">
                                    <small class="fw-bold">
                                        <i class="fas fa-tasks me-2"></i>{{ $file->category ?? 'Uncategorized' }}
                                    </small>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3">
                                            @if(str_contains($file->file_name, '.pdf'))
                                                <i class="fas fa-file-pdf text-danger fa-3x"></i>
                                            @elseif(str_contains($file->file_name, '.doc') || str_contains($file->file_name, '.docx'))
                                                <i class="fas fa-file-word text-primary fa-3x"></i>
                                            @elseif(str_contains($file->file_name, '.xls') || str_contains($file->file_name, '.xlsx'))
                                                <i class="fas fa-file-excel text-success fa-3x"></i>
                                            @else
                                                <i class="fas fa-file-alt text-secondary fa-3x"></i>
                                            @endif
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="card-title mb-1 text-truncate" title="{{ str_replace(time() . '_', '', $file->file_name) }}">
                                                <strong>{{ str_replace(time() . '_', '', $file->file_name) }}</strong>
                                            </h6>
                                            <span class="badge bg-success bg-opacity-25 text-success small">
                                                <i class="fas fa-file-alt me-1"></i>Work Instruction
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-muted small mb-3 border-top pt-3">
                                        @if($file->document_date)
                                            <div><i class="fas fa-calendar me-1 text-primary"></i><strong>Document Date:</strong> {{ $file->document_date->format('M d, Y') }}</div>
                                        @endif
                                        <div><i class="fas fa-clock me-1 text-primary"></i><strong>Uploaded:</strong> {{ $file->created_at->format('M d, Y h:i A') }}</div>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="btn-group w-100" role="group">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                    onclick="viewDocument({{ $file->id }})" title="Preview Document">
                                                <i class="fas fa-eye me-1"></i>View
                                            </button>
                                            <a href="{{ route('work_instruction_library.download', $file->id) }}"
                                               class="btn btn-outline-success btn-sm" title="Download Document">
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
                    <i class="fas fa-folder-open fa-4x text-muted mb-3"></i>
                    <h5 class="text-muted">No work instructions found</h5>
                    <p class="text-muted">Try adjusting your filters or search terms, or contact admin to add new work instructions.</p>
                    <a href="{{ route('admin.files') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add Work Instruction
                    </a>
                </div>
            @endif
        </div>
    </div>

    <!-- Document View Modal -->
    <div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-success text-white">
                    <h5 class="modal-title" id="documentModalLabel">
                        <i class="fas fa-file-alt me-2"></i>Work Instruction Preview
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="documentPreview">
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading document...</span>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">Loading work instruction preview...</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Close
                    </button>
                    <button type="button" class="btn btn-success" id="downloadBtn">
                        <i class="fas fa-download me-2"></i>Download Document
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
    .hover-lift {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .bg-gradient-success {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }
    </style>
@endsection

@push('scripts')
<script>
function viewDocument(fileId) {
    const modal = new bootstrap.Modal(document.getElementById('documentModal'));
    const preview = document.getElementById('documentPreview');
    const downloadBtn = document.getElementById('downloadBtn');

    // Update download button
    downloadBtn.onclick = function() {
        window.location.href = `/work_instruction_library/download/${fileId}`;
    };

    // Show loading spinner
    preview.innerHTML = `
        <div class="spinner-border text-success" role="status">
            <span class="visually-hidden">Loading document...</span>
        </div>
        <div class="mt-3">
            <p class="text-muted">Loading work instruction preview...</p>
        </div>
    `;

    modal.show();

    // Load document
    fetch(`/work_instruction_library/view/${fileId}`)
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
                    <div class="ratio ratio-21x9">
                        <iframe src="${url}" style="border: none; width: 100%; height: 100%;"></iframe>
                    </div>
                `;
            } else {
                preview.innerHTML = `
                    <div class="text-center py-5">
                        <i class="fas fa-file-word fa-5x text-primary mb-4"></i>
                        <h5 class="mb-3">Work Instruction Document</h5>
                        <p class="text-muted mb-4">This document type cannot be previewed in browser.</p>
                        <p class="text-muted">Please click the download button to view the complete work instruction.</p>
                        <button type="button" class="btn btn-success" onclick="document.getElementById('downloadBtn').click()">
                            <i class="fas fa-download me-2"></i>Download Work Instruction
                        </button>
                    </div>
                `;
            }
        })
        .catch(error => {
            preview.innerHTML = `
                <div class="text-center py-5">
                    <i class="fas fa-exclamation-triangle fa-3x text-warning mb-4"></i>
                    <h5 class="mb-3">Unable to Load Document</h5>
                    <p class="text-muted mb-4">${error.message}</p>
                    <p class="text-muted">Please try again or contact the administrator if the problem persists.</p>
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