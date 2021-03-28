
 <h1>Customers</h1>

<a href="/customers?active=1">actives</a>
<a href="/customers?active=0">inactives</a>

<a href="/customers/create">Add new customer</a>

 @forelse($customers as $customer)

<a href="/customers/{{$customer->id}}"> <h1>{{ $customer->name }}</h1></a>
    <p>{{ $customer->email }}</p>

    @empty
    <p>No customers available</p>
 @endforelse
