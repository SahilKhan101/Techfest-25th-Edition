<style>
    @font-face {
        font-family: GothamLight;
        src:url({{asset('fonts/gotham/GothamLight.ttf')}});
    }
    @font-face {
        font-family: euro;
        src:url({{asset('fonts/eurostile.TTF')}});
    }
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

    /*li{*/
    /*    list-style: none;*/
    /*}*/
    #navbar {
        /*background-color: #333;*/
        position:fixed;
        top: 0;
        right:0;
        width: 100%;
        z-index: 9;
        display: inline !important;
        transition: top 0.3s;
    }

    .navgrad{
        background: linear-gradient(0deg, rgba(0, 0, 0, 0) 0%,  #000000 100%);
    }

    .dropdown-menu{
        /*margin-top: 20px;*/
        background: rgba(0,0,0,0.75);
    }
    .dropdown{
        z-index: 100;

    }
    #nav-content{
        color:white;
        position: fixed;
        right:0.1vw;
        z-index: 10;

        /*top:2.5%;*/
        transition: top 0.3s;
        margin-top: 1.1vw;
    }
    .signin-btn{
        background: #268AFF;
        width:8vw;
        height: 2vw;
        z-index: 10;

        padding-top: -15px !important;
        padding-bottom: 1px;
        border-radius: 50px;
        border: 0.5px solid #FFFFFF;
    }
    .a-signin-btn{
        /*width:8vw;*/
        padding-top: -15px !important;
        /*padding-bottom: 1px;*/
    }
    #logo{
        position: fixed;
        top: 0;
        left:0;
        z-index:8;
        width: 100%;
        display: inline;
        transition: top 0.3s;

    }
    #logo-img{
        z-index: 10;
        position: fixed;
        top: 0;
        left:0;
        padding-left: 2.9%;
        padding-top: 1.7%;
        width: 100%;
        display: inline;
        transition: top 0.3s;

    }
    #nav-img{
        z-index:1000;
    }
   
    #left-nav{
        /*background-color: #333;*/
        position: fixed;

        z-index: 10;
        bottom: 0;
        left:0;
        /*width: 20%;*/
        display: block;
        transition: left 0.3s;
    }
    #left-nav-content{
        z-index: 10;
        position: fixed;
        /*letter-spacing: 1px;*/
        bottom: 0.5%;
        left:0;
        /*width: 20%;*/
        display: block;
        transition: left 0.3s;
    }
    #right-nav{
        /*background-color: #333;*/
        position: fixed;
        z-index: 10;
        bottom: 0;
        right:0;
        /*width: 20%;*/
        display: block;
        transition: right 0.3s;
    }
    #right-nav-content{
        /*background-color: #333;*/
        position: fixed;
        z-index: 10;
        bottom: 0;
        right:0 ;
        padding-right: 2vw;

        /*margin-left: 1vw;*/
        /*width: 20%;*/
        display: block;
        transition: right 0.3s;
    }
    @media only screen and (max-width: 1200px) {
        #right-nav-content {
            padding-right: 1vw;
        }
    }

    #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        font-size: 23px;
    }
    .log-out{
        font-size: 17px !important;
    }
    #left-nav-content a {
        float: left;
        display: block;
        color: #fff;
        margin-left: 4vw;
        text-align: center;
        padding-top: 15px;
        text-decoration: none;
        /*font-size: 1rem;*/
    }

    #navbar a:hover {
        /*background-color: #ddd;*/
        /*color: black;*/
    }

    
.fa-pinterest-p{
    position: absolute;
    left: 39.23%;
    right: 58.85%;
    top: 93.55%;
    bottom: 2.5%;
    font-size: 30px;
    color: white;

    background: none;
}
.fa-facebook-f{
    position: absolute;
    left: 52.05%;
    right: 46.92%;
    top: 93.55%;
    bottom: 2.5%;
    color: white;
    border-radius: 50%;
    font-size: 30px;

    background: none;
}
.fa-youtube{
    position: absolute;
    left: 43.08%;
    right: 54.17%;
    top: 93.55%;
    bottom: 2.5%;
    color: white;
    font-size: 30px;

    background: none;
}
.fa-twitter{
    position: absolute;
    left: 47.76%;
    right: 49.87%;
    top: 93.55%;
    bottom: 2.5%;
    color: white;
    font-size: 30px;

    background: none;
}
.fa-instagram{
    position: absolute;
    left: 56%;
    right: 43.08%;
    top: 93.55%;
    bottom: 2.5%;
    color: white;
    font-size: 30px;

    background: none;
}
.fa-linkedin-in{
    position: absolute;
    left: 59.85%;
    right: 39.17%;
    top: 93.55%;
    bottom: 2.5%;
    font-size: 30px;
    color: white;

    background: none;
}

</style>

