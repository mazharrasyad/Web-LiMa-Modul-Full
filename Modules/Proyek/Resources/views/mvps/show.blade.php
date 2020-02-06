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
                  <h3 class="mb-0">MVP - TAMPIL DATA</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('mvp.update', $mvp->id) }}" method="post" enctype="multipart/form-data">                
                    
                @include('layouts.message')
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">

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
                        <label class="form-control-label">{{ $mvp->project->nama }}</label>
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
                        <label class="form-control-label">{{ $mvp->sprint }}</label>
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
                            <label class="form-control-label">{{ $mvp->tanggal_rilis }}</label>
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
                            <textarea disabled style="outline: none; border: none; overflow: auto; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;" class="btn-secondary form-control form-control-alternative text-dark ml--2">{!! $mvp->deskripsi !!}</textarea>
                        </div>
                    </div>
                </div>
                </div>

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('/mvp') }}" class="btn btn-primary">Kembali</a>
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