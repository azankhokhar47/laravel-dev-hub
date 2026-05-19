@extends('layout')

@section('title')
Add User
@endsection

@section('content')

<form action="{{ route('user.store') }}" method="POST">
@csrf

<input type="text" name="username" class="form-control mb-2" placeholder="Name">

<input type="email" name="useremail" class="form-control mb-2" placeholder="Email">

<input type="number" name="usersalary" class="form-control mb-2" placeholder="Salary">

<input type="date" name="userdob" class="form-control mb-2" placeholder="Date of Birth">

<input type="password" name="userpass" class="form-control mb-2" placeholder="Password">

<button class="btn btn-success">Save</button>

</form>

@endsection