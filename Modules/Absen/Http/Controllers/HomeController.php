<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Modules\Absen\Entities\LogAbsence;
use Modules\Absen\Entities\Sprint;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absen::home');
    }
    public function dashboard()
    {
        $sprints = Sprint::all();
        return view('absen::admin.dashboardku',compact('sprints'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
