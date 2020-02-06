<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Individu\Entities\Point_member;
use Modules\Individu\Entities\User;
use Modules\Individu\Entities\Sprint;
use Illuminate\Support\Facades\DB;

class PointMemberController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      parent::__construct();
  }

  public function index()
  {
    return view('individu::point_member.index');
  }

  public function createPage(){
    return view('individu::point_member.create');

  }

  public function updatePage($userId,$sprintId){
    return view('individu::point_member.update',['userId' => $userId,'sprintId' => $sprintId]);

  }
}
