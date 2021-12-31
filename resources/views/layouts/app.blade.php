<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App</title>

    <!-- Scripts -->
    <script src="{{asset('js/app.js') }}" defer></script>
        {{-- secure --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- add icon link -->
     <link rel = "icon" href = 
     "https://cdn-icons-png.flaticon.com/512/3003/3003561.png" 
             type = "image/x-icon">
    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="color">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">PLF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
          
                <a class="nav-link" href="{{ url('/') }}">
                        Actividad Datos
                     
                </a>

                <a class="nav-link" href="{{ url('/expresiones') }}">
                        Actividad Expresiones I
                </a>
                <a class="nav-link " href="{{ url('/exp') }}">
                    Actividad Expresiones II
                     
                </a>

                <a class="nav-link " href="{{ url('/function') }}">
                    
                   Ecuaciones
                </a>
                <a class="nav-link " href="{{ url('/Paradigma') }}">
                    
                    Paradigmas
                 </a>
                 <a class="nav-link " href="{{ url('/horn') }}">
                    Resolución SLD
                  
                 </a>

            </div>
        </div>
      </nav>
     

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
