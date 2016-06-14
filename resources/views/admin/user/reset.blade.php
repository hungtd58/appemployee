<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reset Password</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/dist/css/style.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Reset Password</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="{!! route('admin.user.postReset') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token()  !!}"/>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="txtPass" type="password" value="">
                                <?php error($errors,'txtPass')?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="New Password" name="txtNewPass" type="password" value="">
                                <?php error($errors,'txtNewPass')?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Repeat New Password" name="txtRePass" type="password" value="">
                                <?php error($errors,'txtRePass')?>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Reset</button>
                            <a href="{!! url('auth/logout') !!}">Return Login Page</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('public/admin/dist/js/script.js')}}"></script>

</body>

</html>
