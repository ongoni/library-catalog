@extends('layout')

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <h6>Название: </h6>
                    <span>{{ $book->title }}</span>
                </div>
                <div class="d-flex flex-column align-items-center mt-2">
                    <h6>Издание: </h6>
                    <span>{{ $book->edition }}</span>
                </div>
            </div>
        </div>
    </div>
@stop
