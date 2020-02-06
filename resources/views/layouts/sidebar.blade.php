<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="{{url('/admin/dashboard')}}">
        <img src="{{asset('assets/img/brand/nf.png')}}" class="navbar-brand-img" alt="..."   >
        <span>Link and Match NF </span>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('assets/img/brand/nf.png')}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{asset('assets/img/brand/nf.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>

        {{-- -------------------- US Progress Absen -------------------- --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#navbar-absen" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-absen">
                <i class="fa fa-id-card"></i>
                <span class="nav-link-text">{{ __('Absen') }}</span>
            </a>

            <div class="collapse hidden" id="navbar-absen">
              <ul class="nav nav-sm flex-column">
                  <li class="nav-item  class=" active" ">
                      <a class=" nav-link active " href="{{url('/admin/dashboard')}}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                        </a>
                      </li>
                      @if(Auth::user()->role == 'admin')
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/dashboard/hadir')}}">
                          <i class="ni ni-collection text-info"></i> List hadir
                        </a>
                      </li>
                      @else
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('/mahasiswa/historyabsen/'.Auth::user()->id)}}">
                          <i class="ni ni-collection text-info"></i> List hadir
                        </a>
                      </li>
                     
                      @endif
            
                      @if(Auth::user()->role == 'admin')
                      <li class="nav-item">
                        <a class="nav-link " href="{{url('/admin/viewsprint')}}">
                          <i class="ni ni-user-run text-yellow"></i> Sprint
                        </a>
                      </li>
                      @else
            
                      @endif
                      @if(Auth::user()->role == 'admin')
            
                      @else
            
                      <li class="nav-item">
                        <a class="nav-link " href="{{url('/mahasiswa/absenmahasiswa/'.Auth::user()->id)}}">
                          <i class="ni ni-single-copy-04 text-yellow"></i> Absen
                        </a>
                      </li>
                      @endif             
            
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('/logout')}}">
                          <i class="ni ni-button-power text-pink"></i> Logout
                        </a>
                      </li>
              </ul>
            </div>

          </li>
        </ul>

        {{-- -------------------- US Proyek -------------------- --}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#navbar-proyek" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-proyek">
                    <i class="fa fa-project-diagram"></i>
                    <span class="nav-link-text">{{ __('Proyek') }}</span>
                </a>
    
            <div class="collapse hidden" id="navbar-proyek">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/project') }}">
                    <i class="ni ni-planet text-blue"></i> Proyek
                  </a>
                </li>

                {{-- @if(Auth::user()->role == 'scrum master' or Auth::user()->role == 'mahasiswa') --}}
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/tim') }}">
                    <i class="ni ni-pin-3 text-orange"></i> Tim Proyek
                  </a>
                </li> 
                {{-- @endif --}}
                          
                {{-- @if(Auth::user()->role == 'scrum master' or Auth::user()->role == 'mahasiswa') --}}
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/membertim') }}">
                    <i class="ni ni-single-02 text-yellow"></i> Anggota Proyek
                  </a>
                </li>  
                {{-- @endif --}}

                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/mvp') }}">
                    <i class="ni ni-bullet-list-67 text-red"></i> MVP
                  </a>
                </li> 
              </ul>
            </div>
          </li>
        </ul>
        
        {{-- -------------------- US Progress -------------------- --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#navbar-progress" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-progress">
                <i class="fa fa-charging-station"></i>
                <span class="nav-link-text">{{ __('Progress') }}</span>
            </a>

            <div class="collapse hidden" id="navbar-progress">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                        <i class="ni ni-planet text-blue"></i>
                        {{ __('User profile') }}
                    {{-- </a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('user.index') }}"> --}}
                        <i class="ni ni-pin-3 text-orange"></i>
                        {{ __('User Management') }}
                    {{-- </a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('sprint.index') }}"> --}}
                        <i class="ni ni-single-02 text-yellow"></i>
                        {{ __('Sprint') }}
                    {{-- </a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('task.index') }}"> --}}
                        <i class="ni ni-bullet-list-67 text-red"></i>
                        {{ __('Task') }}
                    {{-- </a> --}}
                </li>
              </ul>
            </div>

          </li>
        </ul>

        {{-- -------------------- US Logbook -------------------- --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#navbar-logbook" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-logbook">
                <i class="fa fa-book-reader"></i>
                <span class="nav-link-text">{{ __('Logbook') }}</span>
            </a>

            <div class="collapse hidden" id="navbar-logbook">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item  class=" active" ">
                  <a class=" nav-link active " href="{{url('/log-book')}}"> <i class="ni ni-tv-2 text-primary"></i> Laporan Aktivitas
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " href="{{url('/po-review')}}">
                    <i class="ni ni-single-02 text-yellow"></i> Penilaian PO
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " href="{{ url('/hasil')}}">
                    <i class="ni ni-bullet-list-67 text-red"></i> Hasil Review
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>

        {{-- -------------------- US Nilai Kelompok -------------------- --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#navbar-nilaikelompok" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-nilaikelompok">
                <i class="fab fa-teamspeak"></i>
                <span class="nav-link-text">{{ __('Nilai Kelompok') }}</span>
            </a>

            <div class="collapse hidden" id="navbar-nilaikelompok">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item  class=" active" ">
                  <a class=" nav-link active " href="/skorsprint/1"> 
                    <i class="ni ni-tv-2 text-primary"></i> Nilai Sprint
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/skordosen/create">
                    <i class="ni ni-single-02 text-yellow"></i> Penilaian Dosen
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/skorpoint/create">
                    <i class="ni ni-bullet-list-67 text-red"></i> Penilaian Point
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>

        {{-- -------------------- US Nilai Individu -------------------- --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#navbar-nilaiindividu" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-nilaiindividu">
                <i class="fa fa-user"></i>
                <span class="nav-link-text">{{ __('Nilai Individu') }}</span>
            </a>

            <div class="collapse hidden" id="navbar-nilaiindividu">
              <ul class="nav nav-sm flex-column">

                  <li class="nav-item  class=" active" ">
                      <a class=" nav-link active " href="{{url('/')}}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                        </a>
                      </li>
                      <?php
                      $prodiId = 0;
                      $timId = 0;
                      if(Auth::user()->role == "admin" or Auth::user()->role == "dosen" or Auth::user()->role == "scrum master"){
                        echo
                        "<li class=\"nav-item\">".
                          "<a class=\"nav-link\" href=\"".url('daftar',[$prodiId,$timId])."\">".
                          "<i class=\"ni ni-bell-55\"></i> Daftar Mahasiswa ".
                          "</a>".
                        "</li>"
                        ;
                      }
                      ?>
                      <?php
                      if(Auth::user()->role == "mahasiswa"){
                        echo
                        "<li class=\"nav-item\">".
                          // "<a class=\"nav-link\" href=\"".url('sprint',[$currentUser])."\">".
                          "<i class=\"ni ni-books\"></i> Nilai ".
                          "</a>".
                        "</li>"
                        ;
                      }
                      ?>
                      <li class="nav-item">
                        {{-- <a class="nav-link " href="{{route('userprofil',$userId)}}"> --}}
                        <a class="nav-link">
                          <i class="ni ni-single-02 text-yellow"></i> Profile
                        </a>
                      </li>

              </ul>
            </div>
          </li>
        </ul>

        </div>
      </div>    
    </div>
  </nav>
  <div class="main-content">