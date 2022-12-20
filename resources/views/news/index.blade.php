<h3>Vesti</h3>
@foreach ($news as $new)
    <dt><a href="{{route('single-news', ['id' => $new->id ])}}">{{$new->title}}</a></dt>
    <dd>
        user:
        {{$new->user->name}}
        <br>
        user_id:
        {{$new->user->id}}
    </dd>
    @endforeach
</dl>

{{ $news->onEachSide(10)->links() }}
