@extends('admin.master')
@section('action','Add User')
@section('content')
    <div class="col-md-8 col-md-offset-2" style="padding-bottom:120px">
        <form action="{!! route('admin.user.getAdd') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()  !!}"/>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="txtUser" placeholder="Please Enter Username" value="{!! old('txtUser') !!}"/>
                <?php error($errors,'txtUser')?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password"/>
                <?php error($errors,'txtPass')?>
            </div>
            <div class="form-group">
                <label>RePassword</label>
                <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword"/>
                <?php error($errors,'txtRePass')?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{!! old('txtEmail') !!}"/>
                <?php error($errors,'txtEmail')?>
            </div>
            <button type="submit" class="btn btn-primary">User Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
            </form>
    </div>
@endsection
@endsection