<?php

namespace Modules\Kelompok\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SkorPoint extends Controller
{
    //show all skor point
    public function index()
    {
        $client = new Client(['base_uri' => 'http://127.0.0.1:8000/api/skorpoint']);
        $request = $client->request('GET');
        // $response = json_decode($request->getBody());
        // echo $response[0]->id;
        $response = $request->getBody();
        return $response;
    }

    public function tambahPoint()
    {
        return view('kelompok::pages.formPoint');
    }

    // Tambah nilai point
    public function create(Request $request)
    {
        // $point = $request->point;
        $status = $request->status;
        $point = 0;
        if($status == "penambahan") {
            $point = 2.5;
        } else if ($status == "pengurangan") {
            $point = -2.5;
        }

        $keterangan = $request->keterangan;
        $sprint = $request->sprint;
        $idUser = $request->idUser;
        $idTim = $request->idTim;
        // $idSkorSprint = $request->idSkorSprint;

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', "http://127.0.0.1:8000/api/skorpoint", [
            'form_params' => [
                'point' => $point,
                'status' => $status,
                'keterangan' => $keterangan,
                'sprint' => $sprint,
                'idUser' => $idUser,
                'idTim' => $idTim,
                // 'idSkorSprint' => $idSkorSprint,
         ]]);

        //  echo $status;
         return redirect("/skorpoint/$idTim/$idUser");
        // return $point;
    }


    //show skor point by id    
    public function show($id,$sprint)
    {
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorpoint/detail/$id/$sprint"]);
        $request = $client->request('GET');
        $response = $request->getBody();
        $data = json_decode($response);
        // return $data->point;
        return view('kelompok::pages.detailPoint',['data'=>$data]);
        // return $response;
    }

    public function show2($id,$idUser)
    {
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorpoint/$id/$idUser"]);
        $request = $client->request('GET');

        
        $response = $request->getBody();
        $data = json_decode($response);
        // // return $data->point;
        return view('kelompok::pages.tablesPointAll',['data'=>$data, 'id'=>$id, 'idUser'=>$idUser]);
        // return $response;
    }

    public function ubahNilai($id)
    {   
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorpoint/$id"]);
        $request = $client->request('GET');
        $response = $request->getBody();
        $data = json_decode($response);
        
        // return view('pages.editPoint');
        return view('kelompok::pages.editPoint', ['data'=>$data]);
       
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */


     //update point
    public function update(Request $request, $id)
    {
        $point = $request->point;
        $status = $request->status;
        $keterangan = $request->keterangan;
        $sprint = $request->sprint;
        $idUser = $request->idUser;
        $idTim = $request->idTim;
        $idSkorSprint = $request->idSkorSprint;

        $client = new \GuzzleHttp\Client();
        $response = $client->request('PUT', "http://127.0.0.1:8000/api/skorpoint/$id", [
            'form_params' => [
                'point' => $point,
                'status' => $status,
                'keterangan' => $keterangan,
                'sprint' => $sprint,
                'idUser' => $idUser,
                'idTim' => $idTim,
                'idSkorSprint' => $idSkorSprint,
         ]]);

         return redirect("/skorpoint/$idTim/$idUser/$sprint");
        // return $idUser;
    }

    public function delete ($id) {
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorpoint/$id"]);
        $request = $client->request('DELETE');

        $response = $request->getBody();
        $data = json_decode($response);
        
        return redirect("/skorpoint/$data->idTim/$data->idUser");
        
    }
}
