<style>
    /* width */
    ::-webkit-scrollbar {
        width: 6px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        display: none;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 3px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    .dropdown-container1 {
        display: none;
        /*background-color: #262626;*/
        padding-left: 8px;
    }
    .dropdown-container2 {
        display: none;
        /*background-color: #262626;*/
        padding-left: 8px;
    }
    .dropdown-container3 {
        display: none;
        /*background-color: #262626;*/
        padding-left: 8px;
    }
    @font-face {
        font-family: GothamLight;
        src:url({{asset('fonts/gotham/GothamLight.ttf')}});
    }
    @font-face {
        font-family: euro;
        src:url({{asset('fonts/eurostile.TTF')}});
    }


    #logo{
        position: fixed;
        z-index: 10;
        top: 0;
        left:0;
        width: 100%;
        display: inline;
        transition: top 0.3s;

    }
    #logo-img{
        position: fixed;
        top: 1.5vh;
        left:0.5vh;
        /*width: 100%;*/
        /*max-height: 50px !important;*/
        display: inline;
        transition: top 0.3s;

    }
    #right-nav{
        z-index: 10;
    }
    #navbar {
        /*background-color: #333;*/
        position:fixed;
        z-index: 10;

        top: 0;
        left:29vh;
        width: 100%;
        display: inline;
        transition: top 0.3s;
    }

    .navgrad{
        background: linear-gradient(0deg, rgba(0, 0, 0, 0) 0%,  #000000 100%);
    }

    #signbtn{
        position: fixed;
        background: #268AFF;
        z-index: 100;
        color: #fff;
        width: 8.5vh;
        height: 2.8vh;
        text-align: center;
        /*padding: 5px;*/
        border: 0.5px solid #FFFFFF;
        border-radius: 20px;
        top: 1.5vh;
        right: 7.7vh;
    }
    a:hover{
        text-decoration: none;
    }

    .button_container {
        position: fixed;
        top: 1.7vh ;
        right: 1.2vh;

        height: 27px;
        width: 35px;
        cursor: pointer;
        z-index: 200;
        transition: opacity 0.25s ease;
    }
    .button_container:hover {
        opacity: 0.7;
    }
    .button_container.active .top {
        transform: translateY(11px) translateX(0) rotate(45deg);
        background: #fff;
    }
    .button_container.active .middle {
        opacity: 0;
        background: #fff;
    }
    .button_container.active .bottom {
        transform: translateY(-11px) translateX(0) rotate(-45deg);
        background: #fff;
    }
    .button_container span {
        background: #fff;
        border: none;
        height: 0.2vh;
        width: 80%;
        position: absolute;
        top: 0;
        left: 0;
        transition: all 0.35s ease;
        cursor: pointer;
    }
    .button_container span:nth-of-type(2) {
        top: 8px;
    }
    .button_container span:nth-of-type(3) {
        top: 16px;
    }
    .overlay {
        position: fixed;
        z-index:101;
        background: #000;
        top: 0;
        left: 0;
        width: 100%;
        height: 0%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.35s, visibility 0.35s, height 0.35s;
        overflow: hidden;
    }
    .overlay.open {
        opacity: 0.9;
        visibility: visible;
        height: 100%;
    }
    .overlay.open li {
        animation: fadeInRight 0.5s ease forwards;
        animation-delay: 0.35s;
    }
    .overlay.open li:nth-of-type(2) {
        animation-delay: 0.4s;
    }
    .overlay.open li:nth-of-type(3) {
        animation-delay: 0.45s;
    }
    .overlay.open li:nth-of-type(4) {
        animation-delay: 0.5s;
    }
    .overlay nav {
        position: relative;
        height: 100%;
        top: 70%;
        /*width: 100%;*/
        transform: translateY(-50%);
        font-size: 30px;
        font-family: 'Varela Round', serif;
        font-weight: 400;
        text-align: center;

    }
    .overlay ul {
        list-style: none;
        padding: 0;
        margin: 0 auto;
        display: inline-block;
        position: relative;
        height: 100%;
    }
    .overlay ul li {
        display: block;
        /*height: 25%;*/
        /*height: calc(100% / 4);*/
        min-height: 50px;
        position: relative;
        opacity: 0;
    }
    .overlay ul li a {
        display: block;
        position: relative;
        color: #fff;
        text-decoration: none;
        overflow: hidden;
    }
    .overlay ul li a:hover:after, .overlay ul li a:focus:after, .overlay ul li a:active:after {
        width: 100%;
    }
    .overlay ul li a:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0%;
        transform: translateX(-50%);
        height: 3px;
        background: #fff;
        transition: 0.35s;
    }
    @keyframes fadeInRight {
        0% {
            opacity: 0;
            left: 20%;
        }
        100% {
            opacity: 1;
            left: 0;
        }
    }
    .overlay-menu{
        font-family: euro !important;
    }
/*    YASH BT*/

    .mainbtn{
        position: fixed;
        background: #268AFF;
        z-index: 100;
        color: #fff !important;
        width: 8.5vh;
        height: 2.8vh;
        text-align: center;
        /*padding: 5px;*/
        border: 0.5px solid #FFFFFF;
        border-radius: 20px;
        top: 1.5vh;
        right: 7.7vh;
    }
    #username:after{
        width: 100%;
    }

</style>
