<?php

namespace Modules\Kelompok\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SkorSprint extends Controller
{

    public function login() {
        return view('kelompok::pages.login');
    }


    //show all skor sprint
    public function index()
    {
        $client = new Client(['base_uri' => 'http://127.0.0.1:8000/api/skorsprint']);
        $request = $client->request('GET');
        // $response = json_decode($request->getBody());
        // echo $response[0]->id;
        $response = $request->getBody();
        return view('kelompok::pages.tablesMahasiswa');
    }

    // Tambah nilai sprint
    public function create(Request $request)
    {
        $client = new Client(['base_uri' => 'http://127.0.0.1:8000/api/skorpoint']);
        $request = $client->request('GET');
        // $response = json_decode($request->getBody());
        // echo $response[0]->id;
        $response = json_decode($request->getBody());

        // foreach($response as $point) {
        //     if($point->sprint )
        // }
        

        $nilaiPoint = $request->nilaiPoint;
        $nilaiDosen = $request->nilaiDosen;
        $nilaiSprint = $request->nilaiSprint;
        $idSkorPoint = $request->idSkorPoint;
        $idSkorDosen = $request->idSkorDosen;
        $idTim = $request->idTim;

        
        $response = $client->request('POST', "http://127.0.0.1:8000/api/skorpoint", [
            'form_params' => [
                'point' => $point,
                'status' => $status,
                'keterangan' => $keterangan,
                'idUser' => $idUser,
                'idTim' => $idTim,
         ]]);

         return "data berhasil dibuat";
    }

    public function loginMahasiswa()
    {
        return view('kelompok::pages.loginMahasiswa');
    }

    //show skor point by id    
    public function show($id)
    {
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorsprint/$id"]);
        $request = $client->request('GET');
        $response = $request->getBody();
        $data = json_decode($response);
        $read = $data[0]->idNilaiFinal;
        $client2 = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorfinal/$read"]);
        $request2 = $client2->request('GET');
        $response2 = $request2->getBody();
        $data2 = json_decode($response2);
        $data3 = $data2==true ? $data2->finalSkorTim: 0;
        $data4 = $data2==true ? $data2->id: 0;
        return view('kelompok::pages.tablesMahasiswa', ['data'=>$data, 'data2'=>$data3, 'data3' => $data4]);
        // return $data2->nilaiUts;
        // return $data[0]->idNilaiFinal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }


     //update point
    // public function update(Request $request, $id)
    // {
    //     $point = $request->point;
    //     $status = $request->status;
    //     $keterangan = $request->keterangan;
    //     $idUser = $request->idUser;
    //     $idTim = $request->idTim;

    //     $client = new \GuzzleHttp\Client();
    //     $response = $client->request('PUT', "http://127.0.0.1:8000/api/skorpoint/$id", [
    //         'form_params' => [
    //             'point' => $point,
    //             'status' => $status,
    //             'keterangan' => $keterangan,
    //             'idUser' => $idUser,
    //             'idTim' => $idTim,
    //      ]]);

    //      return "data berhasil dibuat";
    // }

    // public function delete($id)
    // {
    //     $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skorpoint/$id"]);
    //     $request = $client->request('DELETE');
    //     return "data berhasil didelete";
    // }
}
