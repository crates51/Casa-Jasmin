<nav class="navbar navbar-expand navbar-dark jPurplecolor">
	<ul class="navbar-nav ml-auto ">
	    <!-- Authentication Links -->
	    @guest
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('login') }}">{{ __('Conectează-te') }}</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('register') }}">{{ __('Înscrie-te') }}</a>
	        </li>
	    @else
	        <li class="nav-item dropdown">
	            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                {{ Auth::user()->name }} <span class="caret"></span>
	            </a>

	            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                <a class="dropdown-item" href="/dashboard">Dashboard</a>
	                <a class="dropdown-item" href="{{ route('logout') }}"
	                   onclick="event.preventDefault();
	                                 document.getElementById('logout-form').submit();">
	                    {{ __('Deconectare') }}
	                </a>

	                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    @csrf
	                </form>
	            </div>
	        </li>
	    @endguest
	</ul>
</nav>

<div class="pt-1 pl-4 pb-2 jPurplecolor">
      <p class="text-center page_title">Casa Jasmin</p>
      <p class="text-center page_subtitle">Hotel & Resort</p>
</div>