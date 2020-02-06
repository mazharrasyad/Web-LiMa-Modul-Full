<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

@extends('layouts.default')
@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            
            <div class="col-xl-6 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Nilai</h5>
                      <span class="h2 font-weight-bold mb-0">{{$data->finalSkorTim}}</span>
                    </div>
                   
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm"> -->
                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span> -->
                    <!-- <span class="text-nowrap">Since last month</span> -->
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
    
      <!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
           
            <!-- <div class="dropdown m-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pilih Kelompok
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div> -->
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col"> Nilai Sprint</th>
                    
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <th scope="row">
                      <span class="mb-0 text-sm">{{$data->nilaiUts}}</span>
                    </th>
                    <td>
                      {{$data->nilaiUas}}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                      {{$data->finalNilaiSprint}}
                      </span>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
@stop
