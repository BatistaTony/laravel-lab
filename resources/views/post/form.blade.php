
<input type="text" name="title" value="{{ old('title') ?? $post->title }}" id="" autocomplete="off">
@error('title') <p>{{$message}}</p> @enderror
<br>
<br>
<textarea name="text" id="" cols="30" rows="10">{{ old('title') ?? $post->text }}</textarea>
@error('text') <p>{{$message}}</p> @enderror

<br>
<br>
@csrf
