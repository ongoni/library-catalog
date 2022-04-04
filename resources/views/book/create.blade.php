@extends('layout')

@section('content')
    <form method="POST" action="{{ route('book.store') }}">
        @csrf
        @if(count($authors))
            <div class="form-group">
                <label for="formGroupTitle"></label>
                <input type="text" class="form-control" id="formGroupTitle" name="title" placeholder="Название">
            </div>
            <div class="form-group">
                <label for="formGroupEdition"></label>
                <input type="text" class="form-control" id="formGroupEdition" name="edition" placeholder="Издание">
            </div>
            <div class="form-group">
                <label for="formGroupAuthorSelect">
                    <select id="formGroupAuthorSelect" class="form-control mt-4" name="author_id">
                        <option selected disabled>Выберите автора...</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->full_name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <button type="submit" class="col-12 mt-4 btn btn-outline-dark">Добавить</button>
        @else
            <div class="form-group">
                <label for="formGroupTitle"></label>
                <input type="text" class="form-control" id="formGroupTitle" name="title" placeholder="Название" disabled>
            </div>
            <div class="form-group">
                <label for="formGroupEdition"></label>
                <input type="text" class="form-control" id="formGroupEdition" name="edition" placeholder="Издание" disabled>
            </div>
            <div class="form-group">
                <select class="form-control mt-4" name="author_id" disabled>
                    <option>Нет авторов</option>
                </select>
            </div>
            <button type="submit" class="col-12 mt-4 btn btn-outline-dark" disabled>Добавить</button>
        @endif
    </form>
@stop
