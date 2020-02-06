@extends('absen::admin.dashboard')
@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-12 col-lg-8">
              <div class="card card-stats mb-4 mb-xl-0 mb-5 mb-xl-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sprint </h5>
                      <span class="h2 font-weight-bold mb-0">Ke - {{$sprints->ke}}</span>
                    </div>
                    <div class="col">
                      
                    <span class="h5 mb-3 ">Tanggal Mulai :<span class="text-success">{{$sprints->tanggal_mulai}} </span></span><br>
                    <span class="h5 mb-3">Tanggal Selesai :<span class="text-danger">{{$sprints->tanggal_akhir}} </span></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i>{{$sprints->ke}}</i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  </p>
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
              <h3 class="mb-0 text-md-center">List Hadir Mahasiswa</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nilai</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($hadir as $kehadiran)
                  <tr>

                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{asset('assets/img/theme/angular.jpg')}}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{$kehadiran->user->name}}</span>
                        </div>
                      </div>
                    </th>

                    <td>
                      {{$kehadiran->sprint->tanggal_mulai}}
                    </td>
                    <td>
                      {{$kehadiran->jam_mulai}}
                    </td>
                    <td>
                      {{$kehadiran->jam_akhir}}
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                      @if($kehadiran->status_mulai == "hadir")  
                      <span class="badge badge-dot font-weight-bold">
                        <i class="bg-success"></i> {{$kehadiran->status_mulai}}
                      </span>
                      @elseif($kehadiran->status_mulai == "telat")
                       <span class="badge badge-dot font-weight-bold">
                        <i class="bg-primary"></i> {{$kehadiran->status_mulai}}
                      </span>
                      @else
                      <span class="badge badge-dot font-weight-bold">
                        <i class="bg-danger"></i> {{$kehadiran->status_mulai}}
                      </span>
                      @endif
                      </div>
                    </td>

                    <td>
                      {{$kehadiran->nilai}}
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
          </div>
        </div>
      </div>
     
    </div>
@endsection