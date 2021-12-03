<html>
<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{url()->current()}}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta property="og:description" content="Segreta">
    <meta property="og:title" content="Segreta | Techfest, IIT Bombay">
    <meta property="og:site_name" content="Techfest">
    <meta property="og:image" content="https://techfest.org/2021/Segreta/bg.jpg">
    <meta property="og:see_also" content="http://techfest.org">
    <meta name="description" content="Segreta">
    <meta name="keywords" content="Segreta, Crypt Hunt">
    <meta name="author" content="Techfest Web Manager">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>Segreta | Techfest, IIT Bombay</title>
    <script type="text/javascript">
        if (window.innerWidth <= 992) {
            document.location = "{{ route('mob-segreta-dashboard') }}";
            window.location.replace('{{ route("mob-segreta-dashboard") }}');
        }
        window.addEventListener('resize', function(){
            if (window.innerWidth <= 992) {
                document.location = "{{ route('mob-segreta-dashboard') }}";
                window.location.replace('{{ route("mob-segreta-dashboard") }}');
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

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" style="border-radius:30px;" type="image/x-icon" href="https://i.ibb.co/s3Vyn82/title-01.png">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
{{--    <link href="{{ asset('2020/mun/css/bootstrap.min.css') }}" rel="stylesheet" />--}}

    <link href="//db.onlinewebfonts.com/c/af089c51d74ffa3c6a675fd6024b302b?family=Futura+Hv+BT" rel="stylesheet" type="text/css"/>


    @include('2021.segreta.css')
</head>


<style>



</style> 

<body>

<nav>
    @include('2021.segreta.layout.sign-nav')
    @include('2021.segreta.layout.footer')
    @include('2021.segreta.layout.css')
</nav>

<div class="container">

    <p class="text-center" style="margin-top: 13rem; font-size: 7vw; font-weight: 900; font-family: Futura Hv BT; letter-spacing: 0.05em;">SEGRETA</p>
    <p class="text-center" style="margin-top: -3rem; font-size: 1.6vw; letter-spacing: 0.05em;">THE BIGGEST ONLINE CRYPT HUNT</p>
    <p class="text-center" style="margin-top: 2rem; font-size: 2.5vw; font-weight: 550;">Begin the journey!</p>

    <div class="d-flex justify-content-center">
        <a class="com-btn mt-3" href='{{route('segreta-hunt')}}'>Start</a>
    </div>

</div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script type="text/javascript">
    $(window).scroll(function() {

        var newSize1 = $(window).scrollTop()*0.5;
        $('.img1').css({top:(newSize1)});

        var newSize2 = $(window).scrollTop()*0.3;
        $('.img2').css({top:(newSize2)});

        var newSize3 = $(window).scrollTop();
        $('.last').css({top:-(newSize3)});
    });
</script>

<script>
    var prevScrollpos = window.pageYOffset;

    // console.log(prevScrollpos);
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
            document.getElementById("nav-content").style.top = "0";
            document.getElementById("logo").style.top = "0";
            document.getElementById("logo-img").style.top = "0";
            document.getElementById("bottom-nav").style.bottom = "0";

            document.getElementById("notif").style.bottom = "0";

            document.getElementById("right-nav").style.right = "0";
            document.getElementById("right-nav-content").style.right = "0";
            document.getElementById("left-nav").style.left = "0";
            document.getElementById("left-nav-content").style.left = "0";

        } else {
            document.getElementById("navbar").style.top = "-100px";
            document.getElementById("nav-content").style.top = "-100px";
            document.getElementById("logo").style.top = "-130px";
            document.getElementById("logo-img").style.top = "-100px";
            document.getElementById("bottom-nav").style.bottom = "-100px";

            document.getElementById("notif").style.bottom = "-100px";

            document.getElementById("right-nav").style.right = "-500px";
            document.getElementById("right-nav-content").style.right = "-500px";
            document.getElementById("left-nav").style.left = "-500px";
            document.getElementById("left-nav-content").style.left = "-500px";

        }
        prevScrollpos = currentScrollPos;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown').hover(function () {
            $(this).find('.dropdown-menu').first().stop().slideDown(150);
        }, function () {
            $(this).find('.dropdown-menu').first().stop().slideUp(105)
        });
    });

    $(function() {
        $('a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500);
        });
    });
</script>

<script>
    $(document).ready(function(){
        // $(".owl-carousel").owlCarousel({
        //     loop:true,
        //     // margin:10,
        //     responsiveClass: true,
        //     navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        //     responsive: {
        //         0: {
        //             items: 1,
        //             nav: true,
        //             dots: false,
        //         },
        //         480: {
        //             items: 2,
        //             nav:true,
        //             dots: false,
        //         },
        //         720: {
        //             items: 3,
        //             nav: true,
        //         }
        //     }
        //
        // });

        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog");
            /* Applying the top margin on modal dialog to align it vertically center */
            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
        }
        // Align modal when it is displayed
        $(".modal").on("shown.bs.modal", alignModal);

        // Align modal when user resize the window
        $(window).on("resize", function(){
            $(".modal:visible").each(alignModal);
        });

    });

    // console.log('{{ route('mob-segreta') }}');

</script>

</html>
