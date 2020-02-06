<?php

namespace Modules\Proyek\Http\Controllers;

use Modules\Proyek\Entities\Project;
use Modules\Proyek\Entities\Semester;
use Modules\Proyek\Entities\Mahasiswa;
use Modules\Proyek\Entities\Scrummaster;
use Modules\Proyek\Entities\Tim;
use Modules\Proyek\Entities\Membertim;
use Illuminate\Http\Request;

class PilihController extends Controller
{
    public function tim($id)
    {
        $project = Project::findOrFail($id);
        $tims = Tim::all();
        $mahasiswas = 'Modules\Absen\Entities\User'::all();
        $membertims = Membertim::all();

        return view('proyek::projects.tim', compact('project', 'tims', 'mahasiswas', 'membertims'));
    }

    public function pilih(Request $request, $id)
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
