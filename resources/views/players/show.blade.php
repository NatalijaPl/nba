<div class="blog-post">
    <h2 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h2>
    <p class="blog-post-meta"><strong>Email: </strong> {{ $player->email }} </p>
    <strong>Team:</strong> <a href="{{ route('single-team', ['id' => $player->team->id]) }}">{{ $player->team->name }}</a></p>
</div>
