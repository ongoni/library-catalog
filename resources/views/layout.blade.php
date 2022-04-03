<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{--  I couldn't find any other way to change pagination colors so here it is  --}}
    <style>
        .page-item.active .page-link {
            color: #ffffff !important;
            background-color: #212529 !important;
            border-color: #212529 !important;
        }
        .page-link {
            color: #212529 !important;
        }
    </style>

    <title>Home</title>
</head>
<body>
<div class="container">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        @yield('content')
    </div>
</div>
</body>
</html>
