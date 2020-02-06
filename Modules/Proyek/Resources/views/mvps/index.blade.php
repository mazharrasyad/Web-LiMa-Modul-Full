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
                <div class="col-8">
                  <h3 class="mb-0">MVP</h3>
                </div>
                <div class="col-4 text-right">
                @if(Auth::user()->role == 'dosen')
                  <a href="{{ url('/mvp/create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                @endif
                </div>
              </div>
            </div>
            <div class="card-body">              
                @include('layouts.message')
                <div class="pl-lg-4">
                  
                  <div class="row">
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label mr-4" for="input-username">Project</label>                                                                       
                      </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                        <div class="dropdown">
                            <select onchange="pilih_project()" name="project_id" id="project_id" class="btn btn-secondary dropdown-toggle" type="button">     
                                <option value="" disabled selected>Pilih Project</option>                           
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->nama }}</option>
                                @endforeach                       
                            </select>
                          </div>
                        </div>
                    </div>
                  </div>

                </div>                
                    <!-- Table -->
                    <div class="row">
                      <div class="col">
                        <div class="card shadow">
                          <div class="card-header border-0">
                            <h3 class="mb-0">Tim</h3>
                          </div>
                          <div class="table-responsive">
                            <table id="mvp" class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Sprint</th>
                                  <th scope="col">Tanggal Rilis</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $nomor = 1; ?>
                                @foreach ($mvps as $mvp)
                                <tr>                                 
                                  <td>{{ $nomor++ }}</td>
                                  <td hidden>{{ $mvp->project_id }}</td>
                                  <td>{{ $mvp->project->nama }}</td>
                                  <td>{{ $mvp->sprint }}</td>
                                  <td>{{ $mvp->tanggal_rilis }}</td>
                                  <td>
                                    <form action="{{ route('mvp.destroy', $mvp->id) }}" method="post">
                                      {{ csrf_field() }}                                              
                                      <a class="btn btn-sm btn-icon-only text-light" href="{{ route('mvp.show', $mvp->id) }}" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-air-baloon text-blue"></i>
                                      </a>
                                      @if(Auth::user()->role == 'dosen')
                                      <a class="btn btn-sm btn-icon-only text-light" href="{{ route('mvp.edit', $mvp->id) }}" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-settings text-blue"></i>
                                      </a>
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button onclick="return confirm('Apakah yakin dihapus?')" type="submit" value="Delete" class="btn btn-sm btn-icon-only text-light" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-basket text-blue"></i>
                                      </button>
                                      @endif
                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.copyright')
  </div>

    <script type="text/javascript">
      function pilih_project() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("project_id");
        filter = input.value.toUpperCase();
        table = document.getElementById("mvp");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
    </script>

@endsection