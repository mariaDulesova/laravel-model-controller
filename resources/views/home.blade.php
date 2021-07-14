<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie DataBase</title>
{{-- 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <section class="wrap">
            <h1> {{ $title }} </h1>
            <div class="card-container">
                @foreach ($movies as $movie)
                    <div class="card">
                        <h4>{{ $movie->title}}</h4>
                        <h6>{{ $movie->nationality}}</h6>
                        <h6>{{ $movie->date}}</h6>
                        <h6>{{ $movie->vote}}</h6>
                    </div> 
                @endforeach
            </div> 
        </section>
    </body>
</html>
