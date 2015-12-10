@extends('master')

@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div id="pic2">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutoriall0005_zpsvtenqufa.png">
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <div class="column txt-color-white text-center">
                <h2><span class="glyphicon glyphicon-info-sign"></span> Information</h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="column bg-color-darken txt-color-white text-center">
                <h2><span class="glyphicon glyphicon-shopping-cart"></span> Store</h2>
                <div id="pic1" class="col-sm-4">
                    <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutorial0005_zpsgk1e40og.png">
                </div>
                <div id="pic" class="col-sm-8">
                    <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutorialll0005_zps2rat1dx9.png">
                </div>
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
        text-align: left;
        padding-left: 25%;
        bottom: 90%;
    }
    #pic1{
        text-align: right;
        right: -10%;
        bottom:90%
    }
    #pic2{
        height: 50px;
        text-align: center;
        padding-left: 18%;
    }
</style>