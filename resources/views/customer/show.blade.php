<h1>Customer details</h1>

<a href="/customers">back</a>

<h1>Name</h1>

<p>{{ $customer->name }}</p>

<br>
<h1>Email</h1>
<p>{{ $customer->email}}</p>

<a href="/customers/{{ $customer->id }}/edit">edit</a>

<form action="/customers/{{$customer->id}}" method="post">

    @method("DELETE")

@csrf

<button>Delete</button>

</form>
