@extends('layouts.master')

@section('content')

<?php
$url = file_get_contents('http://127.0.0.1:8000/api/apiuser/'.$id);
$json = json_decode($url,true);
?>

<div class="container card card-frame">
  <div class="row card-group">
    <div class="col-xl-12">
      <div class="mx-5 mt-4">
        <div class="panel panel-default">
          <div class="card-header border-0">
            <div class="text-center">
              <h1 class="">Edit Profile</h1>
              <h1>
                <?php echo $json['name'].'<br/>'; ?>
              </h1>
            </div>
          </div>
          <div class="panel-body">
            <form class="col-md-12" action="<?php echo URL::to('/')."/api/apiuser/".$id;?>" method="POST">
              <div class="modal-body">
                <input name="_method" type="hidden" value="PUT">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>Nama</h4>
                      <input type="text" class="form-control input-lg py-0" value="<?php echo $json['name']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>NIM</h4>
                      <input type="text" class="form-control input-lg py-0" value="<?php echo $json['nim']?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <h4>Tempat Lahir</h4>
                      <input type="text" class="form-control input-lg" value="<?php echo $json['tlahir']?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <h4>Tanggal Lahir</h4>
                      <input type="date" class="form-control input-lg" value="<?php echo $json['tgllahir']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>Prodi</h4>
                      <input type="text" class="form-control input-lg py-0" value="<?php if($json['prodi_id']==1){ echo "Informatika"; }else {echo "Sistem Informasi";}?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>Gender</h4>
                      <input type="text" class="form-control input-lg py-0" value="<?php echo $json['gender']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>Email</h4>
                      <input type="email" class="form-control input-lg py-0" value="<?php echo $json['email']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>Nomor Handphone</h4>
                      <input type="text" class="form-control input-lg py-0" value="<?php echo $json['nohp']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4>Semester</h4>
                      <input type="text" class="form-control input-lg py-0" value="<?php echo $json['semester']?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group modal-footer">
                <a href="{{url('user',$json['id'])}}"><button type="button" class="btn btn-secondary">Close</button></a>
                <button class="btn btn-primary" type="submit" value="Edit">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
