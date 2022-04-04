 @extends('layout')

 @section('content')
<div class="row col-sm-4">
    <div class="btn-group btn-group-lg">
        <a href="{{url('/author')}}" class="btn btn-outline-dark col-sm-1">Авторы</a>
        <a href="{{url('/book')}}" class="btn btn-outline-dark col-sm-1">Книги</a>
    </div>
</div>
 @stop
