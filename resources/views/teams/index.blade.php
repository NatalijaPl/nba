@foreach ($teams as $team)

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ route('single-team', ['id' => $team->id]) }}">{{ $team->name }}</a></h2>
    </div>

@endforeach
