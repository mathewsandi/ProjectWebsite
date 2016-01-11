@extends('master')

@section('content')


        <h4 class="box"><b>About Sezgi</b></h4>
        <div id="container">
            <div id="text"> Sezgi is a community website that has extended from the old Incepticraft community which
            people may or may not know. Incepticraft was a minecraft community and expanded quite far
            within the minecraft server community. Incepticraft was around for nearly 2 years before we took 6 month break.
            Sezgi is the reformed Incepticraft, and we are hoping to make this community not purely focused
            on minecraft. We hope to be focused on a variety of games but we also hope to branch out and do
            new stuff as well. Sezgi website is custom coded in various languages. Matt did the code whilst Penna
            as always did the designs. If you have any more questions just contact us!</div>
        </div>
        <div class="pic">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/CHAT-SHIT-GET-BANGED_zpsm360tygf.png">
        </div>

@endsection

<style>
    #container {
        height: 150px;
        width: 1250px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2lll_zpslz4u6fac.png");
        background-color: inherit;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow: 0 10px 6px -6px #000000;
        box-shadow: 0 10px 6px -6px #000000;
    }
    #text{
        z-index: 100;
        position: absolute;
        color: white;
        font-size: 18px;
        text-align:center;
        top: 5%;
        bottom: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .box {
        height: 75px;
        width:1250px;
        margin-left: auto;
        margin-right: auto;
        padding: 28px;
        text-align: center;
        margin-bottom: 1em;
        color:whitesmoke;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2lll_zpslz4u6fac.png");
        background-color: inherit;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow: 0 10px 6px -6px #000000;
        box-shadow: 0 10px 6px -6px #000000;
    }
    .pic{
        text-align: center;
        padding: 5em;
    }
</style>