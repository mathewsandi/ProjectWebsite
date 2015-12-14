@extends('master')

@section('content')

<div class="body">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div id="pic2">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/ploxy-render-skin-tutoriall0005_zpsvtenqufa.png">
            </div>
        </div>
        <div class="col-md-2 col-sm-2 points">
            <div id="points">
                <p>{{$user->points}}</p>
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

            <a href="{{ action('StoreController@show', [$id = 1]) }}"><div id="store">
            </div></a>

            <a href="{{ action('StoreController@show', [$id = 2]) }}"><div id="store2">
            </div></a>

            <a href="{{ action('StoreController@show', [$id = 3]) }}"><div id="store3">
            </div></a>

            <a href="{{ action('StoreController@show', [$id = 4]) }}"><div id="store4">
            </div></a>

            <a href="{{ action('StoreController@show', [$id = 5]) }}"><div id="store5">
            </div></a>
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
    #store{
        position: absolute;
        width: 300px;
        height: 150px;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Villager_zpsqs1fip7b.png");
        background-repeat: no-repeat;
        background-size: cover;
        left: 0%;
    }
    #store2{
        position: absolute;
        width:300px;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Golem-Pack_zpsek232urw.png");
        background-repeat: no-repeat;
        background-size: cover;
        height:150px;
        left:20%;
    }
    #store3{
        position: absolute;
        width: 300px;
        height: 150px;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Blaze-Pack_zpsunasi0pn.png");
        background-repeat: no-repeat;
        background-size: cover;
        left:40%;
    }
    #store4{
         position: absolute;
         width:300px;
         background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Enderman-Pack_zpshzc4v2qd.png");
         background-repeat: no-repeat;
         background-size: cover;
         height:150px;
         left:60%;
     }
    #store5{
        position: absolute;
        width:300px;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Guardian-Pack_zpsjiiobrnc.png");
        background-repeat: no-repeat;
        background-size: cover;
        height:150px;
        left:80%;
    }
    .points{
        position: absolute;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2_zpsr1bu6ptu.png");
        background-repeat: no-repeat;
        height: 40%;
        left: 2%;
    }
    #points{
        position: relative;
        font-size: 60px;
        color: black;
        left: 20%;
        top: 25%;
    }
</style>