<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
<div class="container">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="row col-sm-4">
            <div class="btn-group btn-group-lg">
                <a href="{{url('/authors')}}" class="btn btn-outline-dark col-sm-1">Авторы</a>
                <a href="{{url('/books')}}" class="btn btn-outline-dark col-sm-1">Книги</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
