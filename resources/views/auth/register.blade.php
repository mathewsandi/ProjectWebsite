@extends ('master')

@section('content')
    <div id="content">
        <h1>Register!</h1>
    </div>
    <hr/>

    <form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div>
            Username
            <input type="text" name="username" value="{{ old('username') }}">
        </div>

        <br>

        <div>
            Password
            <input type="password" name="password">
        </div>

        <br>

        <div>
            Confirm Password
            <input type="password" name="password_confirmation">
        </div>

        <br>

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
<br>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>

@endsection

<style>
    #content{
        text-align: center;
    }
    input{
        width:375px;
        display: block;
        border: 1px solid #999;
        height: 25px;
        -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
    }
    form    {
        background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
        background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
        margin:auto;
        position:relative;
        width:550px;
        height:350px;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: red;
        text-decoration: none;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        padding:10px;
        border: 1px solid #999;
        border: inset 1px solid #333;
        -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
    }
    input.button {
        width:100px;
        position:absolute;
        right:20px;
        bottom:20px;
        background:#09C;
        color:#fff;
        font-family: Tahoma, Geneva, sans-serif;
        height:30px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
        border: 1p solid #999;
        text-align: center;
    }
    input.button:hover {
        background:#fff;
        color:#09C;
    }
    #content{
        color:#fff;
    }
</style>