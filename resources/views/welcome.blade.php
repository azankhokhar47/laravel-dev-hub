<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <x-alert type="danger">
        <x-slot name="tittle">
            heading goes here
        </x-slot>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    {{ $component->link("Just testing","https://www.linkedin.com/")}}
    </x-alert>

    <x-card/>

    <x-form action="/somepage">
        <input type="text" name="name" >
        <button type="submit">Save</button>
    </x-form>
</body>
</html>