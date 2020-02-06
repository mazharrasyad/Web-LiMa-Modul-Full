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
                  <h3 class="mb-0">PROYEK - PILIH TIM</h3>
                </div>                
              </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('project.pilih', $project->id) }}" method="post" enctype="multipart/form-data">                

                <div class="pl-lg-4">
                    @include('layouts.message')
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    
                    <div class="row">
                        
                        <div class="col-lg-2">
                            <div class="form-group">
                            <label class="form-control-label mr-4" for="input-username">Tim</label>                                                                       
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                            <div class="dropdown">
                                <select onchange="pilih_membertim()" name="tim_id" id="tim_id" class="btn btn-secondary dropdown-toggle" type="button">     
                                    <option value="" disabled selected>Pilih</option>                           
                                    @foreach ($tims as $tim)
                                        <option value="{{ $tim->id }}">{{ $tim->nama }}</option>
                                    @endforeach                       
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="pl-lg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <a href="{{ route('project.show', $project->id) }}" class="btn btn-secondary">Batal</a>
                                        <button type="submit" class="btn btn-primary">Ok</button>
                                    </div>
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
                            <table id="membertim" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tim</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Peran</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $nomor = 1; ?>
                                @foreach ($membertims as $membertim)
                                <tr>                                 
                                    <td>{{ $nomor++ }}</td>
                                    <td hidden>{{ $membertim->tim_id }}</td>
                                    <td>{{ $membertim->tim->nama }}</td>
                                    <td>{{ $membertim->mahasiswa->name }}</td>
                                    <td>{{ $membertim->peran->nama }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
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

    <script type="text/javascript">
        function pilih_membertim() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("tim_id");
          filter = input.value.toUpperCase();
          table = document.getElementById("membertim");
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