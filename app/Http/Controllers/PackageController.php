<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Photo;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::ordered()->get();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'features.*' => 'string',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        // Handle unchecked checkbox
        $validated['is_active'] = $request->has('is_active');

        // Filter out empty features
        if (isset($validated['features'])) {
            $validated['features'] = array_filter($validated['features'], function($feature) {
                return !empty(trim($feature));
            });
        }

        Package::create($validated);

        return redirect()->route('packages.index')
            ->with('success', 'Package created successfully!');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'features.*' => 'string',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        // Handle unchecked checkbox
        $validated['is_active'] = $request->has('is_active');

        // Filter out empty features
        if (isset($validated['features'])) {
            $validated['features'] = array_filter($validated['features'], function($feature) {
                return !empty(trim($feature));
            });
        }

        $package->update($validated);

        return redirect()->route('packages.index')
            ->with('success', 'Package updated successfully!');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index')
            ->with('success', 'Package deleted successfully!');
    }

    public function toggleStatus(Package $package)
    {
        $package->update(['is_active' => !$package->is_active]);

        return redirect()->route('packages.index')
            ->with('success', 'Package status updated!');
    }

    public function publicPackages()
    {
        $packages = Package::active()->ordered()->get();
        $eventTypes = ['Wedding', 'Corporate Event', 'Birthday Party', 'Graduation', 'Other'];
        $photosByEvent = [];
        foreach ($eventTypes as $type) {
            $photosByEvent[$type] = Photo::active()->byEventType($type)->ordered()->get();
        }
        return view('welcome', compact('packages', 'eventTypes', 'photosByEvent'));
    }
}
