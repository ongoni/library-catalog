@extends('layout')

@section('content')
    @if(count($books))
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Издание</th>
                    <th scope="col">Автор</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $key => $book)
                    <tr>
                        <th class="text-center"scope="row">{{ $books->firstItem() + $key }}</th>
                        <td class="text-center">{{ $book->title }}</td>
                        <td class="text-center">{{ $book->edition }}</td>
                        <td class="text-center">{{ $book->author_short_name}}</td>
                        <td>
                            <div class="row text-center justify-content-center">
                                <form method="GET" action="{{ route('books.edit', $book->id) }}" class="col-sm-4">
                                    <button class="btn btn-outline-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('books.destroy', $book->id) }}" class="col-sm-4">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-outline-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-10 d-flex flex-column justify-content-center">
                    {{ $books->links() }}
                </div>
                <div class="col-sm-2 d-flex flex-column align-items-center">
                    <button class="btn btn-outline-dark">Добавить</button>
                </div>
            </div>
        </div>
    @else
        <h1>Данные отсутсвуют</h1>
    @endif
@stop
