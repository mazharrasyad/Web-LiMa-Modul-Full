<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\LogAbsence;
class AbsencelogController extends Controller
{
    //
    public function index()
    {
    	return LogAbsence::all();
    }

    public function create(Request $request)
    {
    	$absencelogs = new LogAbsence;
    	$absencelogs->tanggal_masuk = $request->tanggal_masuk;
    	$absencelogs->jam_masuk = $request->jam_masuk;
    	$absencelogs->jam_pulang = $request->jam_pulang;
    	$absencelogs->status = $request->status;
    	$absencelogs->keterangan = $request->keterangan;
        $absencelogs->sprint_id = $request->sprint_id;
    	$absencelogs->user_id = $request->user_id;    
        $absencelogs->kelompok_id = $request->kelompok_id;

    	$absencelogs->save();

    	return "data absensi berhasil bertambah";
    }
    public function delete($id)
    {
    	$absencelogs = LogAbsence::find($id);
    	$absencelogs->delete();
    	return "data absensi berhasil di hapus";
    }

}
