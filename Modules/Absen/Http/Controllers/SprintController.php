<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\Sprint;
use Modules\Absen\Entities\LogAbsence;
class SprintController extends Controller
{
    //
    public function index()
    {
    	return Sprint::all();
    }

    public function create(Request $request)
    {
    	$sprints = new Sprint;
    	$sprints->ke = $request->ke;
    	$sprints->tanggal_mulai = $request->tanggal_mulai;
    	$sprints->tanggal_akhir = $request->tanggal_akhir;
    	$sprints->save();

    	return "data sprint berhasil ditambah";
    }
    public function delete($id)
    {
    	$sprints = Sprint::find($id);
    	$sprints->delete();

    	return "data sprint berhasil dihapus";
    }

    public function viewsprint()
    {  	
    	$sprints = Sprint::all();
        $hadir = LogAbsence::orderBy('sprint_id','ASC')->get();
  
    	return view('absen::sprint.viewsprint',compact('sprints','hadir'));
    }

    public function createsprint(Request $request)
    {
    	$sprints = new Sprint;
    	$sprints->ke = $request->ke;
    	$sprints->tanggal_mulai = $request->tanggal_mulai;
    	$sprints->tanggal_akhir = $request->tanggal_akhir;
    	$sprints->save();

    	return redirect('/admin/dashboard/hadir');
    	
    }

}
