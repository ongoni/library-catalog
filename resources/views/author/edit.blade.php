@extends('layout')

@section('content')
    <form method="POST" action="{{ route('author.update', $author->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="formGroupFirstName"></label>
            <input value="{{ $author->first_name }}" type="text" class="form-control" id="formGroupFirstName" name="first_name" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="formGroupLastName"></label>
            <input value="{{ $author->last_name }}" type="text" class="form-control" id="formGroupLastName" name="last_name" placeholder="Фамилия">
        </div>
        <div class="form-group">
            <label for="formGroupPatronymic"></label>
            <input value="{{ $author->patronymic ?: '' }}" type="text" class="form-control" id="formGroupPatronymic" name="patronymic" placeholder="Отчество">
        </div>
        <button type="submit" class="col-12 mt-4 btn btn-outline-dark">Изменить</button>
    </form>
@stop
