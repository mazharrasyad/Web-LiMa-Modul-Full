<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      parent::__construct();
  }

  public function index($prodiId,$timId){
    return view('individu::daftar.index',['prodiId' => $prodiId,'timId' => $timId]);

  }

  public function prodi()
  {
      return view('individu::daftar.prodi');
  }

  public function sprint($user_id)
  {
      return view('individu::daftar.sprint',['userId' => $user_id]);
  }

}
