<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
        {{-- secure --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- add icon link -->
     <link rel = "icon" href = 
     "https://cdn-icons-png.flaticon.com/512/3003/3003561.png" 
             type = "image/x-icon">
    <!-- Styles -->
    <link href="{{secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        Actividad Datos
                      </button> 
                </a>

                <a class="navbar-brand" href="{{ url('/expresiones') }}">
                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        Actividad Expresiones I
                      </button> 
                </a>
                <a class="navbar-brand" href="{{ url('/exp') }}">
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                    Actividad Expresiones II
                      </button> 
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (auth()->user()->is_admin == 0)
                                        <a class="dropdown-item" href="{{route('home')}}">Your order history</a>
                                    @endif
                                    @if (auth()->user()->is_admin == 1)
                                    <a class="dropdown-item" href="{{route('customers')}}">All Customers</a>
                                    <a class="dropdown-item" href="{{route('user.order')}}">User Order</a>
                                @endif




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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
