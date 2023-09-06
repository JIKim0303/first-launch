
<header class="header">
    <div class="header__inner">

        <h1 class="header__title header-title">
            <a href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
        </h1>

        <nav class="header__nav nav" id="js-nav">
            <!-- Right Side Of Navbar -->
            <ul class="nav__items nav-items">          
                <li class="nav-items__item">
                    <a href="{{ view('test') }}">犬種診断</a>
                </li>
                <li class="nav-items__item">
                    <a href="#">世界のわんちゃんたち</a>
                </li>
                <li class="nav-items__item">
                    <a href="#">お問い合わせ</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-items__item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-items__item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-items__item nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        <button class="header__hamburger hamburger" id="js-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>