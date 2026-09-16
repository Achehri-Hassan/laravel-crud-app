<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>All Posts</title>
    @vite('resources/css/style.css')
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>All Posts!</h1>

            <a class="create-btn" href="{{ route('posts.create') }}">
                Create New Post
            </a>
        </div>

        <div class="posts-grid">

            @foreach($posts as $post)

            <div class="post-card">

                <h2>{{ $post->title }}</h2>

                <p>{{ $post->body }}</p>

                
                <div class="post-actions">

                    <a class="edit-btn" href="{{ route('posts.edit', $post->id) }}">
                        Edit
                    </a>

                    <form class="delete-form"
                        action="{{ route('posts.destroy', $post->id) }}"
                        method="post">

                        @csrf
                        @method("DELETE")

                        <button
                            class="delete-btn"
                            type="submit"
                            onclick="return confirm('Are you sure you want to delete this post?')">
                            Delete
                        </button>

                    </form>

                </div>
                


            </div>

            @endforeach

        </div>

    </div>

</body>

</html>