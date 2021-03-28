<a href="/posts">Back</a>


<h1>Edite a simple post</h1>

<form action="/posts/{{$post->id}}" method="post">

@method("PATCH")

@include('post/form')


<button>Save</button>

</form>
