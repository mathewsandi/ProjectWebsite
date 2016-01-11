<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/css/select2.min.css"/>
    <script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
</head>



<div class="body">

    <div class="container">

        <div class="logo">
            <img src="/img/logo.PNG" border="0" alt=" photo Untitled-2_zpshndu8ykr.png"/>
        </div>

        <ul class="rig">
            <li class="game">
                <a href="#"><img src="http://i1206.photobucket.com/albums/bb455/IPenna/Profile-Picture_zpsmzvha3gc.png" /></a>
                <h3>Mafia</h3>
                <p>This is just a simple browser mafia game that I (Matt) have developed. I created this to try and recreate
                the old mafia browser games I used to play.</p>
            </li>
            <li class="game">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Profile-Picture_zpsmzvha3gc.png" />
                <h3>Image Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </li>
            <li class="game">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Profile-Picture_zpsmzvha3gc.png" />
                <h3>Image Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </li>
            <li class="game">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Profile-Picture_zpsmzvha3gc.png" />
                <h3>Image Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </li>
        </ul>
    </div>

</div>



<script src="/js/gamesHome.js"type="text/javascript"></script>
<style>
    .body{
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-1_zpsdu4q76kk.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .logo{
        text-align: center;
    }
    .game{
        opacity: 0.75;
    }
    ul.rig {
        list-style: none;
        font-size: 0px;
        margin-left: -2.5%; /* should match li left margin */
    }
    ul.rig li {
        display: inline-block;
        padding: 10px;
        margin: 0 0 2.5% 2.5%;
        background: #fff;
        border: 1px solid #ddd;
        font-size: 16px;
        font-size: 1rem;
        vertical-align: top;
        box-shadow: 0 0 5px #ddd;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        width: 47.5%; /* this value + 2.5 should = 50% */
    }
    ul.rig li img {
        max-width: 100%;
        height: auto;
        margin: 0 0 10px;
    }
    ul.rig li h3 {
        margin: 0 0 5px;
    }
    ul.rig li p {
        font-size: 1.5em;
        line-height: 1.5em;
        color: #999;
    }
    @media (max-width: 480px) {
        ul.grid-nav li {
            display: block;
            margin: 0 0 5px;
        }
        ul.grid-nav li a {
            display: block;
        }
        ul.rig {
            margin-left: 0;
        }
        ul.rig li {
            width: 100% !important; /* over-ride all li styles */
            margin: 0 0 20px;
        }
    }
</style>