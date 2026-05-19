@extends('layout')

@section('title')
All Users
@endsection

@section('content')

<a href="{{ route('user.create') }}" class="btn btn-success mb-3">Add User</a>

<table class="table table-bordered">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Salary</th>
    <th>Date of Birth</th>
    <th>Actions</th>
</tr>

@foreach($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->salary }}</td>
    <td>{{ $user->dob }}</td>

    <td>
        <a href="{{ route('user.show',$user->id) }}" class="btn btn-primary btn-sm">View</a>
        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('user.destroy',$user->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>

{{ $users->links() }}

@endsection