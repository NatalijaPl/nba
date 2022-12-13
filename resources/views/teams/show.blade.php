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
<form method="POST" action="/teams/{{ $team->id }}/comment">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="content"> <strong> leave a comment: </strong> </label>
        <br><br>
        <textarea type="text" class="form-control" id="content" name="content"></textarea>
        <br><br>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> <strong> submit comment </strong> </button>
    </div>
</form>

