<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="style.css">
<body>
    <article>

       <h1><a href="/">{{$post->title}}</a></h1>

       <p> By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in
        <a href="/categories/{{$post->category->slug}}">
            {{$post->category->name}}</a>
    </p>

       <p>{!! $post->body !!}</p>
    </article>

</body>
