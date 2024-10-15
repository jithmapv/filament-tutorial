<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    @if($posts->count())
        <ul>
            @foreach($posts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No posts available.</p>
    @endif
</body>
</html>
