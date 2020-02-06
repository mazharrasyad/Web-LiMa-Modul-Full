<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\Prodi;
class ProdiController extends Controller
{
    //
    public function index()
    {
    	return Prodi::all();
    }

    public function create(Request $request)
    {
    	$prodi = new Prodi;
    	$prodi->kode = $request->kode;
    	$prodi->nama = $request->nama;
    	$prodi->save();

    	return "data berhasil masuk";
    }

    public function delete($id)
    {
    	$prodi = Prodi::find($id);
    	$prodi->delete();
    	return "data berhasil dihapus";
    }
}
