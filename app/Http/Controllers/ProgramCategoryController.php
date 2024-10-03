<?php

namespace App\Http\Controllers;

use App\Models\ProgramCategory;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramCategoryController extends Controller
{
    public function index()
    {
        $programCategories = ProgramCategory::all();
        $programs = Program::all(); // Menambahkan query untuk mengambil semua program
        return view('page_admin.programs.index', compact('programCategories', 'programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ProgramCategory::create([
            'name' => $request->name,
        ]); 

        return redirect()->route('programs.index')->with('success', 'Program Category created successfully.');
    }

    public function update(Request $request, ProgramCategory $programCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $programCategory->update([
            'name' => $request->name,
        ]);

        return redirect()->route('programs.index')->with('success', 'Program Category updated successfully.');
    }

    public function create()
    {
        return view('page_admin.program_categories.create');
    }

    public function destroy(ProgramCategory $programCategory)
    {
        $programCategory->delete();
        return redirect()->route('programs.index')->with('success', 'Program Category deleted successfully.');
    }

    public function edit(ProgramCategory $programCategory)
    {
        return view('page_admin.program_categories.update', compact('programCategory'));
    }
}
