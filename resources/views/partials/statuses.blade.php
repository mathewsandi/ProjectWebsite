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
    .media{
        border: 1px solid #e3e3e3;
        background: transparent;
        padding: 1em;
        margin-bottom: 2em;
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