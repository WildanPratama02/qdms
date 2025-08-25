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
                        </select>
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
@endsection