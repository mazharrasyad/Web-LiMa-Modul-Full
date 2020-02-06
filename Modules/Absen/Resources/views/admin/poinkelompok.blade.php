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
                      <h3 class="card-title text-uppercase text-muted mb-0 text-center font-weight-bold">Kelompok dengan poin tertinggi </h3>>
                      
                    </div>
                    <div class="col">
                    
                    <span class="h3 mb-3 "  >Sprint  :  <span class="text-primary ml-3">{{$sprints->ke}}</span></span><br>  
                    <span class="h3 mb-3 "  >Kelompok  :  <span class="text-success ml-3">2</span></span><br>
                    <span class="h3 mb-3">   Poin :<span class="text-danger ml-3">
                    1200</span></span>
                    </div>
                    <div class="col-auto">
                     
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
              <h3 class="mb-0 text-md-center">Poin Kelompok</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Kelompok</th>
                    <th colspan="col">Poin</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kelompoks as $kelompok)
                  <tr>

                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{asset('assets/img/theme/angular.jpg')}}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">Kelompok {{$kelompok->kelompok}}</span>
                        </div>
                      </div>
                    </th>

                    <td>
                      <span></span>
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