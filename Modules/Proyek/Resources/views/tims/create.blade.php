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
                  <h3 class="mb-0">TIM PROYEK - TAMBAH DATA</h3>
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
                            <input type="text" name="nama" id="nama" class="form-control form-control-alternative text-dark" placeholder="Contoh : Kelompok 1" value="{{ old('nama') }}">                                                             
                        </div>
                    </div>
                </div>
                </div>

                {{-- semester_id --}}
                <div class="pl-lg-4">                    
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label mr-4" for="semester">Semester</label>                                                                    
                    </div>                      
                  </div>
                  <div class="col-lg-9">
                  <div class="form-group">
                      <select name="semester_id" id="semester_id" class="btn btn-secondary dropdown-toggle" type="button">     
                          <option value="" disabled selected>Pilih Semester</option>                           
                          @foreach ($semesters as $semester)
                              <option value="{{ $semester->id }}">{{ $semester->nama }}</option>
                          @endforeach                       
                      </select>
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
                        <select name="prodi_id" id="prodi_id" class="btn btn-secondary dropdown-toggle" type="button">     
                            <option value="" disabled selected>Pilih Program Studi</option>                           
                            @foreach ($prodis as $prodi)
                                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                            @endforeach                       
                        </select>
                    </div>
                    </div>
                </div>
                </div>

                {{-- final_skor --}}
                {{-- default(0) --}}

                {{-- created_by --}}
                {{-- default('Scrum Master') --}}

                {{-- submit --}}
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/tim') }}" class="btn btn-secondary">Batal</a>
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