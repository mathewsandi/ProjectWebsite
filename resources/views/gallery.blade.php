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
    
@stop

<style>
    #myCarousel{
        /width: 100%;
        margin-right: auto;
        margin-left: auto;
    }
    .carousel-inner{
        right:19%;
        left: 19%;
    }
</style>