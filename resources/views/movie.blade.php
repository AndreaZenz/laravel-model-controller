<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="card-container">
    @foreach($movies as $movie)
        <div class="card">
            <h1>{{$movie->title}}</h1>

            @if($movie->title != $movie->original_title)
            <p>Original title:{{$movie->original_title}}</p>
            @endif
            <p>Nationality: {{$movie->nationality}}</p>
            <p>Vote: {{$movie->vote}}</p>
        </div>
    @endforeach
    </div>
</body>
</html>
