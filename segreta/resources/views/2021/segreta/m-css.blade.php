<style>
    body{
        overflow-x: hidden;
        color: #FFFFFF;
        background-color: rgb(23, 23, 44);
        font-family: GothamLight ;
        background: linear-gradient(to top, #18314D99, #18314D99), url({{asset('2021/segreta/bg.jpg')}}) no-repeat ;
        background-position: bottom;
        background-size: cover;
        background-attachment: fixed;
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
        width: 4px;
    }

    ::-webkit-scrollbar-track {
        background: rgb(0,0,0,0);
    }
    ::-webkit-scrollbar-thumb {
        /*background: red;*/
        background: rgba(255,255,255,0.8);
        border-radius: 2px;

    }

    .com-btn{
        width: 40vw;
        height: 65px;
        /* font-family: euro !important; */
        font-weight: 700;
        font-size: 7vw;
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

    .heading{
        font-size: 13vw; 
        font-weight: 700;
    }
    .sub-title{
        font-size: 6vw; 
        font-weight: 700;
        margin-bottom: 0;
    }
    .rule-content{
        font-size: 4vw; 
        /* font-weight: 400; */
        margin-bottom: 0;
    }

    .agenda-span{
        margin: 13px;
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

</style>

