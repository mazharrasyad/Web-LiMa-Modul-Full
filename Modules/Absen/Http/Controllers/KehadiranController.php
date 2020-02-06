<?php

namespace Modules\Absen\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Modules\Absen\Entities\LogAbsence;
use Modules\Absen\Entities\Sprint;
use Modules\Absen\Entities\Kelompok;
use Modules\Absen\Entities\NilaiKelompok;

class KehadiranController extends Controller
{
    //

    public function hadir()
    {
    	$sprints = Sprint::all();
        $hadir = LogAbsence::orderBy('sprint_id','DESC')->get();
        return view('absen::admin.hadir',compact('hadir','sprints'));
    }

    public function hadirpersprint($id)
    {
    	
    	$sprints = Sprint::find($id);
        $hadir = LogAbsence::where('sprint_id','=',$sprints->id)->orderBy('sprint_id','ASC')->get();
		return view('absen::admin.hadirpersprint',compact('hadir','sprints'));

    }

    public function poinkelompok($id)
    {
        
        $sprints = Sprint::find($id);
        $kelompoks = DB::table('nilai_kelompok')->distinct()->select('kelompok',max(['nilai_kelompok']))->where('sprint_id','=',$sprints->id)->get();
        return view('admin.poinkelompok',compact('sprints','kelompoks'));
    }
}
