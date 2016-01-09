@extends('master')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/sezcraft-Showcase-picture_zpslrfz0asj.png" alt="Sezcraft">
            </div>

            <div class="item">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/YouTube-Showcase-picture_zpsk3drnvw0.png" alt="Youtube">
            </div>

            <div class="item">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Forum-Showcase-picture_zpszghfvx0a.png" alt="Forums">
            </div>

            <div class="item">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Blog-Showcase-picture_zpsfysx7yil.png" alt="Blog">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71831538-1', 'auto');
        ga('send', 'pageview');

    </script>
@stop

<style>
    #myCarousel{
        position: absolute;
        left: 23%;
    }
</style>