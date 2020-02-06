<?php

namespace Modules\Proyek\Http\Controllers;

use Modules\Proyek\Entities\Membertim;
use Modules\Proyek\Entities\Tim;
use Modules\Proyek\Entities\Mahasiswa;
use Modules\Proyek\Entities\Peran;
use Illuminate\Http\Request;

class MembertimController extends Controller
{
    public function index()
    {
        $tims = Tim::all();
        $membertims = Membertim::all();

        return view('proyek::membertims.index', compact('tims', 'membertims'));
    }

    public function create()
    {
        $tims = Tim::all();
        $mahasiswas = 'Modules\Absen\Entities\User'::all();
        $perans = Peran::all();

        return view('proyek::membertims.create', compact('tims', 'mahasiswas', 'perans'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tim_id' => 'required', 
            'mahasiswa_id' => 'required',
            'peran_id' => 'required',
            'tanggung_jawab' => 'required',
        ]);

        Membertim::create($request->all());

        return redirect()->route('membertim.index')->withMessage('Data Membertim Berhasil diTambah');
    }

    public function show($id)
    {
        $membertim = Membertim::findOrFail($id);
        $tims = Tim::all();

        return view('proyek::membertims.show', compact('membertim', 'tims'));
    }

    public function edit($id)
    {
        $tims = Tim::all();
        $perans = Peran::all();
        $mahasiswas = 'Modules\Absen\Entities\User'::all();
        $membertim = Membertim::findOrFail($id);        

        return view('proyek::membertims.edit', compact('tims', 'mahasiswas', 'perans', 'membertim'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tim_id' => 'required', 
            'mahasiswa_id' => 'required',
            'peran_id' => 'required',
            'tanggung_jawab' => 'required',
        ]);

        $membertim = Membertim::findOrFail($id);

        $membertim->update($request->all());

        return redirect()->route('membertim.index')->withMessage('Data Membertim berhasil diUbah');
    }

    public function destroy($id)
    {
        $membertim = Membertim::findOrFail($id);
        $membertim->delete();

        return redirect()->route('membertim.index')->withMessage('Data Membertim berhasil diHapus');
    }
}
