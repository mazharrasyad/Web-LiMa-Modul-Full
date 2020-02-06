<?php

namespace Modules\Kelompok\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
class SkorDosen extends Controller
{


    public function login() {
        return view('kelompok::pages.loginDosen');
    }

      //show all skow dosen
    public function showMatkul($matkul,$id){
        // $matkul = $request->matkul;
        

        // if(!$idTim){
        //     $idTim = 1;
        // }
        
        $client = new \GuzzleHttp\Client();
        $request = $client->request('POST', "http://127.0.0.1:8000/api/skordosen/matkul", [
            'form_params' => [
                'idTim' => $id,
                'matkul' => $matkul,
            ]]);

        $response = $request->getBody();
        $data = json_decode($response);

        
        return view('kelompok::pages.indexDosen',['data'=>$data,'matkul'=>$matkul, 'id'=>$id]);
        // return $data;
        
    }
  
      public function show ($id,$sprint) {
          $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skordosen/$id/$sprint"]);
          $request = $client->request('GET');
          $response = $request->getBody();
          $data = json_decode($response);
          
          return view('kelompok::pages.detailDosen',['data'=>$data]);
        
      }

    //create skor dosen
    public function create(Request $request)
    {
        $KetepatanWaktu = $request->KetepatanWaktu;
        $Kelengkapan = $request->Kelengkapan;
        $KualitasHasil = $request->KualitasHasil;
        $TotalNilai = 50;
        $sprint = $request->sprint;
        $idUser = 1;
        $idTim = $request->idTim;
        $idSkorSprint = 3;
        $matkul = $request->Matkul;
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', "http://127.0.0.1:8000/api/skordosen", [
            'form_params' => [
                'KetepatanWaktu' => $KetepatanWaktu,
                'Kelengkapan' => $Kelengkapan,
                'KualitasHasil' => $KualitasHasil,
                'TotalNilai' => $TotalNilai,
                'sprint' => $sprint,
                'idUser' => $idUser,
                'idTim' => $idTim,
                'idSkorSprint' => $idSkorSprint,
                'Matkul'=>$matkul,
         ]]);
        
        return redirect("/skordosen/$matkul/$idTim");
    }

    public function tambahNilai($matkul)
    {
        return view('kelompok::pages.formDosen',['matkul'=>$matkul]);
    }

  
    public function ubahNilai($id)
    {   
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skordosen/$id"]);
        $request = $client->request('GET');
        $response = $request->getBody();
        $data = json_decode($response);
        
        return view('kelompok::pages.editDosen',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $KetepatanWaktu = $request->KetepatanWaktu;
        $Kelengkapan = $request->Kelengkapan;
        $KualitasHasil = $request->KualitasHasil;
        $TotalNilai = 50;
        $sprint = $request->sprint;
        $idUser = 1;
        $idTim = $request->idTim;
        $idSkorSprint = 3;
        $matkul = $request->Matkul;
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('PUT', "http://127.0.0.1:8000/api/skordosen/$id", [
            'form_params' => [
                'KetepatanWaktu' => $KetepatanWaktu,
                'Kelengkapan' => $Kelengkapan,
                'KualitasHasil' => $KualitasHasil,
                'TotalNilai' => $TotalNilai,
                'sprint' => $sprint,
                'idUser' => $idUser,
                'idTim' => $idTim,
                'idSkorSprint' => $idSkorSprint,
                'Matkul'=>$matkul,
         ]]);

         return redirect("/skordosen/$matkul/$idTim");
    }

    public function delete ($id) {
        $client = new Client(['base_uri' => "http://127.0.0.1:8000/api/skordosen/$id"]);
        $request = $client->request('DELETE');
        
        $response = $request->getBody();
        $data = json_decode($response);
        
        return redirect("/skordosen/$data->MatKul/$data->idTim");
        
    }

}

