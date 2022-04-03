 @extends('layout')

 @section('content')
<div class="row col-sm-4">
    <div class="btn-group btn-group-lg">
        <a href="{{url('/authors')}}" class="btn btn-outline-dark col-sm-1">Авторы</a>
        <a href="{{url('/books')}}" class="btn btn-outline-dark col-sm-1">Книги</a>
    </div>
</div>
 @stop
