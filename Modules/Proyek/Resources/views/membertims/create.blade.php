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
                  <h3 class="mb-0">ANGGOTA TIM PROYEK - TAMBAH DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('membertim.store') }}" method="post" enctype="multipart/form-data">                
                @include('layouts.message')
                {{ csrf_field() }}

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
                                <option value="{{ $tim->id }}">{{ $tim->nama }}</option>
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
                                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->name }}</option>
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
                                <option value="" disabled selected>Pilih peran</option>                           
                                @foreach ($perans as $peran)
                                    <option value="{{ $peran->id }}">{{ $peran->nama }}</option>
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
                            <label class="form-control-label" for="peran">Tanggung Jawab</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <textarea name="tanggung_jawab" id="tanggung_jawab" cols="30" rows="3" class="form-control form-control-alternative text-dark" placeholder="Masukkan Tanggung Jawab...">{!! old('tanggung_jawab') !!}</textarea>
                        </div>
                    </div>
                </div>
                </div>

                {{-- final_skor --}}
                {{-- default(0) --}}

                {{-- created_by --}}
                {{-- default('Scrum Master') --}}                

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/membertim') }}" class="btn btn-secondary">Batal</a>
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