<?php

namespace Modules\Individu\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('individu::welcome');
    }

    public function home()
    {
        return view('individu::welcome');
    }

    public function welcome()
    {
        return view('individu::welcome');
    }
}
