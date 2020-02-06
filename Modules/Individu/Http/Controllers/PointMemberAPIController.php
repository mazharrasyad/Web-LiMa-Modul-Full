<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Individu\Entities\Point_member;
use Modules\Individu\Entities\User;
use Modules\Individu\Entities\Sprint;
use Illuminate\Support\Facades\DB;

class PointMemberAPIController extends Controller
{
  public function __construct()
  {
      parent::__construct();
  }

  public function index()
  {
    return Point_member::all();
  }

  public function create(request $request){
      $point_member = new Point_member;
      $point_member->point = -1 * count($request->keterangan);
      $keterangan = $request->keterangan;
      $point_member->keterangan =implode(',',$keterangan);
      $point_member->dosen_scrum_master_id = $request->dosen_scrum_master_id;
      $point_member->mahasiswa_id = $request->mahasiswa_id;
      $point_member->sprint_id = $request->sprint_id;
      $point_member->save();

      return $point_member;
  }

  //buat point_member jika sprint di buat
  public function createT($sprint_id,$mahasiswa_id){
      $point_member = new Point_member;
      $point_member->point = 1;
      $point_member->keterangan ="";
      $point_member->dosen_scrum_master_id = 16;
      $point_member->mahasiswa_id =$mahasiswa_id;
      $point_member->sprint_id =$sprint_id;
      $point_member->save();

      return $point_member;
  }

  public function select($id){
    $point_member =DB::table('point_member')
            ->leftJoin('sprint', 'sprint.id', '=', 'point_member.sprint_id')
            ->leftJoin('user', 'user.id', '=', 'point_member.mahasiswa_id')
            ->select(DB::raw('point_member.id,user.name,sprint.nama,point_member.point'))
            ->where('user.id', '=', $id)
            ->orderby('sprint.nama')
            ->get();
    return $point_member;
  }

  public function updatePage($userId,$sprintId){
      $user = User::findOrFail($userId);
      $sprint = Sprint::findOrFail($sprintId);

      $point_member = DB::table('point_member')
              ->select(DB::raw('*'))
              ->where('point_member.mahasiswa_id','=',$userId)
              ->where('point_member.sprint_id','=',$sprintId)
              ->first();
      return compact('user','sprint','point_member');
  }

  public function update(request $request,$userId,$sprintId){
      if (is_null($request->keterangan)) {
        $keterangan = $request->keterangan;
        $point = 0;
        $dosen_scrum_master_id = $request->dosen_scrum_master_id;
      }
      else {
        $keterangan = implode(',',$request->keterangan);
        $point = -1 * count($request->keterangan);
        $dosen_scrum_master_id = $request->dosen_scrum_master_id;
      }

      $point_member = Point_member::where('point_member.mahasiswa_id', $userId)
        ->where('point_member.sprint_id',$sprintId)
        ->update([
           'keterangan'=> $keterangan,
           'point'=> $point,
           'dosen_scrum_master_id'=> $dosen_scrum_master_id,
           'mahasiswa_id'=> $userId,
           'sprint_id'=> $sprintId,
        ]);
      // echo "$keterangan";
      return redirect($request->redirect_url);
  }

  public function updatemobile(request $request,$userId,$sprintId){
      $keterangan = $request->keterangan;
      $keterangan = explode(',',$request->keterangan);
      $point = -1 * count($keterangan);
      $keterangan = $request->keterangan;
      $dosen_scrum_master_id = $request->dosen_scrum_master_id;

      $point_member = Point_member::where('point_member.mahasiswa_id', $userId)
        ->where('point_member.sprint_id',$sprintId)
        ->update([
           'keterangan'=> $keterangan,
           'point'=> $point,
           'dosen_scrum_master_id'=> $dosen_scrum_master_id,
           'mahasiswa_id'=> $userId,
           'sprint_id'=> $sprintId,
        ]);

      return $point_member;
  }

  public function delete($id){
    $point_member = Point_member::find($id);
    $point_member->delete();

    return $point_member;
  }

  //delete point jika sprint di delete
  public function deleteT($sprint_id,$mahasiswa_id){
    $point_member = DB::table('point_member')
                ->where('sprint_id','=',$sprint_id)
                ->where('mahasiswa_id','=',$mahasiswa_id)
                ->get();
    $point_member->delete();

    return $point_member;
  }
}
