<header class="header push-down-45">
    <div class="container">
        <div class="logo pull-left">
            <a href="{{ url('/') }}">
                <img src="{{asset('images/logo.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="352" height="140">
            </a>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#readable-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="navbar-nav ml-auto" role="navigation">
            <div class="collapse navbar-collapse" id="readable-navbar-collapse">
                <ul class="navigation">
                      <li class="nav-item">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Главная</a>
                    </li>
                      <li class="nav-item">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Кто я?</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Написать мне</a>
                    </li>


				<!-- форма входа-->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('loginPost') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('registerform'))
                                    <a class="nav-link" href="{{ route('registerform') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
				<!-- конец формы входа-->
            </div>
        </nav>
        <div class="hidden-xs hidden-sm">
            <a href="#" class="search__container  js--toggle-search-mode"> <span class="glyphicon  glyphicon-search"></span> </a>
        </div>
    </div>
</header>