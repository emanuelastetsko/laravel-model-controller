<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <h1 class="text-center m-4 pb-2">Movies</h1>
                <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2>{{ $movie->title }}</h2>
                                    <span>Nazionaliy: {{ $movie->nationality }}</span>
                                    <br>
                                    <span>Date: {{ $movie->date }}</span>
                                    <br>
                                    <span>Vote: {{ $movie->vote }}/10</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
