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
                  <a href="{{url('/mahasiswa/'.$users->id.'/hadirpersprint/'.$sprint->id)}}" class="btn btn-primary btn-sm col-md-12"title="">Detail</a>
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
              <h3 class="mb-0">List Hadir </h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama Mahasiswa</th>
                    <th colspan="col">Sprint</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Completion</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($history as $historihadir)
                  <tr>

                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{asset('assets/img/theme/angular.jpg')}}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{$historihadir->user->name}}</span>
                        </div>
                      </div>
                    </th>

                    <td>
                      <span>{{$historihadir->sprint->id}}</span>
                    </td>
                    <td>
                      {{$historihadir->jam_mulai}}
                    </td>
                    <td>
                      {{$historihadir->jam_akhir}}
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                      @if($historihadir->status == "hadir")  
                      <span class="badge badge-dot font-weight-bold">
                        <i class="bg-success"></i> {{$historihadir->status}}
                      </span>
                      @else
                       <span class="badge badge-dot font-weight-bold">
                        <i class="bg-danger"></i> {{$historihadir->status_mulai}}
                      </span>
                      @endif
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>


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
               <button type="submit" class="btn btn-success float-right col-md-12">Simpan</button>
            </form>
                    
      </div>
      </div>
  </div>
@endsection