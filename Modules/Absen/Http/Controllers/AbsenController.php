<?php

namespace Modules\Absen\Http\Controllers;
use Modules\Absen\Entities\Sprint;
use Illuminate\Http\Request;
use Modules\Absen\Entities\LogAbsence;
use Modules\Absen\Entities\User;
use DB;
use Auth;
class AbsenController extends Controller
{
    //
	public function index($id)
	{
		$users = User::find($id);
		$absen = LogAbsence::where('user_id','=',Auth::user()->id)->get();
		$sprints = Sprint::all();
		return view('absen::absen.index',compact('sprints','users','absen'));
	}

	public function createabsen(Request $request)
	{
		$absensi= LogAbsence::where( 
			[
    	'sprint_id' => $request->sprint_id,
    		]
		)->get();
		$absen = new LogAbsence;
		$absen->user_id = $request->user_id;
		$absen->sprint_id = $request->sprint_id;
		$absen->jam_mulai = $request->jam_mulai;
		$absen->jam_akhir = $request->jam_akhir;
		$absen->keterangan = $request->keterangan;
		if($absen->jam_mulai <= '08:00::00' and $absen->jam_akhir >='16:45:00'){
			$absen->status_mulai = 'hadir';
			$absen->status_akhir = 'hadir';
				
		
		}elseif ($absen->jam_masuk >= '08:00::00' and $absen->jam_pulang >='16:45:00') {
			$absen->status_mulai = 'telat';
			$absen->status_akhir = 'telat';
		}else   {
			$absen->status_mulai = 'alpha';
			$absen->status_akhir = 'alpha';
		
		}
		if ($absen->status_mulai == 'hadir' and $absen->status_akhir == 'hadir') {
				$absen->nilai = 100;
			}elseif ($absen->status_mulai == 'telat' and $absen->status_akhir == 'telat') {
				$absen->nilai = 50;
			}else{
				$absen->nilai = 0;
			}	
		$absen->save();

		$nilai_kelompok = 0;
		foreach ($absensi as $item=>$value) {
			$nilai_kelompok += $value['nilai'];
		}
		
		DB::update('insert into nilai_kelompok(nilai_kelompok,kelompok,sprint_id) values (?,?,?)',array
			($nilai_kelompok,Auth::user()->kelompok,$absen->sprint_id));
		return redirect('/mahasiswa/dashboard/'.Auth::user()->id.'/hadir');
	}

	public function historyabsen($id)
	{
		$users = User::find($id);
		$sprints = Sprint::all();
		
		$history = LogAbsence::where('user_id','=',$users->id)->get();
		return view('absen::historyabsen',compact('users','history','sprints'));
	}

	public function daftarhadir($id)
	{	
		$users = User::find($id);
		$sprints = Sprint::all();
		
		$hadir = LogAbsence::where('user_id','=',$users->id)->get();
		return view('absen::daftarhadir',compact('users','hadir','sprints'));

		
	}
	public function hadirpersprint($id,$sprintid)
	{	
		$users = User::find($id);
		$sprints = Sprint::find($sprintid);
		
		$hadir = LogAbsence::where('user_id','=',$users->id)->where('sprint_id','=',$sprints->id)->get();
		return view('absen::hadirpersprintmhs',compact('users','hadir','sprints'));

		
	}
	


}
