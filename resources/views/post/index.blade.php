<h1>Posts Today</h1>

<a href="/posts/create">Write a post</a>

@forelse($posts as $post)
<div>
   <a href="/posts/{{$post->id}}"><h1>{{$post->title}}</h1></a>
    <p>{{$post->text}}</p>
</div>
@empty

<p>No posts today</p>

@endforelse
