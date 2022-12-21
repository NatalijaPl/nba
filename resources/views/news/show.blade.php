<h3>Title: {{$news->title}}</h3>

<p>Content: {{$news->content}}</p>

<p>User name: {{$news->user->name}}</p>

<p>User id: {{$news->user->id}}</p>

<h3>Teams:</h3>
<ul>
    @foreach ($news->teams as $team)
        <li>{{$team->name}}</li>
    @endforeach
</ul>

<a href="/news">Vrati se na stranicu vesti</a>
