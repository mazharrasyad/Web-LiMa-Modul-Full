<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\Kelompok;
class KelompokController extends Controller
{
    //
    public function index()
    {
    	return Kelompok::all();
    }

    public function create(Request $request)
    {
    	$kelompok = new Kelompok;
    	$kelompok->nama_kelompok = $request->nama_kelompok;
    	$kelompok->poin_kelompok = $request->poin_kelompok;
    	$kelompok->save();
    	return "data kelompok berhasil bertambah"; 
    }


    public function delete($id)
    {
    	$users = Kelompok::find($id);
    	$users->delete();

    	return "data berhasil dihapus";
    }
}
