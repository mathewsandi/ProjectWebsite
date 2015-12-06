<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/css/select2.min.css"/>
</head>


    <header>
        @include('partials.header')
    </header>

    <div class="container">
        <a href="http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2_zpshndu8ykr.png" target="_blank"><img src="http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2_zpshndu8ykr.png" border="0" alt=" photo Untitled-2_zpshndu8ykr.png"/></a>
    </div>




    <div class="body">
        @include('partials.flash')

        @yield('content')

        <br>




        @include('partials.bottomnavbar')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/js/select2.min.js"></script>
    <script> $('div.alert').not('.alert-important').delay(3000).slideUp(300);</script>
    <script> $(".nav a").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });</script>
@yield('scripts')
<style>
    .container img{
        text-align: center;
        border: none;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }
    body{
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Background_zpstehxmkxr.png");
        background-repeat: no-repeat;
        background-size: cover;
        color: #C20000;
    }


</style>
