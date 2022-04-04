@extends('layout')

@section('content')
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <h6>Имя: </h6>
                    <span>{{ $author->first_name }}</span>
                </div>
                <div class="d-flex flex-column align-items-center mt-2">
                    <h6>Фамилия:</h6>
                    <span>{{ $author->last_name }}</span>
                </div>
                @if($author->patronymic)
                    <div class="d-flex flex-column align-items-center mt-2">
                        <h6>Отчество:</h6>
                        <span>{{ $author->patronymic }}</span>
                    </div>
                @endif
            </div>
        </div>
        <ul class="list-group">
            @if(count($author->books))
                @foreach($author->books as $book)
                    <li class="list-group-item text-center">{{ $book->title . ', ' . $book->edition }}</li>
                @endforeach
            @else
                <li class="list-group-item text-center">Здесь пока пусто</li>
            @endif
        </ul>
    </div>
@stop
