@extends('layouts.master')

@section('content')

<?php
  $url = file_get_contents('http://127.0.0.1:8000/api/apiuser/'.$id);
  $json = json_decode($url,true);
  $userId =  Auth::user()->id;
?>

<div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
  <div class="">
    <div class="card card-frame">
      <!-- foto -->
      <div class="card-group">
        <div class="col-lg-5 col-md-5 col-sm-12">
          <div class="card-body profil">
            <img class="rounded-box img-center img-fluid shadow foto" src="/ti1-link-and-match/projectlima/public{{Storage::url($json['foto'])}}">
            <div class="col text-center nim2">
              <?php
              if ($json['role'] == "mahasiswa" or $json['role'] == "scrum master") {
                echo
                "<h5 class=\"h4\">".
                  "<span class=\"d-block mb-1\">Nomor Induk Mahasiswa</span>".
                  "<small class=\"h4 font-weight-light text-mute\">".$json['nim']."</small>".
                "</h5>"
                ;
              }
              elseif ($json['role'] == "dosen") {
                echo
                "<h5 class=\"h4\">".
                  "<span class=\"d-block mb-1\">Nomor Induk Dosen Nasional</span>".
                  "<small class=\"h4 font-weight-light text-mute\">".$json['nidn']."</small>".
                "</h5>"
                ;
              }
              ?>
            </div>
          </div>
        </div>
        <!-- endfoto -->
        <!-- biodata -->
        <div class="col-lg-7 col-md-7 col-sm-12">
          <div class="">
            <div class="text-center mt-5">
              <span class="badge badge-default text-white"><?php echo $json["role"]; ?></span>
              <h1>
                <?php echo $json['name'].'<br/>'; ?>
              </h1>
            </div>
            <div class="text-left mx-4 mb-5 mt-4">
              <div class="  ">
                <span class="description">Tempat, Tanggal Lahir</span>
                <br> <span class="heading"><?php echo $json['tlahir']; ?>, <?php echo $json['tgllahir'].'<br/>'; ?></span>
              </div>
              <div class="  ">
                <span class="description">Prodi</span>
                <br> <span class="heading"> <?php if($json['prodi_id']==1){ echo "Informatika"; }else {echo "Sistem Informasi";} ?></span>
              </div>
              <div class="  ">
                <span class="description">Gender</span>
                <br> <span class="heading"> <?php echo $json['gender'].'<br/>'; ?></span>
              </div>
              <div class="  ">
                <span class="description">Email</span>
                <br> <span class="heading"> <?php echo $json['email'].'<br/>'; ?></span>
              </div>
              <div class="  ">
                <span class="description">Nomor Handphone</span>
                <br> <span class="heading"> <?php echo $json['nohp'].'<br/>'; ?></span>
              </div>
              <div class="  ">
                <span class="description">Semester</span>
                <br> <span class="heading"> <?php echo $json['semester'].'<br/>'; ?></span>
              </div>
            </div>
            <div class="text-center pt-0 pb-4">
              <a href="{{url('/updateprofiluser/'.$users->id)}}">
                <button class="btn btn-icon btn-sm btn-primary px-3 py-2" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
                  <span class="btn-inner--text">Edit Profil</span>
                </button>
              </a>
            </div>
          </div>
        </div>
        <!-- endbiodata -->
      </div>
    </div>
    </div>
  </div>
<!-- </div> -->
@endsection
