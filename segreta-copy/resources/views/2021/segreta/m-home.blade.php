<html>
<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:description" content="">
    <meta property="og:title" content="Segreta | Techfest, IIT Bombay">
    <meta property="og:site_name" content="Techfest">
    <meta property="og:image" content="https://techfest.org/2020/website.png">
    <meta property="og:see_also" content="http://m.techfest.org">
    <meta name="description" content="Segreta | Techfest, IIT Bombay">
    <meta name="keywords" content="techfest iit bombay, techfest iitb, iit bombay, techfest, crypt hunt, segreta">
    <meta name="author" content="Techfest Web Manager">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>Segreta | Techfest, IIT Bombay</title>
    <script type="text/javascript">
        if (window.innerWidth >= 992) {
            document.location = "{{ route('segreta') }}";
            window.location.replace('{{ route("segreta") }}');
        }
        window.addEventListener('resize', function(){
            if (window.innerWidth >= 992) {
                document.location = "{{ route('segreta') }}";
                window.location.replace('{{ route("segreta") }}');
            }
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="http://techfest.org/2019/ca/images/favicon_logo.png">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    @include('2021.segreta.m-css')

</head>
<body>

<nav>
    @include('2021.segreta.layout.m-unsign-nav')
    @include('2021.segreta.layout.m-css')
</nav>

<div class="container">
    
    <p class="text-center" style="margin-top: 13rem; font-size: 17vw; font-weight: 900; font-family: Futura Hv BT; letter-spacing: 0.05em;">SEGRETA</p>
    <p class="text-center" style="margin-top: -2rem; font-size: 4vw; letter-spacing: 0.05em;">THE BIGGEST ONLINE CRYPT HUNT</p>

    <div class="d-flex justify-content-center" style="margin-top: 6rem;">
        <a class="com-btn mt-3" href='{{route('mob-segreta-dashboard')}}'>Begin</a>
    </div>
    
</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function() {
        $('a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500);
        });
    });
</script>
</html>
