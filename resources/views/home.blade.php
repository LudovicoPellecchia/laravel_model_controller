@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row row-cols-4 gy-4">
            @foreach ($movies as $movie)
                <div class="col">

                    <div class="card">

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">{{ $movie->title }}</li>
                            <li class="list-group-item">{{ $movie->original_title }}</li>
                            <li class="list-group-item">{{ $movie->nationality }}</li>
                            <li class="list-group-item">{{ $movie->date }}</li>
                            <li class="list-group-item">{{ $movie->vote }}</li>

                        </ul>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
