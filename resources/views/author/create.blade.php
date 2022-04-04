@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('author.store', $author->id) }}">
                @csrf
                <div class="form-group">
                    <label for="formGroupFirstName"></label>
                    <input type="text" class="form-control" id="formGroupFirstName" name="first_name" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="formGroupLastName"></label>
                    <input type="text" class="form-control" id="formGroupLastName" name="last_name" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="formGroupPatronymic"></label>
                    <input type="text" class="form-control" id="formGroupPatronymic" name="patronymic" placeholder="Отчество">
                </div>
                <button type="submit" class="col-12 mt-4 btn btn-outline-dark">Добавить</button>
            </form>
        </div>
    </div>
@stop
