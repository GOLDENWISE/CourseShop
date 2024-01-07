<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        
    }

    public function spesificForm(Course $course){
        return view('addMaterial', [
            'title' => "Tambah Materi ".$course->name,
            'Title' => 'Materi',
            'course' => $course,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        if ($request->hasFile('modul')) {
            $courseName = Course::find($request->course_id)->name;
            $modulName = $request->file('modul')->getClientOriginalName();
            $modulPath = $request->file('modul')->storeAs('modul/'.$courseName, $modulName, 'public');
            
            Material::create([
                'name' => $request->name,
                'course_id' => $request->course_id,
                'modul' => $modulPath, // Save the file path, not the file itself
                'video' => $request->video,
                'description' => $request->description,
            ]);
            return redirect()->route('mentor.show', ['mentor' => $request->course_id])
                            ->with('success', 'Materi berhasil ditambahkan');
        }
    
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $id = $material->course_id;
        $material->delete();
        return redirect()->route('mentor.show', ['mentor' => $id])->with('success', 'Materi telah terhapus');
    }
}
