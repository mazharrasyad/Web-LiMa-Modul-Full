<?php

namespace Modules\Logbook\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Sprint;
use App\Models\Task;
use App\Models\Poreview;
use App\Models\Logproject;
class ApiController extends Controller
{
    public function get_sprint()
    {
    	$sprint = Sprint::all();
    	return response()->json($sprint);
    }

     public function get_logbook_sprint()
    {
        $sprint = DB::table('sprint')
                ->leftjoin('task','task.sprint_id','=','sprint.id') // Menyamai field 2 tabel
                ->select(DB::raw('sprint.nama_sprint as namasprint, task.nama_task as namatask')) // Memunculkan data yang ingin di ambil
                ->get();
        return response()->json($sprint);
    }

    public function get_task($id_sprint)
    {
    	$task = Task::where('sprint_id', $id_sprint)->get(); // Passing data id dari routes
    	return response()->json($task);
    }
    public function store_logbook(Request $request)
    { 
    	$sprint = $request->input('sprint');
    	// $task = $request->input('task_id');
    	$kendala = $request->input('kendala');
        $hasil = $request->file('hasil');
    	$file_hasil = $hasil->store('public/hasil');

        $logProject = new Logproject;
        $logProject->sprint_id = $sprint;
        // $logProject->task_id = $task;
        $logProject->kendala = $kendala;
        $logProject->hasil_log = $file_hasil;
        $logProject->tanggal = date('Y-m-d');
        $logProject->save();

        $logProject->log_project_task()->createMany($request->task);
        
    	// Logproject::insert([
    	// 	'sprint_id' => $sprint,
    	// 	'task_id' => $task,
    	// 	'kendala' => $kendala,
    	// 	'hasil_log' => $file_hasil,
    	// 	'tanggal' => date('Y-m-d')
    	// ]);
    	return response()->json([
    		'status' => 'ok'
    	]);
    }

    public function get_review($id)
    {
        $review = Poreview::all();
        return response()->json($review);
        // return view('PoReview.poreview', ['review' => $review]);
        // $review = Logproject::with(['task','sprint'])->where('id', $id)->first();
        // return response()->json($review);
    }
    public function store_review(Request $request)
    {
        $data = new Poreview;
        $data->rekomendasi = $request->rekomendasi;
        $data->validasi = $request->validasi;
        $data->log_project_id = $request->log_project_id;
        $data->save();
        return response()->json(['status' => 'ok']);
    }
}
