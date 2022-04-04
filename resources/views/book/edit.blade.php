@extends('layout')

@section('content')
    <form method="POST" action="{{ route('book.update', $book->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="formGroupTitle"></label>
            <input value="{{ $book->title }}" type="text" class="form-control" id="formGroupTitle" name="title" placeholder="Название">
        </div>
        <div class="form-group">
            <label for="formGroupEdition"></label>
            <input value="{{ $book->edition }}" type="text" class="form-control" id="formGroupEdition" name="edition" placeholder="Издание">
        </div>
        <div class="form-group">
            <label for="formGroupAuthorSelect">
                <select id="formGroupAuthorSelect" class="form-control mt-4" name="author_id">
                    @foreach($authors as $author)
                        @if($book->author->id == $author->id)
                            <option value="{{ $author->id }}" selected>{{ $author->full_name }}</option>
                            @continue
                        @endif
                            <option value="{{ $author->id }}">{{ $author->full_name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <button type="submit" class="col-12 mt-4 btn btn-outline-dark">Изменить</button>
    </form>
@stop
