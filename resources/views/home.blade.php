@extends('layouts.main')

@section('title', 'HOME')

@section('main-content')
<h1>MOVIES</h1>

<section>
    <div class="row">
        @forelse($movies as $movie)
            <div>
              <h3>{{$movie->title}}</h3>
              <p>{{$movie->original_title}}</p>
              <p>{{$movie->date}}</p>
              <p>{{$movie->vote}}</p>
              <p>{{$movie->nationality}}</p>
              
            </div>
        @empty
        @endforelse
    </div>
</section>
