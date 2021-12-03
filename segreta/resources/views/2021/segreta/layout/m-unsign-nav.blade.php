<head>
    <link href="//db.onlinewebfonts.com/c/af089c51d74ffa3c6a675fd6024b302b?family=Futura+Hv+BT" rel="stylesheet" type="text/css"/>
</head>

<a href="{{ route('home') }}">
    <div class="" id="logo">
        <img  id="logo-img" style="height:5.5vh;float:left;border: 0;" src="{{asset('2021/home/logo.svg')}}" alt="">
        {{-- <img  style="height: 8.3vh;float:left;border:0;" src="{{asset('2021/home/Navbar/Logo.svg')}}" alt=""> --}}
    </div>
</a>

{{-- <div id="navbar">
    <img id="right-nav" style="height:6vh;float:left;border:0;!important; " src="{{asset('2021/home/Navbar/TN.svg')}}" alt="">
</div> --}}
{{-- @if(Auth::guest())
    <a  style="font-family: euro;padding-top:-0.17vh;font-size: 1.8vh;" id="signbtn" href="{{route('google-login')}}">Sign In</a>
@else
@endif --}}

<div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
<div class="overlay" id="overlay">

    <nav class="overlay-menu">
        <ul>
            <li style="margin-top: -0vh;"><a href="{{route('mob-segreta')}}">Home</a></li>

            <li><a href="{{route('mob-segreta-rules')}}">Rules</a></li>

            <li><a href="{{route('mob-segreta-prizes')}}">Prizes</a></li>
            
            <li><a href="{{route('mob-segreta-faqs')}}">FAQs</a></li>

            <li><a href="{{route('mob-segreta-contacts')}}">Contact Us</a></li>

            {{-- <li><a class="dropdown-btn2" style="position: relative" href="#">Events <span style="font-size: 18px;" class="pb-2">&#9660;</span></a></li>
            <div class="dropdown-container2">
                <li><a href="">Lectures</a></li>
                <li><a href="">Exhibitions</a></li>
                <li><a href="">Summit</a></li>
                <li><a href="">Industry Visit</a></li>
                <li><a href="">Technoholix</a></li>
                <li><a href="">Ed-Conclave</a></li>
            </div> --}}

            @if(Auth::guest())
            @else
            <li><a href="{{route('logout')}}">Logout</a></li>
            @endif

            <li style="display: flex;margin-top: 5vh;" class="row">
                <a class="text-white mx-1" target="_blank" href="https://www.facebook.com/iitbombaytechfest"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white mx-1" target="_blank" href="https://www.instagram.com/techfest_iitbombay/"><i class="fab fa-instagram"></i></a>
                <a class="text-white mx-1" target="_blank" href="https://twitter.com/Techfest_IITB"><i class="fab fa-twitter"></i></a>
                <a class="text-white mx-1" target="_blank" href="https://pin.it/2bYTd9M"><i class="fab fa-pinterest-p"></i></a>
                <a class="text-white mx-1" target="_blank" href="https://www.youtube.com/user/techfestiitbombay"><i class="fab fa-youtube"></i></a>
                <a class="text-white mx-1" target="_blank" href="https://www.linkedin.com/company/techfest/"><i class="fab fa-linkedin-in"></i></a>
            </li>

        </ul>

    </nav>

</div>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('.dropdown-btn1').click(function() {
            $('.dropdown-container1').toggle("slide");
        });
    });
    $(document).ready(function(){
        $('.dropdown-btn2').click(function() {
            $('.dropdown-container2').toggle("slide");
        });
    });
    $(document).ready(function(){
        $('.dropdown-btn3').click(function() {
            $('.dropdown-container3').toggle("slide");
        });
    });

</script>
