<!-- Navbar Fixed Top-->
<nav class="navbar navbar-default fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" title="" aria-label="Brand">
            <img class="navbar-brand-icon" src="{{asset('favicon.png')}}" rel="ICON" alt="{{config('app.name', 'LSAPP')}}">
        </a>
        <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="nav navbar-nav navbar-left padding">
                <li class="nav-item">
                    <a class="nav-link p-2" href="/" aria-label="Home">Home
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link p-2" href="/about" aria-label="About">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link p-2" href="/services" aria-label="Contact">Services</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link p-2" href="/posts" aria-label="Contact">Blog</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link p-2" href="/contact" aria-label="Contact">Contact</a>
                </li>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/dashboard" class="dropdown-item" aria-label="Dashboard">Dashboard</a>
                                    <a class="dropdown-item" href="/posts/create" aria-label="New Blog">New Blog</a>
                                    @if(Auth::user()->id == 3)
                                        <a class="dropdown-item" href="/register" aria-label="Register">Add Member</a>
                                    @endif

                                    <div class="dropdown-divider"></div>
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
                </div>


                <li class="nav-item">
                    <a class="nav-link p-2" href="https://www.facebook.com/ashish.bhoi.2016" target="noopener" aria-label="Facebook">
                        <i class="fab fa-facebook-f fa-lg text-white padding"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" href="https://www.instagram.com/ashishkumar_04" target="noopener" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg text-white"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" href="https://twitter.com/Ashishbhoi8" target="noopener" aria-label="Twitter">
                        <i class="fab fa-twitter fa-lg text-white"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" href="http://github.com/AshishBhoi" target="noopener" aria-label="GitHub">
                        <i class="fab fa-github fa-lg text-white"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" href="http://gitlab.com/AshishBhoi" target="noopener" aria-label="GitLab">
                        <i class="fab fa-gitlab fa-lg text-white"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Navbar Fixed Top-->
<nav class="navbar navbar-default navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" title="" aria-label="Brand">
            <img class="navbar-brand-icon" src="{{asset('favicon.png')}}" rel="ICON" alt="{{config('app.name', 'LSAPP')}}">
        </a>
    </div>
</nav>
