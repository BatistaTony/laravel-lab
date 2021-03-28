<label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old("name") ?? $customer->name}}">
    @error('name') {{ $message }} @enderror
    <br>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ old("email") ?? $customer->email}}">
    @error('email') {{ $message }} @enderror

    <br>

 
    @csrf
