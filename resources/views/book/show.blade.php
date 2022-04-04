@extends('layout')

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <h6>Название: </h6>
                    <p>{{ $book->title }}</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h6>Издание: </h6>
                    <p>{{ $book->edition }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
