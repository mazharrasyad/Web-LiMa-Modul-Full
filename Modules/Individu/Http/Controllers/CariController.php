<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;

class CariController extends Controller
{
  public function index()
  {
    return view('individu::cari.index');
  }

  public function cariPage(request $request)
  {
    return view('individu::cari.index',['nama' => $request->name,'role' => 'mahasiswa']);
  }

  public function cari($nama,$role)
  {
    return view('individu::cari.index',['nama' => $nama,'role' => $role]);
  }

}
