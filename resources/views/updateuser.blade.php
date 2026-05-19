@extends('layout')

@section('title')
Update User
@endsection

@section('content')

<form action="{{ route('user.update',$user->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="username" value="{{ $user->username }}" class="form-control mb-2">

<input type="email" name="useremail" value="{{ $user->email }}" class="form-control mb-2">

<input type="number" name="usersalary" value="{{ $user->salary }}" class="form-control mb-2">

<input type="date" name="userdob" value="{{ $user->dob }}" class="form-control mb-2">

<input type="password" name="userpass" class="form-control mb-2" placeholder="Enter new password">

<button class="btn btn-primary">Update</button>

</form>

@endsection