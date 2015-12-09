@extends('master')

@section('content')


    <div class="row">
        <div class="col-md-2 col-sm-2">
            <div class="column txt-color-white text-center">
                <h2><span class="glyphicon glyphicon-info-sign"></span></i> Information</h2>
            </div>
        </div>

        <div id="pic">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutorialll0005_zps2rat1dx9.png">
        </div>
        <div id="pic1">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutorial0005_zpsgk1e40og.png">
        </div>
        <div id="pic2">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutoriall0005_zpsvtenqufa.png">
        </div>

        <div class="col-md-10 col-sm-10">
            <div class="column bg-color-darken txt-color-white text-center">
                <h2><span class="glyphicon glyphicon-shopping-cart"></span> Store</h2>
            </div>
        </div>
    </div>


@stop

<style>
    .row{
        padding: 5px 15px;
    }
    .column{
        height: 75px;
        padding: 1px;
        text-align: center;
        color: whitesmoke;
        margin-bottom: 1em;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2lll_zpslz4u6fac.png");
        background-color: inherit;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow: 0 10px 6px -6px #000000;
        box-shadow: 0 10px 6px -6px #000000;
    }
    #pic{
        position: absolute;
        width: 100%;
        height: 100%;
        margin-left: 650px;
        margin-right: auto;
        z-index: 999;
    }
    #pic1{
        position: absolute;
        width: 100%;
        height: 100%;
        margin-left: 1075px;
        margin-right: auto;
        z-index: 999;
    }
    #pic2{
        position: absolute;
        width: 100%;
        height: 100%;
        margin-left: 863px;
        bottom: -175px;
        margin-right: auto;
        z-index: -999;
    }
</style>