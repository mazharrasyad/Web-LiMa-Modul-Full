@extends('layouts.master')

@section('subtitle')
    Tim Proyek
@endsection

@section('content')
 <div class="header bg-gradient-primary pb-6 pt-5 pt-md-8">
    <div class="container-fluid">
      <div class="header-body">

      </div>
    </div>
  </div>

  <div class="container-fluid mt--7">
    <div class="row">
        
        <div class="col-xl-12">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-12">
                  <h3 class="mb-0">TIM PROYEK - LIHAT DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('tim.store') }}" method="post" enctype="multipart/form-data">                
                @include('layouts.message')
                {{ csrf_field() }}

                
                {{-- nama --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="nama">Nama</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label class="form-control-label mr-4" for="input-username">{{ $tim->nama }}</label>
                        </div>
                    </div>
                </div>
                </div>

                {{-- semester_id --}}
                <div class="pl-lg-4">                    
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label mr-4" for="input-username">Semester</label>                                                                    
                    </div>                      
                  </div>
                  <div class="col-lg-9">
                  <div class="form-group">
                    <label class="form-control-label mr-4" for="input-username">{{ $tim->semester->nama }}</label>
                  </div>
                  </div>
                </div>
                </div>

                {{-- prodi_id --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="prodi">Program Studi</label>                                                                    
                    </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">{{ $tim->prodi->nama }}</label>
                    </div>
                    </div>
                </div>
                </div>

                {{-- final_skor --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="prodi">Final Skor</label>                                                                    
                    </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">{{ $tim->final_skor }}</label>
                    </div>
                    </div>
                </div>
                </div>

                {{-- created_by --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="prodi">Created By</label>                                                                    
                    </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">{{ $tim->created_by }}</label>
                    </div>
                    </div>
                </div>
                </div>

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/tim') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>

              </form>      
            </div>
          </div>
        </div>
      </div>
      @include('layouts.copyright')
    </div> 
@endsection