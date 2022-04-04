@extends('layout')

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <h6>Имя: </h6>
                    <p>{{ $author->first_name }}</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h6>Фамилия:</h6>
                    <p>{{ $author->last_name }}</p>
                </div>
                @if($author->patronymic)
                    <div class="d-flex flex-column align-items-center">
                        <h6>Отчество:</h6>
                        <p>{{ $author->patronymic }}</p>
                    </div>
                @endif
            </div>
        </div>
        <ul class="list-group">
            @if(count($author->books))
                @foreach($author->books as $book)
                    <li class="list-group-item">{{ $book->title . ', ' . $book->edition }}</li>
                @endforeach
            @else
                <li class="list-group-item">Здесь пока пусто</li>
            @endif
        </ul>
    </div>
@stop
