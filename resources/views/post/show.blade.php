
<a href="/posts">Back</a>

<h1>{{$post->title}}</h1>

<br>

<p>{{$post->text}}</p>

<a href="/posts/{{$post->id}}/edit">Edite</a>

<form action="/posts/{{$post->id}}"  method="post">

@method("DELETE")

<button>Delete</button>

@csrf

</form>
