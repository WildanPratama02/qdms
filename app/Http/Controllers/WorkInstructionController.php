<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkInstructionController extends Controller
{
    public function index(Request $request)
    {
        // Define work instruction categories
        $workInstructionCategories = [
            'AQL Inspection',
            'Cut to Box Inspection',
            'Bottom Inspection',
            'Incoming Chemical Inspection',
            'Printing and Embosing Inspection',
            'Stockfit Inspection',
            'Incoming Material Inspection',
        ];

        $query = UploadedFile::where('file_type', 'work_instruction')->latest();

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
        $categories = UploadedFile::where('file_type', 'work_instruction')
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        return view('pages.work_instruction_library', compact('files', 'categories', 'workInstructionCategories'));
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
