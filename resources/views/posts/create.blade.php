<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>


  <div>
       <h1>Creat Post !</h1>

    <form action="{{ route('posts.store') }}" method="post">
      
    @csrf 
     <label>title</label>
     <input type="text" name="title" value="{{ old('title') }}">

     <label>Body:</label>
     <textarea name="body" > {{ old('body') }}</textarea>

     <button type="submit">Save</button>
        
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