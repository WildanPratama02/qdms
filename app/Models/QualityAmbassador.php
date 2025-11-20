<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class QualityAmbassador extends Model
{
    protected $table = 'quality_ambassadors';

    protected $fillable = [
        'name',
        'profile_image',
        'motto',
        'adi_daser_score',
    ];

    protected $casts = [
        'adi_daser_score' => 'decimal:2',
    ];

    protected $appends = ['profile_image_url'];

    public function getProfileImageUrlAttribute(): string
    {
        if ($this->profile_image && Storage::disk('public')->exists($this->profile_image)) {
            return asset("storage/{$this->profile_image}");
        }

        return asset('images/default-avatar.svg');
    }
}
