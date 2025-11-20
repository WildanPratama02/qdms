@extends('layouts.admin')

@section('title', 'Edit Quality Ambassador')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-user-edit me-2"></i>Edit Quality Ambassador: {{ $ambassador->name }}
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.quality_ambassadors.update', $ambassador->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           id="name" name="name" value="{{ old('name', $ambassador->name) }}" required
                                           placeholder="Enter full name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="adi_daser_score" class="form-label">Adi Dasler Score</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control @error('adi_daser_score') is-invalid @enderror"
                                               id="adi_daser_score" name="adi_daser_score"
                                               value="{{ old('adi_daser_score', $ambassador->adi_daser_score) }}"
                                               min="0" max="100" step="0.1"
                                               placeholder="0.0 - 100.0">
                                        <span class="input-group-text">/100</span>
                                    </div>
                                    <small class="form-text text-muted">Enter Adi Dasler Score between 0 and 100</small>
                                    @error('adi_daser_score')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="profile_image" class="form-label">Profile Image</label>
                                    <input type="file" class="form-control @error('profile_image') is-invalid @enderror"
                                           id="profile_image" name="profile_image" accept="image/*">
                                    <small class="form-text text-muted">
                                        Allowed formats: JPEG, PNG, JPG, GIF. Max size: 2MB.<br>
                                        Leave empty to keep current image.
                                    </small>
                                    @error('profile_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Current Image Preview -->
                                <div class="mb-3">
                                    <label class="form-label">Current Profile Image</label>
                                    <div class="text-center">
                                        <img src="{{ $ambassador->profile_image_url }}" alt="{{ $ambassador->name }}"
                                             class="rounded-circle shadow-sm"
                                             style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #e3f2fd;"
                                             onerror="this.src='{{ asset('images/default-avatar.svg') }}'">
                                        <div class="mt-2">
                                            <small class="text-muted">Current image</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- New Image Preview -->
                                <div class="mb-3" id="imagePreview" style="display: none;">
                                    <label class="form-label">New Image Preview</label>
                                    <div class="text-center">
                                        <img id="previewImg" src="" alt="Preview" class="rounded-circle"
                                             style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #28a745;">
                                        <div class="mt-2">
                                            <small class="text-success">New image preview</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="motto" class="form-label">Motto</label>
                                    <textarea class="form-control @error('motto') is-invalid @enderror"
                                              id="motto" name="motto" rows="3"
                                              placeholder="Enter the ambassador's motto or quote">{{ old('motto', $ambassador->motto) }}</textarea>
                                    <small class="form-text text-muted">A short, inspiring quote or motto (max 500 characters)</small>
                                    @error('motto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('admin.quality_ambassadors.index') }}"
                                       class="btn btn-secondary">
                                        <i class="fas fa-arrow-left me-2"></i>Back to List
                                    </a>
                                    <div>
                                        <a href="{{ route('quality_ambassador.show', $ambassador->id) }}"
                                           target="_blank"
                                           class="btn btn-outline-info me-2">
                                            <i class="fas fa-eye me-2"></i>View Profile
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Update Ambassador
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('profile_image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }
});

document.getElementById('adi_daser_score').addEventListener('input', function(e) {
    const value = parseFloat(e.target.value);
    if (value < 0) e.target.value = 0;
    if (value > 100) e.target.value = 100;
});
</script>
@endsection