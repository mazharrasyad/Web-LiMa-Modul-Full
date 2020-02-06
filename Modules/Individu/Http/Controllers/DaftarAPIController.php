<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Individu\Entities\User;
use Modules\Individu\Entities\Tim;
use Modules\Individu\Entities\Prodi;
use Illuminate\Support\Facades\DB;

class DaftarAPIController extends Controller
{
  public function __construct()
  {
      parent::__construct();
  }

  public function index($prodiId,$timId)
  {
    $user = "";
    $namaProdi = "Pilih Prodi";
    $namaTim = "Pilih Kelompok";
    $user = DB::table('user')
            ->leftJoin('tim', 'tim.id', '=', 'user.tim_id')
            ->leftJoin('prodi', 'prodi.id', '=', 'user.prodi_id')
            ->select(DB::raw('user.id,user.name,tim.nama as namatim,prodi.nama as namaprodi'))
            ->where('user.role','=','mahasiswa');

    if($prodiId != 0){
      $namaProdi= Prodi::select(DB::raw('nama'))->findOrFail($prodiId);
      $namaProdi = $namaProdi['nama'];
      $user = $user->where('user.prodi_id','=',$prodiId);
    }

    if($timId != 0){
      $namaTim= Tim::select(DB::raw('nama'))->findOrFail($timId);
      $namaTim = $namaTim['nama'];
      $user = $user->where('user.tim_id','=',$timId);
    }

    $user = $user->get();
    return compact('user','namaProdi','namaTim','prodiId','timId');
  }

  public function tim($prodi_id)
  {
    $tim =DB::table('tim')
            ->leftJoin('prodi', 'prodi.id', '=', 'tim.prodi_id')
            ->select(DB::raw('tim.id,tim.nama'))
            ->where('tim.prodi_id', '=', $prodi_id)
            ->get();
      return view('individu::daftar.tim')->with('tim', json_decode($tim, true));
  }

  public function tim_member($tim_id)
  {
    $user =DB::table('user')
            ->leftJoin('tim', 'tim.id', '=', 'user.tim_id')
            ->select(DB::raw('user.id,user.name,tim.nama'))
            ->where('user.tim_id', '=', $tim_id)
            ->get();
      return view('individu::daftar.tim_member',['nama' => $user[0]->nama])->with('user', json_decode($user, true));
  }

  public function sprint($user_id)
  {
    $nama = DB::table('user')
                ->select(DB::raw('id,name'))
                ->where('id','=',$user_id)
                ->first();
    $sprint =DB::table('sprint')
            ->join('nilai_final_tim', 'sprint.id', '=', 'nilai_final_tim.sprint_id')
            ->join('tim', 'tim.id', '=', 'nilai_final_tim.tim_id')
            ->join('user', 'user.tim_id', '=', 'tim.id')
            ->join('point_member','point_member.sprint_id','=','sprint.id')
            ->select(DB::raw('sprint.id as sprint_id,sprint.nama as nama, nilai_final_tim.final_skor as nilai,point_member.point as point,point_member.keterangan,point_member.id as point_member_id'))
            ->where('user.id','=',$user_id)
            ->where('point_member.mahasiswa_id','=',$user_id)
            ->orderby('sprint.nama')
            ->groupby('sprint.nama','nilai_final_tim.final_skor','point_member.point','point_member.keterangan','point_member.id','sprint.id')
            ->get();
      //return view('individu::daftar.sprint',['user_id' => $user_id,'nama' =>  $nama[0]->name])->with('sprint', json_decode($sprint, true));
      return compact('sprint','nama','user_id');
  }
}
