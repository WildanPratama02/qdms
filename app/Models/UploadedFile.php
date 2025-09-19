<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UploadedFile extends Model
{
    protected $table = 'uploaded_files';
    protected $fillable = ['file_name', 'file_type', 'file_path'];
    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();
        
        static::deleting(function($file) {
            if (Storage::disk('public')->exists($file->file_path)) {
                Storage::disk('public')->delete($file->file_path);
            }
        });
    }
}
