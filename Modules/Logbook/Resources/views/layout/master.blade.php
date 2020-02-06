@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.navbar')
  <div class="main-content">
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">

        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
    <div class="row">

    @yield('content')
    
  </div>
@include('layouts.copyright')      
@include('layouts.footer')
