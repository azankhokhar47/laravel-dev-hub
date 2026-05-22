@props([
    'action' =>'',
    'method' =>'POST'
]);

<form action="{{$action}}" method="{{$method}}">
@csrf

@unless (in_array($method,['GET','POST']))
    @method($method)
@endunless

    {{ $slot }}
</form>