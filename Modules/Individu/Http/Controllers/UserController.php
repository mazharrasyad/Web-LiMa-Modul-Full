<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Individu\Entities\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    public function index()
    {
      $users = User::all();
      return view('individu::user.index',['users' => $users]);
    }

    public function select($id){

        $users = User::find($id);
      return view('individu::user.index',['id' => $id,'users'=>$users]);
    }

    public function profil($id){
      return view('individu::user.profil',['id' => $id]);
    }

    public function updateprofil($id){
      $users = User::find($id);
      return view('individu::user.updateprofil',['id'=>$id,'users' => $users]);
    }

}
