@extends('layouts.app')

@section('title', 'Movies')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-4">

                <!-- card -->
                <div class="card mb-4" data-bs-toggle="modal" data-bs-target="#movieModal{{ $loop->index }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="fw-bold">Nationality:</span> {{ $movie['nationality'] }}</li>
                        <li class="list-group-item"><span class="fw-bold">Release Date:</span> {{ $movie['date'] }}</li>
                        <li class="list-group-item"><span class="fw-bold">Vote:</span> {{ $movie['vote'] }}</li>
                    </ul>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="movieModal{{ $loop->index }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $movie['title'] }}</h1>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="fw-bold">Nationality:</span> {{ $movie['nationality'] }}</li>
                                <li class="list-group-item"><span class="fw-bold">Release Date:</span> {{ $movie['date'] }}</li>
                                <li class="list-group-item"><span class="fw-bold">Vote:</span> {{ $movie['vote'] }}</li>
                            </ul>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection