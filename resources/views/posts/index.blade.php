<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog</title>
</head>
<body>
    <header>
        <h1>My blog</h1>
    </header>
    <ul>
        @foreach ($posts as $post)
        <li><a href="/posts/{{ $post-> id }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>