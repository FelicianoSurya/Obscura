<nav class="mb-5 p-4 navbar navbar-expand-md navbar-fixed-top">
    
    <a href="{{ route('homeExhibition') }}"><div class="d-flex px-4 col-lg-5 col-12 align-items-center">
    <div class="row">
        <div class="logo col-3">
            <img src="{{ asset('images/ObscuraExibition/Logo/Logo.png') }}" alt="logo" width="100">
        </div>
        <div class="d-flex col-9 flex-column ps-2 justify-content-center">
            <p class="text-topic font-yellow font-goudy fs-3 m-0">OBSCURA EXHIBITION</p>
            <p class="text-topic font-yellow font-goudy fs-6 m-0"><i>Gallery</i></p>
    </div>
    </div></a>
    </div>    
    <div class="d-flex justify-content-end col-lg-5 col-12 align-items-center btn-regis">
    @guest
        @if (Route::has('login'))
        <a href="{{ route('login') }}" class="fs-5">Log in</a>
        @endif
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="fs-5">Register</a>
        @endif
    @else
        <p class="font-goudy font-yellow pe-2">{{ Auth::user()->name }}</p>
        @if(Auth::user()->email_verified_at == NULL)
        <img src="{{ asset('images/ObscuraExibition/warning.png') }}" width="20" height="20" alt="warning">
        @endif
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
@endguest
</nav>

<!-- <div id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div> -->

<div class="nav-main d-flex flex-column">
        <div class="nav-menu-container  container">
            <div class="nav-menu py-2">OBSCURA EXHIBITION</div>
            <div class="nav-menu py-2">WEEKLY MEETING</div>
            <div class="nav-menu py-2">GALLERY</div>
            <div class="nav-menu py-2">ABOUT US</div>
        </div>
</div>

<nav class="nav-overlay">
    
</nav>

