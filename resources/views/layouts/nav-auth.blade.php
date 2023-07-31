<nav class="navbar navbar-expand-md bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <img src="{{ Vite::asset('resources/images/ginseng strip.png') }}" alt=""
                style="width: 7rem;">
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item col-2 col-md-auto"><a href="{{ route('login') }}"
                                class="nav-link text-black bg-white rounded">Login</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item col-2 col-md-auto mx-3"><a href="{{ route('register') }}"
                                class="nav-link text-black bg-white rounded">Register</a></li>
                    @endif
                @else
                    <li class="nav-item col-2 col-md-auto mx-2"><a href="{{ route('product') }}" class="nav-link text-white">
                            <h3 class="bi bi-bag-fill"></h3>
                        </a></li>
                    <li class="nav-item col-2 col-md-auto mx-2"><a href="{{ route('cart.show') }}" class="nav-link text-white">
                            <h3 class="bi bi-cart"></h3>
                        </a></li>
                    <li class="nav-item dropdown col-2 col-md-auto mx-2">
                        <a href="" class="nav-link text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h3 class="bi bi-person-circle"></h3>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item col-2 col-md-auto mx-2"><</li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
