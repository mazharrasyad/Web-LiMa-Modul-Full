<?php

namespace Modules\Proyek\Http\Controllers;

use Modules\Proyek\Entities\Tim;
use Modules\Proyek\Entities\Semester;
use Modules\Proyek\Entities\Prodi;
use Illuminate\Http\Request;

class TimController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $tims = Tim::all();

        return view('proyek::tims.index', compact('semesters', 'tims'));
    }

    public function create()
    {
        $semesters = Semester::all();
        $prodis = Prodi::all();

        return view('proyek::tims.create', compact('semesters', 'prodis'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:tim',
            'semester_id' => 'required',             
            'prodi_id' => 'required',
        ]);

        Tim::create($request->all());

        return redirect()->route('tim.index')->withMessage('Data Tim Berhasil diTambah');
    }

    public function show($id)
    {
        $tim = Tim::findOrFail($id);
        $semesters = Semester::all();
        $prodis = Prodi::all();

        return view('proyek::tims.show', compact('tim', 'semesters', 'prodis'));
    }

    public function edit($id)
    {
        $tim = Tim::findOrFail($id);
        $semesters = Semester::all();
        $prodis = Prodi::all();

        return view('proyek::tims.edit', compact('tim', 'semesters', 'prodis'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'semester_id' => 'required', 
            'nama' => 'required',
            'prodi_id' => 'required',
        ]);

        $tim = Tim::findOrFail($id);

        $tim->update($request->all());

        return redirect()->route('tim.index')->withMessage('Data Tim berhasil diUbah');
    }

    public function destroy($id)
    {
        $tim = Tim::findOrFail($id);
        $tim->delete();

        return redirect()->route('tim.index')->withMessage('Data Tim berhasil diHapus');
    }
}
