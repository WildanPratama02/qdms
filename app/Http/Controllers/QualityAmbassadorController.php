<?php

namespace App\Http\Controllers;

use App\Models\QualityAmbassador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QualityAmbassadorController extends Controller
{
    public function index()
    {
        $ambassadors = QualityAmbassador::orderBy('id', 'asc')->get();

        return view('pages.quality_ambassador', compact('ambassadors'));
    }

    public function show($id)
    {
        $ambassador = QualityAmbassador::findOrFail($id);

        return view('pages.ambassador_detail', compact('ambassador'));
    }

    public function admin()
    {
        $ambassadors = QualityAmbassador::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.quality_ambassadors.index', compact('ambassadors'));
    }

    public function create()
    {
        return view('admin.quality_ambassadors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'motto' => 'nullable|string|max:500',
            'adi_daser_score' => 'nullable|numeric|min:0|max:100',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('profile_image');

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $fileName = time().'_'.$image->getClientOriginalName();
            $image->storeAs('ambassadors', $fileName, 'public');
            $data['profile_image'] = "ambassadors/{$fileName}";
        }

        QualityAmbassador::create($data);

        return redirect()->route('admin.quality_ambassadors.index')
            ->with('success', 'Quality Ambassador created successfully!');
    }

    public function edit($id)
    {
        $ambassador = QualityAmbassador::findOrFail($id);

        return view('admin.quality_ambassadors.edit', compact('ambassador'));
    }

    public function update(Request $request, $id)
    {
        $ambassador = QualityAmbassador::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'motto' => 'nullable|string|max:500',
            'adi_daser_score' => 'nullable|numeric|min:0|max:100',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('profile_image');

        if ($request->hasFile('profile_image')) {
            // Delete old image
            if ($ambassador->profile_image && Storage::disk('public')->exists($ambassador->profile_image)) {
                Storage::disk('public')->delete($ambassador->profile_image);
            }

            $image = $request->file('profile_image');
            $fileName = time().'_'.$image->getClientOriginalName();
            $image->storeAs('ambassadors', $fileName, 'public');
            $data['profile_image'] = "ambassadors/{$fileName}";
        }

        $ambassador->update($data);

        return redirect()->route('admin.quality_ambassadors.index')
            ->with('success', 'Quality Ambassador updated successfully!');
    }

    public function destroy($id)
    {
        $ambassador = QualityAmbassador::findOrFail($id);

        // Delete profile image if exists
        if ($ambassador->profile_image && Storage::disk('public')->exists($ambassador->profile_image)) {
            Storage::disk('public')->delete($ambassador->profile_image);
        }

        $ambassador->delete();

        return redirect()->route('admin.quality_ambassadors.index')
            ->with('success', 'Quality Ambassador deleted successfully!');
    }
}
