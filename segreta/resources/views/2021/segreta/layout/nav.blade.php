
<head>
    <link href="//db.onlinewebfonts.com/c/af089c51d74ffa3c6a675fd6024b302b?family=Futura+Hv+BT" rel="stylesheet" type="text/css"/>
</head>

<div style="font-family: euro;letter-spacing: 1.5px;font-size: 1.3vw!important;">
    <a href="/">
        <img id="logo-img" style="z-index: 10;width:23%;float:left;" src="{{asset('2021/home/logo.svg')}}" alt="TF LOGO">
    </a>
    {{-- <div class="navgrad" id="logo">
        <img id="nav-img" style="width:31.25%;float:left;" src="{{asset('2021/home/Navbar/Logo.svg')}}" alt="">
    </div> --}}
    <div  id="navbar">
        <div class="row d-flex" id="nav-content">      

            @if(Auth::guest())

                <a style="margin-right: 2.3vw;" href="{{route('segreta')}}" class=" ">Home</a>

                <a style="margin-right: 2.3vw;" href="{{route('segreta-rules')}}">Rules</a>

                <a style="margin-right: 2.3vw;" href="{{route('segreta-prizes')}}">Prizes</a>

                <a style="margin-right: 2.3vw;" href="{{route('segreta-faqs')}}">FAQs</a>

                <a style="margin-right: 3vw;" href="{{route('segreta-contacts')}}">Contact Us</a>

                {{-- <a style="margin-right: 3vw;" href="{{route('google-login')}}" class=" signin-btn"> Sign In</a> --}}

            @else

                <a style="margin-right: 2.3vw;" href="{{route('segreta-leaderboard')}}" class=" ">Leaderboard</a>

                <a style="margin-right: 2.3vw;" href="{{route('segreta-rules')}}">Rules</a>

                <a style="margin-right: 2.3vw;" href="">Forum</a>   

                <li style="margin-right: 3vw;list-style: none;" class="d-flex justify-content-center nav-item dropdown a-signin-btn" >
                    <a style="pointer-events: none;cursor: pointer;"; id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <div style="text-align:center;margin-top: 0.5vw;border: 0.5px solid rgba(255,255,255,0.5)" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a style="padding-left: 3.3vw;margin-top: -0.1vw;" class="log-out" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >  Logout</a>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            @endif
        </div>
        {{-- <img style="width:71.35%;float:right;" src="{{asset('2021/home/Navbar/TN.svg')}}" alt=""> --}}
    </div>
    <div style="float:right;">

    </div>




</div>
