<?php

namespace Modules\Logbook\Http\Controllers;

use Illuminate\Http\Request;

use Modules\Logbook\Entities\Sprint;

class SprintController extends Controller
{
    public function index(){
    	$sprint = Sprint::all();
    	return response()->json($sprint);

    	// return view('sprint', ['sprint' => $sprint]);
    }

}
