@extends('layouts.admin')

@section('title', 'Files Management')

@push('styles')
<style>
    /* Fix for action buttons */
    .btn-group-sm > .btn, .btn-sm {
        padding: 0.375rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.4;
        border-radius: 0.25rem;
    }

    /* Fix for table responsive overflow */
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    /* Fix for pagination */
    .pagination {
        margin-bottom: 0;
    }

    .page-link {
        color: #0d6efd;
        border-color: #dee2e6;
        padding: 0.5rem 0.75rem;
    }

    .page-link:hover {
        color: #0a58ca;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .page-item.active .page-link {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    /* Fix for button icons alignment */
    .btn i {
        display: inline-block;
        width: 1.25em;
        text-align: center;
    }

    /* Fix for file type icons */
    .fa-2x {
        font-size: 1.5em;
    }

    /* Fix for table styling */
    .table {
        margin-bottom: 0;
        border-bottom: none;
    }

    .table th {
        border-top: none;
        font-weight: 600;
        color: #495057;
        background-color: #f8f9fa;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    /* Fix for badge styling */
    .badge {
        font-size: 0.75em;
    }

    /* Fix for empty state */
    .text-center.py-4 {
        padding: 3rem 1rem !important;
    }

    /* Fix for pagination footer/results display */
    .pagination-footer {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 0;
        border-bottom-left-radius: 0.375rem;
        border-bottom-right-radius: 0.375rem;
    }

    /* Enhanced Bootstrap 5 pagination fixes */
    .d-flex.justify-items-center.justify-content-between {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100%;
    }

    .d-none.flex-sm-fill.d-sm-flex.align-items-sm-center.justify-content-sm-between {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        width: 100%;
        padding: 0.75rem 1rem;
    }

    .small.text-muted {
        font-size: 0.875rem !important;
        color: #6c757d !important;
        margin: 0 !important;
        font-weight: 500 !important;
    }

    .fw-semibold {
        font-weight: 600 !important;
        color: #495057 !important;
    }

    @media (max-width: 576px) {
        .d-none.flex-sm-fill.d-sm-flex.align-items-sm-center.justify-content-sm-between {
            display: none !important;
        }

        .d-flex.justify-content-between.flex-fill.d-sm-none {
            display: flex !important;
        }
    }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-file-alt me-2"></i>Files Management
                    </h5>
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        <i class="fas fa-plus me-2"></i>Upload File
                    </button>
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
                                    <th>File Name</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Document Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($files as $file)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    @if($file->file_type == 'rca')
                                                        <i class="fas fa-file-pdf fa-2x text-danger"></i>
                                                    @elseif($file->file_type == 'bsom')
                                                        <i class="fas fa-file-excel fa-2x text-success"></i>
                                                    @elseif($file->file_type == 'policy')
                                                        <i class="fas fa-file-contract fa-2x text-primary"></i>
                                                    @elseif($file->file_type == 'work_instruction')
                                                        <i class="fas fa-file-alt fa-2x text-info"></i>
                                                    @elseif($file->file_type == 'audit')
                                                        <i class="fas fa-file-invoice fa-2x text-warning"></i>
                                                    @else
                                                        <i class="fas fa-file fa-2x text-secondary"></i>
                                                    @endif
                                                </div>
                                                <div>
                                                    <strong>{{ $file->file_name }}</strong>
                                                    @if($file->category)
                                                        <br><small class="text-muted">{{ $file->category }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info text-uppercase">{{ $file->file_type }}</span></td>
                                        <td>
                                            @if($file->category)
                                                <span class="badge bg-secondary">{{ $file->category }}</span>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($file->document_date)
                                                {{ $file->document_date->format('M d, Y') }}
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-success">
                                                {{ $file->file_type == 'rca' ? 'RCA' : strtoupper($file->file_type) }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="{{ asset("storage/{$file->file_path}") }}"
                                                   class="btn btn-outline-primary"
                                                   title="Preview"
                                                   target="_blank">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ asset("storage/{$file->file_path}") }}"
                                                   class="btn btn-outline-success"
                                                   title="Download"
                                                   download="{{ $file->file_name }}">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                                <form action="{{ route('admin.files.destroy', $file->id) }}" method="POST"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-outline-danger"
                                                            title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this file?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4">
                                            <i class="fas fa-file fa-3x text-muted mb-3"></i>
                                            <h5 class="text-muted">No Files found</h5>
                                            <p class="text-muted">Get started by adding your first file.</p>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                                <i class="fas fa-plus me-2"></i>Add First File
                                            </button>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($files->hasPages())
                        <div class="pagination-footer mt-0">
                            {{ $files->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal Upload -->
    <div class="modal fade" id="uploadModal" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Upload File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tipe File</label>
                        <select name="file_type" class="form-select" required>
                            <option value="">--Pilih--</option>
                            <option value="rca">RCA</option>
                            <option value="bsom">BSOM</option>
                            <option value="policy">Policy</option>
                            <option value="work_instruction">Work Instruction</option>
                            <option value="audit">Audit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category" class="form-select" id="categorySelect">
                            <option value="">--Pilih Kategori--</option>
                        </select>
                    </div>

                    <!-- RCA Categories -->
                    <div id="rcaCategories" style="display: none;">
                        <option value="3rd Party">3rd Party</option>
                        <option value="Warehouse Claims">Warehouse Claims</option>
                    </div>

                    <!-- Policy Categories -->
                    <div id="policyCategories" style="display: none;">
                        <option value="AQL Policy">AQL Policy</option>
                        <option value="BPM Mold Policy">BPM Mold Policy</option>
                        <option value="Cut to Box Policy">Cut to Box Policy</option>
                        <option value="Defective Return Policy">Defective Return Policy</option>
                        <option value="Development Policy">Development Policy</option>
                        <option value="LAB Policy">LAB Policy</option>
                        <option value="Warehouse Policy">Warehouse Policy</option>
                    </div>

                    <!-- Work Instruction Categories -->
                    <div id="workInstructionCategories" style="display: none;">
                        <option value="AQL Inspection">AQL Inspection</option>
                        <option value="Cut to Box Inspection">Cut to Box Inspection</option>
                        <option value="Bottom Inspection">Bottom Inspection</option>
                        <option value="Incoming Chemical Inspection">Incoming Chemical Inspection</option>
                        <option value="Printing and Embosing Inspection">Printing and Embosing Inspection</option>
                        <option value="Stockfit Inspection">Stockfit Inspection</option>
                        <option value="Incoming Material Inspection">Incoming Material Inspection</option>
                    </div>

                    <!-- Audit Categories -->
                    <div id="auditCategories" style="display: none;">
                        <option value="Culture Audit">Culture Audit</option>
                        <option value="QAM Audit">QAM Audit</option>
                        <option value="Subcont Audit">Subcont Audit</option>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Dokumen</label>
                        <input type="date" name="document_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pilih File</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileTypeSelect = document.querySelector('select[name="file_type"]');
        const categorySelect = document.getElementById('categorySelect');
        const rcaCategories = document.getElementById('rcaCategories').querySelectorAll('option');
        const policyCategories = document.getElementById('policyCategories').querySelectorAll('option');
        const workInstructionCategories = document.getElementById('workInstructionCategories').querySelectorAll('option');
        const auditCategories = document.getElementById('auditCategories').querySelectorAll('option');

        function updateCategories() {
            // Clear existing options (except the first one)
            while (categorySelect.children.length > 1) {
                categorySelect.removeChild(categorySelect.lastChild);
            }

            const selectedType = fileTypeSelect.value;

            if (selectedType === 'rca') {
                rcaCategories.forEach(option => {
                    categorySelect.appendChild(option.cloneNode(true));
                });
            } else if (selectedType === 'policy') {
                policyCategories.forEach(option => {
                    categorySelect.appendChild(option.cloneNode(true));
                });
            } else if (selectedType === 'work_instruction') {
                workInstructionCategories.forEach(option => {
                    categorySelect.appendChild(option.cloneNode(true));
                });
            } else if (selectedType === 'audit') {
                auditCategories.forEach(option => {
                    categorySelect.appendChild(option.cloneNode(true));
                });
            }
        }

        fileTypeSelect.addEventListener('change', updateCategories);
    });
    </script>
@endsection