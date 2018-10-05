<link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather|Cinzel|Open+Sans" rel="stylesheet">

<nav class="navbar navbar-expand-md navbar-dark navbar-laravel pb-3 jPurplecolor ">
    <div class="container">
      {{--   <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav navbar-effect">
              <li class="nav-item">
                <a class="nav-link put_after text-light pr-4" href="/">Acasa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link put_after text-light pr-4" href="/about">Despre Noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link put_after text-light pr-4" id="booking" href="/about">Cazare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link put_after text-light pr-4" href="/services">Servicii</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light pr-4" href="/posts">Blog</a>
              </li>
            </ul>

        </div>
    </div>
</nav>
