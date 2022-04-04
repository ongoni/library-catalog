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
        .btn-dark {
            border-color: #212529 !important;
        }
    </style>

    <title>Home</title>
</head>
<body>
<div class="position-absolute top-0 mt-3 ms-3">
    <a href="{{ url('/') }}" class="btn btn-dark btn-outline-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
    </a>
</div>
<div class="container">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        @yield('content')
    </div>
</div>
</body>
</html>
