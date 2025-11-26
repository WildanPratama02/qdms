<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RcaLibraryController extends Controller
{
    public function index(Request $request)
    {
        $query = UploadedFile::where('file_type', 'rca')->latest();

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter by year
        if ($request->filled('year')) {
            $query->whereYear('document_date', $request->year);
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

        // Get available years for filter (SQLite compatible)
        $years = UploadedFile::where('file_type', 'rca')
            ->whereNotNull('document_date')
            ->get()
            ->map(function ($file) {
                return $file->document_date->year;
            })
            ->unique()
            ->sortDesc()
            ->values();

        // Get available categories
        $categories = UploadedFile::where('file_type', 'rca')
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        return view('pages.rca_library', compact('files', 'years', 'categories'));
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
