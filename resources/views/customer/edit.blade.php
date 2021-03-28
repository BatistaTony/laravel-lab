<h1>Edit Costumer Detail</h1>

<form action="/customers/{{$customer->id}}" method="post">

@method("PUT")

    @include("customer.form")

<input type="submit" value="Save">

</form>
