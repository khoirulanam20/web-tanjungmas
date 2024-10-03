<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;

class ProgramController extends Controller
{
    public function index()
    {
        $programArticles = Program::all();
        $programCategories = ProgramCategory::all();
        $programSubCategories = ProgramSubCategory::all(); // Tambahkan ini
        return view('page_admin.programs.index', compact('programArticles', 'programCategories', 'programSubCategories')); // Tambahkan 'programSubCategories'
    }

    public function create()
    {
        $programCategories = ProgramCategory::all();
        $programSubCategories = ProgramSubCategory::all(); // Tambahkan ini
        return view('page_admin.programs.create', compact('programCategories', 'programSubCategories')); // Tambahkan 'programSubCategories'
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'program_category_id' => 'required|exists:program_categories,id',
            'program_sub_category_id' => 'required|exists:program_sub_categories,id',
            
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'img_storage/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img_storage'), $imagePath);
        }

        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'program_category_id' => $request->program_category_id,
            'program_sub_category_id' => $request->program_sub_category_id,
        ]);

        return redirect()->route('programs.index')->with('success', 'Program created successfully.');
    }

    public function edit(Program $program)
    {
        $programCategories = ProgramCategory::all();
        $programSubCategories = ProgramSubCategory::all(); // Tambahkan ini
        return view('page_admin.programs.update', compact('program', 'programCategories', 'programSubCategories')); // Tambahkan 'programSubCategories'
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'program_category_id' => 'required|exists:program_categories,id',
            'program_sub_category_id' => 'required|exists:program_sub_categories,id',
        ]);

        $imagePath = $program->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                $fullPath = public_path($imagePath);
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                }
            }
            $image = $request->file('image');
            $imagePath = 'img_storage/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img_storage'), $imagePath);
        }

        $program->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'program_category_id' => $request->program_category_id,
            'program_sub_category_id' => $request->program_sub_category_id,
        ]);

        return redirect()->route('programs.index')->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        if ($program->image) {
            $imagePath = public_path($program->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $program->delete();

        return redirect()->route('programs.index')->with('success', 'Program deleted successfully.');
    }

    public function showProgramCategories()
    {
        // Mendapatkan semua kategori program
        $programCategories = ProgramCategory::all();
        
        // Mengirimkan variabel $programCategories ke view
        return view('page_web.kelembagaan.kelembagaan', compact('programCategories'));
    }

    public function showProgramsByCategory($id)
    {
        $programCategory = ProgramCategory::findOrFail($id);
        $programs = Program::where('program_category_id', $id)->get();
        return view('page_web.kelembagaan.show', compact('programCategory', 'programs'));
    }

    public function show($id)
    {   
        $program = Program::findOrFail($id);
        return view('page_web.kelembagaan.show', compact('program'));
    }

    public function showProgramSubCategories($id)
    {
        $programCategory = ProgramCategory::with('subCategories')->findOrFail($id);
        return view('page_web.kelembagaan.show_sub', compact('programCategory'));
    }

    public function showProgramsBySubCategory($id)
    {
        $programSubCategory = ProgramSubCategory::with('programCategory')->findOrFail($id);
        $programs = Program::where('program_sub_category_id', $id)->get();
        return view('page_web.kelembagaan.show_list', compact('programSubCategory', 'programs'));
    }
}
