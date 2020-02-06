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
                  <h3 class="mb-0">ANGGOTA TIM PROYEK - LIHAT DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('membertim.store') }}" method="post" enctype="multipart/form-data">                

                {{-- tim_id --}}
                <div class="pl-lg-4">
                    @include('layouts.message')
                    {{ csrf_field() }}
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">Tim</label>                                                                    
                      </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">{{ $membertim->tim->nama }}</label>
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
                                <label class="form-control-label mr-4" for="input-username">{{ $membertim->mahasiswa->name }}</label>
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
                                <label class="form-control-label mr-4" for="input-username">{{ $membertim->peran->nama }}</label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- tanggung_jawab --}}
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label" for="peran">Tanggung Jawab</label>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                              <textarea disabled style="outline: none; border: none; overflow: auto; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;" class="btn-secondary form-control form-control-alternative text-dark ml--2">{!! $membertim->tanggung_jawab !!}</textarea>
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
                        <label class="form-control-label mr-4" for="input-username">{{ $membertim->final_skor }}</label>
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
                        <label class="form-control-label mr-4" for="input-username">{{ $membertim->created_by }}</label>
                    </div>
                    </div>
                </div>
                </div>

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/membertim') }}" class="btn btn-primary">Kembali</a>
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