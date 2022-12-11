<div class="blog-post">
    <h2 class="blog-post-title">{{ $team->name }}</h2>
    <p class="blog-post-meta"><strong>Email: </strong> {{ $team->email }} </p>
    <p class="blog-post-meta"><strong>Address:</strong> {{ $team->adress }}</p>
    <p class="blog-post-meta"><strong>City:</strong> {{ $team->city }}</p>
    <p class="blog-post-meta"><strong>{{ $team->name }} players:</strong></p>
    <ol class="unstyled">
        @foreach ($team->players as $player)
            <li>
                <a href="{{ route('single-player', ['id' => $player->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a>
            </li>
        @endforeach
    </ol>
  </div>
