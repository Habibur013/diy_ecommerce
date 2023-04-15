<section class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}"><img width="250" src="images/logo.png"
                    alt="Logo Here" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item {{ Request::is('show_cart') ? 'active' : '' }}">
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link" href="{{ url('show_cart') }}">Cart({{ $cart->count('user_id') }})</a>
                            @else
                                <a class="nav-link" href="{{ url('show_cart') }}">Cart(0)</a>
                            @endauth
                        @endif
                    </li>
                    <li class="nav-item {{ Request::is('view_event_galary') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('view_event_galary') }}">Event Gallary</a>
                    </li>


                    @if (Route::has('login'))
                        @auth
                            <x-app-layout>
                            </x-app-layout>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary mx-2 p-1" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success p-1" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    @endif




                </ul>
            </div>
        </nav>
    </div>
</section>

</section>
