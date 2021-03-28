@extends('app')

@section("title", "Services")

@section('content')

    <h1>OUR services</h1>

    <form action="/service" method="post">

    <input type="text" name="name" id="service">

     @csrf

    <input type="submit" value="add service">
<br>
 @error('service') {{ $message }} @enderror


    </form>

    <ul>

            @forelse($services as $service)
                <li>{{ $service->name }}</li>
                @empty
                <h5>No services available</h5>
            @endforelse

    </ul>

@endsection
