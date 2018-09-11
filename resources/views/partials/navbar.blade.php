<nav class="navbar navbar-expand-lg">
    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <a class="navbar-brand" href="#">
            <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-bicycle"></i></a>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(Route::current()->uri == '/') active @endif">
                    <a class="nav-link" href="{{ url('/') }}">Homepage</a>
                </li>
                <li class="nav-item @if(Route::current()->uri == 'create_bike') active @endif">
                    <a class="nav-link" href="{{ url('create_bike') }}">Add product</a>
                </li>
                <li class="nav-item @if(Route::current()->uri == 'contact') active @endif">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    @if($is_user_logged_in)
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link @if(Route::current()->uri == 'logout') active @endif" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

