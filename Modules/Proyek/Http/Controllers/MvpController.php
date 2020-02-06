<?php

namespace Modules\Proyek\Http\Controllers;

use Modules\Proyek\Entities\Mvp;
use Modules\Proyek\Entities\Project;
use Illuminate\Http\Request;

class MvpController extends Controller
{
    public function index()
    {
        $mvps = Mvp::all();
        $projects = Project::all();

        return view('proyek::mvps.index', compact('mvps', 'projects'));
    }

    public function create()
    {
        $projects = Project::all();

        return view('proyek::mvps.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'project_id' => 'required',
            'sprint' => 'required',
            'tanggal_rilis' => 'required',
            'deskripsi' => 'required',           
        ]);
        
        Mvp::create($request->all());

        return redirect()->route('mvp.index')->withMessage('Data Mvp Berhasil diTambah');
    }

    public function show($id)
    {
        $mvp = Mvp::findOrFail($id);
        $projects = Project::all();

        return view('proyek::mvps.show', compact('mvp', 'projects'));
    }

    public function edit($id)
    {
        $mvp = Mvp::findOrFail($id);
        $projects = Project::all();

        return view('proyek::mvps.edit', compact('mvp', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'project_id' => 'required',
            'sprint' => 'required',
            'tanggal_rilis' => 'required',
            'deskripsi' => 'required',    
        ]);

        $mvp = Mvp::findOrFail($id);

        $mvp->update($request->all());

        return redirect()->route('mvp.index')->withMessage('Data Mvp berhasil diUbah');
    }

    public function destroy($id)
    {
        $mvp = Mvp::findOrFail($id);
        $mvp->delete();

        return redirect()->route('mvp.index')->withMessage('Data Mvp berhasil diHapus');
    }
}
