<article class="media">
    <div class="pull-left">
        @include('partials.gravatar', ['user' => $status->user])
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            {{ $status->user->username }}
        </h4>
        <p class="lastposted">{{ $status->created_at->diffForHumans() }}</p>
        <p class="status-body">{{ $status->body }}</p>
    </div>

</article>

<style>
    .media {
        background: transparent;
        padding: 1em;
        margin-bottom: 1em;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2lll_zpslz4u6fac.png");
        background-color: inherit;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow: 0 10px 6px -6px #000000;
        box-shadow: 0 10px 6px -6px #000000;
    }
    .status-body{
        color: whitesmoke;
    }
    .media-heading{
        color: #0077fb;
    }
    .lastposted{
        color: #0077fb;
    }
</style>