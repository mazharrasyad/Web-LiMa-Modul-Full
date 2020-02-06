@extends('layouts.master')

@section('subtitle')
    Proyek
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
                  <h3 class="mb-0">PROYEK - LIHAT DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">                

                @include('layouts.message')
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">

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
                            <label class="form-control-label">{{ $project->nama }}</label>
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
                            <textarea disabled style="outline: none; border: none; overflow: auto; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;" class="btn-secondary form-control form-control-alternative text-dark ml--2">{!! $project->deskripsi !!}</textarea>
                        </div>
                    </div>
                </div>
                </div>

                {{-- tanggal_mulai --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="tanggal_mulai">Tanggal Mulai</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">                            
                            <label class="form-control-label">{{ $project->tanggal_mulai }}</label>
                        </div>
                    </div>
                </div>
                </div>

                {{-- tanggal_akhir --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="tanggal_akhir">Tanggal Akhir</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label class="form-control-label">{{ $project->tanggal_akhir }}</label>
                        </div>
                    </div>
                </div>
                </div>

                {{-- jumlah_sprint --}}
                <div class="pl-lg-4">                                              
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="jumlah_sprint">Jumlah Sprint</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label class="form-control-label">{{ $project->jumlah_sprint }}</label>
                        </div>
                    </div>
                </div>
                </div>

                {{-- budget --}}
                <div class="pl-lg-4">                                              
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="budget">Budget</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label class="form-control-label">Rp{{ $project->budget }}</label>
                        </div>
                    </div>
                </div>
                </div>
                
                {{-- status --}}
                <div class="pl-lg-4">                                              
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="status">Status</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label class="form-control-label">{{ $project->status }}</label>
                        </div>
                    </div>
                </div>
                </div>

                {{-- persen --}}
                <div class="pl-lg-4">                                              
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="persen">Persen</label>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label class="form-control-label">{{ $project->persen }}%</label>
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
                        <label class="form-control-label">{{ $project->semester->nama }}</label>
                    </div>
                    </div>
                </div>
                </div>

                {{-- scrummaster_id --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label mr-4" for="scrummaster">Scrum Master</label>                                                                    
                    </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        @if(is_null($project->scrummaster_id))
                            <label class="form-control-label"><a href="{{ route('project.edit', $project->id) }}">Belum Ada</a></label>
                        @else
                            <label class="form-control-label">{{ $project->scrummaster->name }} | {{ $project->scrummaster->nohp }} | {{ $project->scrummaster->email }}</label>
                        @endif
                    </div>
                    </div>
                </div>
                </div>
                
                {{-- tim_id --}}
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label mr-4">Tim</label>                                                                    
                    </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        @if ($project->tim_id != NULL)
                            <label class="form-control-label">{{ $project->tim->nama }}</label> <a href="{{ route('project.membertim', $project->id) }}" class="btn btn-sm btn-success">Lihat</a>
                        @else
                            <label class="form-control-label">Belum Ada</label> 
                            @if(Auth::user()->role == 'scrum master')
                            <a href="{{ route('project.tim', $project->id) }}" class="btn btn-sm btn-danger">
                                Pilih
                            </a>
                            @endif
                        @endif                        
                    </div>
                    </div>
                </div>
                </div>

                {{-- created_by --}}   
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label mr-4">Created By</label>                                                                    
                    </div>                      
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                        <label class="form-control-label">{{ $project->created_by }}</label>
                    </div>
                    </div>
                </div>
                </div>

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/project') }}" class="btn btn-primary">Kembali</a>
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