<?php

namespace Modules\Logbook\Http\Controllers;

use Illuminate\Http\Request;

use Modules\Logbook\Entities\Logproject;
use Modules\Logbook\Entities\Task;

class LogprojectController extends Controller
{
    public function log() {
    	$logs = Logproject::with('sprint')->get();
		return response()->json($logs);
    }

    
}
