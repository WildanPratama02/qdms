<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class FileController extends Controller
{
    public function index() {
        $files = UploadedFile::latest()->get();
        return view('admin.files.index', compact('files'));
    }

    public function store(Request $request) {
        try {
            // Validate request
            $request->validate([
                'file' => 'required|mimes:pdf,doc,docx,xlsx|max:20480',
                'file_type' => 'required|in:rca,bsom',
            ]);

            // Check if storage directory exists, if not create it
            $baseStoragePath = storage_path('app/public/uploads');
            if (!file_exists($baseStoragePath)) {
                mkdir($baseStoragePath, 0775, true);
            }

            $fileType = $request->file_type;
            $typePath = $baseStoragePath . '/' . $fileType;
            if (!file_exists($typePath)) {
                mkdir($typePath, 0775, true);
            }

            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            // Store with explicit path
            $path = $file->storeAs('uploads/' . $fileType, $fileName, 'public');
            
            // Verify file was uploaded
            if (!Storage::disk('public')->exists($path)) {
                throw new \Exception('File upload failed - Storage error');
            }

            // Create database record
            UploadedFile::create([
                'file_name' => $fileName,
                'file_type' => $fileType,
                'file_path' => $path,
            ]);

            return redirect()->back()->with('success', 'File uploaded successfully!');

        } catch (\Exception $e) {
            Log::error('File Upload Error: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to upload file: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy($id) {
        try {
            $file = UploadedFile::findOrFail($id);
            if (Storage::disk('public')->exists($file->file_path)) {
                Storage::disk('public')->delete($file->file_path);
            }
            $file->delete();
            return redirect()->back()->with('success', 'File deleted successfully!');
        } catch (\Exception $e) {
            Log::error('File Deletion Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete file.');
        }
    }
}
