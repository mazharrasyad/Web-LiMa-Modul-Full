@auth()
    @include('progress::layouts.navbars.navs.auth')
@endauth
    
@guest()
    @include('progress::layouts.navbars.navs.guest')
@endguest