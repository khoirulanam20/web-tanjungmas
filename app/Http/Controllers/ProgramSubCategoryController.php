<?php

namespace App\Http\Controllers;

use App\Models\ProgramSubCategory;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;

class ProgramSubCategoryController extends Controller
{
    public function create()
    {
        $programCategories = ProgramCategory::all();
        return view('page_admin.program_sub_categories.create', compact('programCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'program_category_id' => 'required|exists:program_categories,id',
        ]);

        ProgramSubCategory::create([
            'name' => $request->name,
            'program_category_id' => $request->program_category_id,
        ]);

        return redirect()->route('programs.index')->with('success', 'Program Sub Category created successfully.');
    }

    public function edit(ProgramSubCategory $programSubCategory)
    {
        $programCategories = ProgramCategory::all();
        return view('page_admin.program_sub_categories.update', compact('programSubCategory', 'programCategories'));
    }

    public function update(Request $request, ProgramSubCategory $programSubCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'program_category_id' => 'required|exists:program_categories,id',
        ]);

        $programSubCategory->update([
            'name' => $request->name,
            'program_category_id' => $request->program_category_id,
        ]);

        return redirect()->route('programs.index')->with('success', 'Program Sub Category updated successfully.');
    }

    public function destroy(ProgramSubCategory $programSubCategory)
    {
        $programSubCategory->delete();
        return redirect()->route('programs.index')->with('success', 'Program Sub Category deleted successfully.');
    }
}
