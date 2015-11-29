@extends('master')

@section('content')


    <div id="container">
            <div id="text"> Sezgi is a community website that has extended from the old Incepticraft community which
            people may or may not know. Incepticraft was a minecraft community and expanded quite far
            within the minecraft server community. Incepticraft was around for nearly 2 years before we took 6 month break.
            Sezgi is the reformed Incepticraft, and we are hoping to make this community not purely focused
            on minecraft. We hope to be focused on a variety of games but we also hope to branch out and do
            new stuff as well. Sezgi website is custom coded in various languages. Matt did the code whilst Penna
            as always did the designs. If you have any more questions just contact us!</div>
    </div>
@endsection

<style>
    #container {
        height: 600px;
        width: 1000px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-5_zps6jmjifdh.png");
    }
    #text{
        z-index: 100;
        position: absolute;
        color: white;
        font-size: 18px;
        left: 25%;
        right: 25%;
        top: 20%;
        bottom: 80%;
        margin-left: auto;
        margin-right: auto;
    }
</style>