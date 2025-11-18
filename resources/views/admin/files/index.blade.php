<!-- resources/views/admin/files/index.blade.php -->
@extends('admin.layout')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Manajemen File</h5>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#uploadModal">+ Upload
                File</button>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama File</th>
                        <th>Tipe</th>
                        <th>Kategori</th>
                        <th>Tanggal Dokumen</th>
                        <th>Preview</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                        <tr>
                            <td>{{ $file->id }}</td>
                            <td>{{ $file->file_name }}</td>
                            <td><span class="badge bg-info">{{ strtoupper($file->file_type) }}</span></td>
                            <td>
                                @if($file->category)
                                    <span class="badge bg-secondary">{{ $file->category }}</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                @if($file->document_date)
                                    {{ $file->document_date->format('d M Y') }}
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                                    data-bs-target="#previewModal{{ $file->id }}">Preview</button>
                            </td>
                            <td>
                                <form action="{{ route('admin.files.delete', $file->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus file ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Preview -->
                        <div class="modal fade" id="previewModal{{ $file->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Preview File</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="{{ asset('storage/' . $file->file_path) }}" class="w-100"
                                            height="500px"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Upload -->
    <div class="modal fade" id="uploadModal" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.files.upload') }}" method="POST" enctype="multipart/form-data"
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