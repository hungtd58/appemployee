@extends('admin.master')
@section('action','Edit User')
@section('content')
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token()  !!}"/>
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value="{!! old('txtUser',isset($data) ? $data['username'] : null) !!}" disabled />
            <?php error($errors,'txtUser')?>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
            <?php error($errors,'txtPass')?>
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" value="" placeholder="Please Enter RePassword" />
            <?php error($errors,'txtRePass')?>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" value="{!! old('txtEmail',isset($data) ? $data['email'] : null) !!}" placeholder="Please Enter Email" disabled />
            <?php error($errors,'txtEmail')?>
        </div>
        <button type="submit" class="btn btn-primary">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
@endsection
@endsection