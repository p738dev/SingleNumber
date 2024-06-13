<!DOCTYPE html>
<html>
<head>
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Unique Numbers</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-secondary pb-3">Pojedyncze liczby występujące w tabeli to:</h1>
        <ul class="">
            @foreach ($singleNumbers as $number)
                <li class="fs-4 fw-bold ">{{ $number }}</li>
            @endforeach
        </ul>
    <div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
