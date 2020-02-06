@extends('absen::admin.dashboard')
@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            @foreach($sprints as $sprint)
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 mb-5 mb-xl-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sprint </h5>
                      <span class="h2 font-weight-bold mb-0">Ke - {{$sprint->ke}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i>{{$sprint->ke}}</i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  </p>
                  <a href="{{url('/admin/dashboard/hadirpersprint/'.$sprint->id)}}" class="btn btn-primary btn-sm col-md-12"title="">Detail</a>
                </div>
              </div>
            </div>
            @endforeach

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 mb-5 mb-xl-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Tambah sprint </h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i>+</i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  </p>
                  <button type="button" class="btn btn-primary btn-sm col-md-12" data-toggle="modal" data-target=".bd-example-modal-sm">Tambah</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </div>
 <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0 text-md-center">Absen Mahasiswa </h3>
            </div>
            <hr>
            <div class="col-md-12">
                
            <form action="{{url('/absenmahasiswa')}}" method="POST" accept-charset="utf-8" class="form-horizontal">
              {{csrf_field()}}
               <div class="form-group">
               </div>
               <div class="col-md-12 mx-lg-4 form-inline form-group ">
              
                    
                    <label class="ml-6  mr-2">Nama Mahasiswa : </label>
                    <label class="text-primary">{{Auth::user()->name}}</label>
                    
                    <div class="form-group">
                    
                    <input type="hidden" id="keterangan" name="user_id" value="{{Auth::user()->id}}" class="form-control form-inline">
           
                      </div>
                    
                  <label class="ml-6 mr-2">Sprint </label>
                  <div class="form-group">
                          <select name="sprint_id" class="form-control">
                              @foreach($sprints as $sprint)
                              <option value="">Pilih Sprint</option>}
                              <option value="{{$sprint->id}}">{{$sprint->ke}}</option>
                              @endforeach
                          </select>
                      </div>

                    <div class="form-group mb-3 mt-3">

                    <label class="ml-6 mr-3">Jam Datang </label>
                    <input type="time" id="jam_mulai" name="jam_mulai" value="" class="form-control form-inline">

                       <label class="ml-6 mr-3">Jam Pulang </label>

                    <input type="time" id="jam_akhir" name="jam_akhir" value="" class="form-control form-inline">
                    </div>

                    <div class="form-group">
                      
                    <label class="ml-6 ">Keterangan </label>
               
                    <input type="text" id="keterangan" name="keterangan" value="" class="form-control form-inline">

     


              </div>    
              <br>
               <button type="submit" class="btn btn-primary float-right col-md-12">Simpan</button>
            </form>
            </div>

          </div>
        </div>
      </div>
     
    </div>

<!--modal sprint-->
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sprint</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{url('/admin/viewsprint')}}" method="POST" accept-charset="utf-8" class="form-horizontal">
              {{csrf_field()}}
               <div class="form-group">
                  <label class=" form-control-label">Sprint Ke - </label>
                  <input type="text" name="ke" value="" class="form-control">
               </div>
               <div class="form-group">
                   
                    <label class="ml-3 mr-3">Tanggal Mulai  </label>
               
                    <input type="date" id="tanggal" name="tanggal_mulai" value="" class="form-control">
                  

                    <label class="ml-3 ">Tanggal Akhir </label>
               
                    <input type="date" id="tanggal" name="tanggal_akhir" value="" class="form-control form-inline">
              </div>    
              <br>
               <button type="submit" class="btn btn-primary float-right col-md-12">Simpan</button>
            </form>
                    
      </div>
      </div>
  </div>
</div>

@endsection