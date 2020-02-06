@extends('layouts.master')

@section('subtitle')
    MVP
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
                  <h3 class="mb-0">MVP - TAMBAH DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('mvp.store') }}" method="post" enctype="multipart/form-data">                
                    
                @include('layouts.message')
                {{ csrf_field() }}

                {{-- project_id --}}
                <div class="pl-lg-4">                    
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">Project</label>                                                                    
                        </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <select name="project_id" id="project_id" class="btn btn-secondary dropdown-toggle" type="button">     
                            <option value="" disabled selected>Pilih Project</option>                           
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->nama }}</option>
                            @endforeach                       
                        </select>
                    </div>
                    </div>
                </div>
                </div>

                {{-- sprint --}}
                <div class="pl-lg-4">                    
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label class="form-control-label mr-4" for="sprint">Sprint Ke</label>                                                                    
                        </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <input type="text" name="sprint" id="sprint" class="form-control form-control-alternative text-dark" placeholder="Contoh : 1" value="{{ old('sprint') }}">                                                             
                    </div>
                    </div>
                </div>
                </div>

                {{-- tanggal_rilis --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="tanggal_rilis">Tanggal Rilis</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input name="tanggal_rilis" id="tanggal_rilis" class="form-control datepicker text-dark" type="date">
                            </div>
                            <label class="form-control-label">Contoh : 12/31/2019 (Bulan/Tanggal/Tahun)</label>
                        </div>
                    </div>
                </div>
                </div>

                {{-- deskripsi --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="deskripsi">Deskripsi</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control form-control-alternative text-dark" placeholder="Contoh : CRUD Sudah bisa digunakan">{!! old('deskripsi') !!}</textarea>
                        </div>
                    </div>
                </div>
                </div>

                {{-- submit --}}
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/mvp') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Kirim</button>
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