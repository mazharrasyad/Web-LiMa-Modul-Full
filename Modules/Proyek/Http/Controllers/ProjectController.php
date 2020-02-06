<?php

namespace Modules\Proyek\Http\Controllers;

use Modules\Proyek\Entities\Project;
use Modules\Proyek\Entities\Semester;
use Modules\Proyek\Entities\Scrummaster;
use Modules\Proyek\Entities\Tim;
use Modules\Proyek\Entities\Membertim;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $semesters = Semester::all();   

        return view('proyek::projects.index', compact('projects', 'semesters'));
    }

    public function create()
    {
        $semesters = Semester::all();

        return view('proyek::projects.create', compact('semesters'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'jumlah_sprint' => 'required',
            'budget' => 'required',
            'semester_id' => 'required',                 
        ]);
        
        Project::create($request->all());

        return redirect()->route('project.index')->withMessage('Data Project Berhasil diTambah');
        // return response()->json($request, 200);
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $semesters = Semester::all();
        // $scrummasters = Scrummaster::all();

        return view('proyek::projects.show', compact('project', 'semesters'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $semesters = Semester::all();
        $scrummasters = 'Modules\Absen\Entities\User'::all();

        return view('proyek::projects.edit', compact('project', 'semesters', 'scrummasters'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'jumlah_sprint' => 'required',
            'budget' => 'required',
            'semester_id' => 'required',                
        ]);

        $project = Project::findOrFail($id);

        $project->update($request->all());

        return redirect()->route('project.index')->withMessage('Data Project berhasil diUbah');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('project.index')->withMessage('Data Project berhasil diHapus');
    }

    public function tim($id)
    {
        $project = Project::findOrFail($id);
        $tims = Tim::all();
        $membertims = Membertim::all();

        return view('proyek::projects.tim', compact('project', 'tims', 'membertims'));
    }

    public function pilihtim(Request $request, $id)
    {
        $this->validate($request,[
            'tim_id' => 'required',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect()->route('project.index')->withMessage('Tim Berhasil diPilih');
    }

    public function membertim($id)
    {
        $project = Project::findOrFail($id);
        $tims = Tim::all();
        $membertims = Membertim::all();

        return view('proyek::projects.membertim', compact('project', 'tims', 'membertims'));
    }
}
