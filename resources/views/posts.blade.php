<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            text-align: right;
        }
    </style>

</head>

<body>
    <main>
        <h1>مقالات</h1>

        @foreach($posts as $post)
        <article>
            <h3>
                <a href="{{ url('posts/' .$post->slug) }}">{{ $post->title }}</a>
                <h4>{{$post->category->name}}</h4>
            </h3>
            <p>{{ $post->body }}</p>
        </article>
        @endforeach
    </main>
</body>

</html>
