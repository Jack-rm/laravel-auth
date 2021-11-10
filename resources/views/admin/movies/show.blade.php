@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-element">
        <h1 class="card-title mb-3"> {{ $movie->title }} </h1> <span></span>
        <hr>
        <div class="row card-body">
            <div class="col-12">
                <h3><b>Original title:</b> {{$movie->original_title}}</h3>
                <h5><b>Original language: </b>{{$movie->nationality}}</h5>
                <address>Released in <u>{{$movie->date}}</u> with a reviews average score of <b>{{$movie->vote}}</b>!</address>
            </div>
        </div>
        <hr>
        <div class="col-12">
            <a href="{{ route('admin.movies.index') }}" class="btn btn-toolbar float-right">Back to Movies</a>
        </div>
    </div>
</div>

@endsection
