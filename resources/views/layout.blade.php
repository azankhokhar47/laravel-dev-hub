<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2 class="text-center mb-3">Eloquent CRUD</h2>

    <div class="bg-warning p-2">
        <h4>@yield('title')</h4>
    </div>

    @if(session('status'))
        <div class="alert alert-success mt-2">
            {{ session('status') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>