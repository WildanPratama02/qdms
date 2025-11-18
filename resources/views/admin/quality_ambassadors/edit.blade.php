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
                                           id="name" name="name" value="{{ old('name', $ambassador->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control @error('position') is-invalid @enderror"
                                           id="position" name="position" value="{{ old('position', $ambassador->position) }}">
                                    @error('position')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="department" class="form-label">Department</label>
                                    <input type="text" class="form-control @error('department') is-invalid @enderror"
                                           id="department" name="department" value="{{ old('department', $ambassador->department) }}">
                                    @error('department')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="adi_daser_score" class="form-label">Adi Daser Score (0-100)</label>
                                    <input type="number" class="form-control @error('adi_daser_score') is-invalid @enderror"
                                           id="adi_daser_score" name="adi_daser_score"
                                           value="{{ old('adi_daser_score', $ambassador->adi_daser_score) }}" min="0" max="100" step="0.1">
                                    @error('adi_daser_score')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Enter a score between 0 and 100</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="profile_image" class="form-label">Profile Image</label>
                                    <input type="file" class="form-control @error('profile_image') is-invalid @enderror"
                                           id="profile_image" name="profile_image" accept="image/*">
                                    @error('profile_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    @if($ambassador->profile_image)
                                        <div class="mt-2">
                                            <small class="text-muted">Current image:</small><br>
                                            <img src="{{ $ambassador->profile_image_url }}"
                                                 alt="Current profile image"
                                                 class="img-thumbnail mt-1"
                                                 style="max-height: 100px;">
                                            <br>
                                            <small class="text-muted">Leave empty to keep current image</small>
                                        </div>
                                    @endif

                                    <div class="form-text">Allowed formats: JPEG, PNG, JPG, GIF (Max: 2MB)</div>
                                </div>

                                <div class="mb-3">
                                    <label for="motto" class="form-label">Motto</label>
                                    <textarea class="form-control @error('motto') is-invalid @enderror"
                                              id="motto" name="motto" rows="2">{{ old('motto', $ambassador->motto) }}</textarea>
                                    @error('motto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">A short inspirational quote or motto (max: 500 characters)</div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input @error('is_active') is-invalid @enderror"
                                               type="checkbox" id="is_active" name="is_active" value="1"
                                               {{ $ambassador->is_active ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">
                                            Active
                                        </label>
                                        @error('is_active')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">Uncheck to make this ambassador inactive</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="biography" class="form-label">Biography</label>
                                    <textarea class="form-control @error('biography') is-invalid @enderror"
                                              id="biography" name="biography" rows="6">{{ old('biography', $ambassador->biography) }}</textarea>
                                    @error('biography')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Detailed biography describing experience, achievements, and qualifications</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.quality_ambassadors.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Back to List
                            </a>
                            <div>
                                <a href="{{ route('quality_ambassador.show', $ambassador->id) }}" class="btn btn-info me-2">
                                    <i class="fas fa-eye me-2"></i>View Profile
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Update Ambassador
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection