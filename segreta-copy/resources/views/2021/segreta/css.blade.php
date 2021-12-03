<style>
    body{
        color: #FFFFFF;
        background-color: rgb(23, 23, 44);
        font-family: GothamLight ;
        /* background: url('https://techfest.org/2021/segreta/bg.jpg') no-repeat; */
        /* background: url({{asset('2021/segreta/bg.jpg')}}) no-repeat; */
        background: linear-gradient(to top, #18314D99, #18314D99), url({{asset('2021/segreta/bg.jpg')}}) no-repeat ;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }

    @font-face {
        font-family: GothamLight;
        src:url({{asset('fonts/gotham/GothamLight.ttf')}});
    }
    @font-face {
        font-family: euro;
        src:url({{asset('fonts/eurostile.TTF')}});
    }
    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        background: rgb(00,00,00,0.75);
    }
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    .title{
        position: absolute;
        /* width: 589px; */
        width: 100%;
        height: 152px;
        left: 0;
        /* left: 32%; */
        /* right: 40%; */
        /* left: 485px; */
        top: 259px;

        margin : 0 auto;

        font-family: Futura Hv BT;
        font-style: normal;
        font-weight: 900;
        font-size: 7vw;
        /* font-size: 96px; */
        line-height: 115px;
        text-align: center;
        letter-spacing: 0.05em;

        color: #FFFFFF;

    }
    .title-2{
        position: absolute;
        width: 100%;
        /* width: 591px; */
        height: 28px;
        /* left: 487px; */
        top: 370px;

        font-family: Gotham;
        font-style: normal;
        /* font-weight: 300; */
        font-size: 1.75vw;
        /* font-size: 26px; */
        line-height: 21px;
        text-align: center;
        letter-spacing: 0.05em;
        text-transform: uppercase;

        color: #FFFFFF;
    }

    .button{
        position: absolute;
        width: 18vw;
        /* width: 276px; */
        height: 70px;
        left: 41%;
        /* left: 642px; */
        top: 506px;

        background: rgba(255, 255, 255, 0.1);
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        backdrop-filter: blur(2px);
        border-radius: 5px;
    }
    .button-text{
        position: absolute;
        width: 100%;
        /* width: 225px; */
        height: 41px;
        /* left: 667px; */
        top: 525px;

        font-family: Gotham;
        font-style: normal;
        font-weight: normal;
        font-size: 3vw;
        /* font-size: 36px; */
        line-height: 34px;
        text-align: center;
        text-transform: capitalize;
        text-decoration: none;
        color: #FFFFFF;
    }
    .button-text:hover{
        text-decoration: none;
        color: #FFFFFF;
    }
    .heading{
        font-size: 4vw; 
        font-weight: 700;
    }
    .sub-title{
        font-size: 1.7vw; 
        font-weight: 700;
        margin-bottom: 0;
    }
    .rule-content{
        font-size: 1.4vw; 
        /* font-weight: 400; */
        margin-bottom: 0;
    }

    .agenda-span{
        margin: 10px;
    }
    .com-btn2{
        /*width:300px;*/
        /*font-family: euro !important;*/
        font-size: 17px;
        letter-spacing: 1px;
        min-height:40px;
        display:flex;
        align-items:center;
        /* justify-content:center; */
        background: rgba(255,255,255,0.1);
        border-radius: 5px;
        border: 0.5px solid white;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }
    .com-btn2:hover{
        color: white;
        text-decoration: none;
        background: rgba(255,255,255,0.2);
    }

    .contact-tf{
        width:100%;
        border-radius: 5px;
        /*height:140px;*/
        border: 2px solid white;
        background: rgba(255,255,255,0.06);
        margin: auto;
        margin-bottom: 50px;
        text-decoration: none;
    }
    .contact-tf a:hover{
        text-decoration: none;
    }
    .contact-tf p{
        padding: 6px 12px;
    }
    .label{
        font-size: 1.3vw;
        font-weight: 700;
        margin: 0 auto;
    }
    .leader-content{
        font-size: 1.3vw;
        margin: 0 auto;
        align-items: center;
    }
    .com-btn3{
        /*width:300px;*/
        /*font-family: euro !important;*/
        font-size: 17px;
        letter-spacing: 1px;
        /* height:40px; */
        /* display:flex; */
        align-items:center;
        /* justify-content:center; */
        background: rgba(255,255,255,0.1);
        border-radius: 5px;
        border: 0.5px solid white;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        margin: 10px;
        margin-bottom: 12px
    }
    .com-btn3:hover{
        color: white;
        text-decoration: none;
        background: rgba(255,255,255,0.2);
    }
    .leader-content .col-4{
        align-items: center;
        padding: 2.5px 0;
    }
    .com-btn{
        width: 18vw;
        height: 65px;
        /* font-family: euro !important; */
        font-weight: 700;
        font-size: 2.5vw;
        letter-spacing: 1px;
        display:flex;
        align-items:center;
        justify-content:center;
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(2px);
        border-radius: 5px;
        border: 0.5px solid white;
        color: white;
    }
    .com-btn:hover{
        color: white;
        text-decoration: none;
        background: rgba(255,255,255,0.2);
    }
    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #FFFFFF;
        margin: 1em 0;
        padding: 0;
    }


</style>



