@extends('layout')

@section('title')
User Details
@endsection

@section('content')

<table class="table">

<tr>
    <th>Name</th>
    <td>{{ $user->username }}</td>
</tr>

<tr>
    <th>Email</th>
    <td>{{ $user->email }}</td>
</tr>

<tr>
    <th>Salary</th>
    <td>{{ $user->salary }}</td>
</tr>

<tr>
    <th>Date of Birth</th>
    <td>{{ $user->dob }}</td>
</tr>

</table>

<a href="{{ route('user.index') }}" class="btn btn-danger">Back</a>

@endsection