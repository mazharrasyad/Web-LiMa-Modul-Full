@extends('layouts.master')

@section('subtitle')
    Anggota Proyek
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
                  <h3 class="mb-0">ANGGOTA TIM PROYEK - UBAH DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('membertim.update', $membertim->id) }}" method="post" enctype="multipart/form-data">                
                @include('layouts.message')
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">

                {{-- tim_id --}}
                <div class="pl-lg-4">                    
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label mr-4" for="input-username">Tim</label>                                                                    
                    </div>                      
                  </div>
                  <div class="col-lg-9">
                  <div class="form-group">
                      <select name="tim_id" id="tim_id" class="btn btn-secondary dropdown-toggle" type="button">     
                        <option value="" disabled selected>Pilih Tim</option>                           
                        @foreach ($tims as $tim)
                          @if ($tim->id == $membertim->tim_id)
                              <option value="{{ $membertim->tim_id }}" selected>{{ $membertim->tim->nama }}</option>
                          @else
                              <option value="{{ $tim->id }}">{{ $tim->nama }}</option>
                          @endif                                
                        @endforeach                       
                      </select>
                  </div>
                  </div>
                </div>
                </div>

                {{-- mahasiswa_id --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="mahasiswa_id">Mahasiswa</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                          <select name="mahasiswa_id" id="mahasiswa_id" class="btn btn-secondary dropdown-toggle" type="button">     
                              <option value="" disabled selected>Pilih Mahasiswa</option>                           
                              @foreach ($mahasiswas as $mahasiswa)
                                @if ($mahasiswa->id == $membertim->mahasiswa_id)
                                    <option value="{{ $membertim->mahasiswa_id }}" selected>{{ $membertim->mahasiswa->name }}</option>
                                @else
                                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->name }}</option>
                                @endif                                
                            @endforeach                       
                          </select>
                        </div>
                    </div>
                </div>
                </div>

                {{-- peran_id --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="peran">Peran</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <select name="peran_id" id="peran_id" class="btn btn-secondary dropdown-toggle" type="button">     
                                <option value="" disabled selected>Pilih Peran</option>                           
                                @foreach ($perans as $peran)
                                    @if ($peran->id == $membertim->peran_id)
                                        <option value="{{ $membertim->peran_id }}" selected>{{ $membertim->peran->nama }}</option>
                                    @else
                                        <option value="{{ $peran->id }}">{{ $peran->nama }}</option>
                                    @endif                                
                                @endforeach                       
                            </select>
                        </div>
                    </div>
                </div>
                </div>
                
                {{-- tanggung_jawab --}}               
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="tanggung_jawab">Tanggung Jawab</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                          <textarea type="text" name="tanggung_jawab" id="tanggung_jawab" class="form-control form-control-alternative text-dark">{{ $membertim->tanggung_jawab }}</textarea>                                                          
                        </div>
                    </div>
                </div>
                </div>

                {{-- submit --}}
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/membertim') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
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