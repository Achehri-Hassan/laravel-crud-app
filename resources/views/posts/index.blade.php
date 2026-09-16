<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>All posts !</h1>
    <a href="{{route('posts.create')}}">Creat New Post</a>

    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    @endforeach
</body>

</html>