@if (Auth::check())
    <nav class="navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Sezgi</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">News
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/articles">All News</a></li>
                            <li><a href="/articles/create">Create News Article</a></li>
                            <li><a href="/profilearticles">Edit or Delete News Article</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin"><span class="glyphicon glyphicon-lock"></span> Staff</a></li>
                    <li><a href="/profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
@else
    <nav class="navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Sezgi</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif

<style>
    .navbar-default {
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Nav-Bar_zpsqqzceplp.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navbar-default {
        background-color: #ff0000;
        border-color: #bdbdbd;
    }
    .navbar-default .navbar-brand {
        color: #676e70;
    }
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
        color: #808080;
    }
    .navbar-default .navbar-text {
        color: #676e70;
    }
    .navbar-default .navbar-nav > li > a {
        color: #676e70;
    }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
        color: #808080;
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        color: #808080;
        background-color: #bdbdbd;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        color: #808080;
        background-color: #bdbdbd;
    }
    .navbar-default .navbar-toggle {
        border-color: #bdbdbd;
    }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
        background-color: #bdbdbd;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #676e70;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #676e70;
    }
    .navbar-default .navbar-link {
        color: #676e70;
    }
    .navbar-default .navbar-link:hover {
        color: #808080;
    }
    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #676e70;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #808080;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #808080;
            background-color: #bdbdbd;
        }
    }
</style>
<?php
//This page is just a simple nav bar made with html. I use this page on the blade as the include so anywhere i
        //need to put the navbar i can just use include and reference  this page, it is a lot simpler than
        //writing the code again and again.
?>