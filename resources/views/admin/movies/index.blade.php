@extends('layouts.app')

@section('content')
<div class="container">
        <table class="table p-5">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Original Title</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Date</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($movies as $movie)

                    <tr>
                        <td> <a href="{{ route('admin.movies.show', $movie->id) }} "> {{$movie->title}} </a></th>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }} </td>
                        <td>{{ $movie->getFormattedDate('date') }}</td>
                        <td>{{ $movie->vote }}</td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="text-center">No movies available</td>
                    </tr>

                @endforelse
                
            </tbody>
        </table>

    </div>
@endsection
