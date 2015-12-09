@extends('master')

@section('content')


    <div class="row">
        <div class="col-md-2 col-sm-2">
            <div class="column txt-color-white text-center">
                <h2><span class="glyphicon glyphicon-info-sign"></span></i> Information</h2>
            </div>
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
        background: #0000C2;
        color: whitesmoke;
        height: 100px;
        padding: 10px;
        -webkit-box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow: 0 10px 6px -6px #000000;
        box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow:    inset 0 0 10px #000000;
        -webkit-box-shadow: inset 0 0 10px #000000;
        box-shadow:         inset 0 0 10px #000000;
    }
</style>