<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Post</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div>

        <h1>Edite Post</h1>

        <form action="{{ route('posts.update' , $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title' , $post->title) }}">
            <label>body:</label>
            <textarea name="body">{{ old('body' , $post->body) }}</textarea>
            <button type="submit">Update</button>
        </form>

        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </div>


</body>

</html>