@extends('layout')

@section(tittle')
   Update User data
@endsection

@section('content')
<form action="" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">User name</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label for="useremail" class="form-label">User Email</label>
        <input type="email" class="form-control" name="useremail">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">User Age</label>
        <input type="number" class="form-control" name="userage">
    </div>

    <div class="mb-3">
        <label for="usercity" class="form-label">User City</label>
        <input type="text" class="form-control" name="usercity">
    </div>

    <div class="mb-3">
        <input type="submit" value="Save" class="btn btn-success">
    </div>

</form>
@endsection
