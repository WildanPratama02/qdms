<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PolicyLibraryController extends Controller
{
    public function index(Request $request)
    {
        // Define policy categories
        $policyCategories = [
            'AQL Policy',
            'BPM Mold Policy',
            'Cut to Box Policy',
            'Defective Return Policy',
            'Development Policy',
            'LAB Policy',
            'Warehouse Policy',
        ];

        $query = UploadedFile::where('file_type', 'policy')->latest();

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Search by document name
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('file_name', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('category', 'LIKE', "%{$searchTerm}%");
            });
        }

        $files = $query->paginate(12);

        // Get available categories from database
        $categories = UploadedFile::where('file_type', 'policy')
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        return view('pages.policy_library', compact('files', 'categories', 'policyCategories'));
    }

    public function download($id)
    {
        $file = UploadedFile::findOrFail($id);

        if (! Storage::disk('public')->exists($file->file_path)) {
            abort(404, 'File not found');
        }

        $originalName = str_replace(time().'_', '', $file->file_name);

        return Storage::disk('public')->download($file->file_path, $originalName);
    }

    public function view($id)
    {
        $file = UploadedFile::findOrFail($id);

        if (! Storage::disk('public')->exists($file->file_path)) {
            abort(404, 'File not found');
        }

        $filePath = Storage::disk('public')->path($file->file_path);
        $originalName = str_replace(time().'_', '', $file->file_name);

        return response()->file($filePath, [
            'Content-Disposition' => 'inline; filename="'.$originalName.'"',
        ]);
    }
}
