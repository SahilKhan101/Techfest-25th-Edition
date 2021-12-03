<div id="navbar">
    <a class="tf" href="https://techfest.org/">
        <img src="https://techfest.org/2021/home/logo.svg" alt="">
    </a>
    <a href="/segreta/leaderboard" class="leaderboard">Leaderboard</a>
    <a href="/segreta/rules" class="prizes">Rules</a>
    <a href="" class="faqs">Forum</a>
    {{-- <a href="" class="contact">Yash</a> --}}

    @if(Auth::guest())
        <a style="margin-right: 3vw;" href="{{route('google-login')}}" class=" contact"> Sign In</a>
    @else
        <li style="list-style: none;" class="nav-item dropdown a-signin-btn contact" >
            <a class="" style="pointer-events: none;cursor: pointer;"; id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div style="text-align:center;margin-top: -1vw;border: 0.5px solid rgba(255,255,255,0.5)" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a style="padding-left: 3.3vw;margin-top: -0.1vw;" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                >{{ __('Logout') }}</a>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    @endif


    {{-- <ul class="">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="">
                    <a class="nav-link contact" href="{{ url('auth/google') }}">{{ __('Sign In') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown ">
                <a id="navbarDropdown" class="contact nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="" href="/dashboard">Dashbord</a>
                  </li>
                  <li>
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                  </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>
            </li>
        @endguest
    </ul> --}}


    {{-- <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('auth/google') }}">{{ __('Sign In') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} ({{Auth::getDefaultDriver()}})
                </a>

                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="/dashboard">Dashbord</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                  </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>
            </li>
        @endguest
    </ul> --}}

    <a class="text-white" target="_blank" href="https://pin.it/2bYTd9M"><i class="fab fa-pinterest-p"></i></a>
    <a class="text-white" target="_blank" href="https://www.youtube.com/user/techfestiitbombay"><i class="fab fa-youtube"></i></a>
    <a class="text-white" target="_blank" href="https://twitter.com/Techfest_IITB"><i class="fab fa-twitter"></i></a>
    <a class="text-white" target="_blank" href="https://www.facebook.com/iitbombaytechfest"><i class="fab fa-facebook-f"></i></a>
    <a class="text-white" target="_blank" href="https://www.instagram.com/techfest_iitbombay/"><i class="fab fa-instagram"></i></a>
    <a class="text-white" target="_blank" href="https://www.linkedin.com/company/techfest/"><i class="fab fa-linkedin-in"></i></a>

</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

