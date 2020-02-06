@extends('absen::admin.dashboard')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            @foreach($sprints as $sprint)
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 mb-xl-2">
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
                  <a href="" class="btn btn-primary btn-sm col-md-12"title="">Detail</a>
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

<div class="container-fluid mt--6">
        <div class="header-body">
			 <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Sales value</h2>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Month</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Week</span>
                        <span class="d-md-none">W</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h2 class="mb-0">Total orders</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <canvas id="chart-orders" class="chart-canvas"></canvas>
              </div>
            </div>
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
               <button type="submit" class="btn btn-primary float-right col-md-12">Simpan</button>
            </form>
                    
      </div>
      </div>
  </div>
@endsection