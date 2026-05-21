@props([
    'action' =>'',
    'method' =>'POST'
]);

<form action="{{$action}}" method="{{$method}}">
@csrf
@method('PUT')
    {{ $slot }}
</form>