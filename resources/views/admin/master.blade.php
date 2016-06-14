<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quan li nhan vien">
    <title>Employee Directory</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/dist/css/style.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#side-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('home')  }}"><i class="fa fa-home fa-fw"></i></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-nav" id="side-menu">
            <li>
                <a href="#" class="title dropdown-toggle" data-toggle="dropdown"><i class="fa fa fa-bar-chart fa-fw"></i> Departments<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{!! url('admin/department/list') !!}"><i class="fa fa fa-list fa-fw"></i> List Department</a>
                    </li>
                    <li>
                        <a href="{!! url('admin/department/add') !!}"><i class="fa fa fa-plus fa-fw"></i> Add Department</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#" class="title dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cube fa-fw"></i> Employees<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{!! url('admin/employee/list') !!}"><i class="fa fa fa-list fa-fw"></i> List Employee</a>
                    </li>
                    <li>
                        <a href="{!! url('admin/employee/add') !!}"><i class="fa fa fa-plus fa-fw"></i> Add Employee</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#" class="title dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users fa-fw"></i> User<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{!! url('admin/user/list') !!}"><i class="fa fa fa-list fa-fw"></i> List User</a>
                    </li>
                    <li>
                        <a href="{!! url('admin/user/add') !!}"><i class="fa fa fa-plus fa-fw"></i> Add User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li><a href="#"><i class="fa fa-user fa-fw"></i>{!! Auth::user()->username !!}</a>
            </li>
            <li class="divider"></li>
            <li><a href="{!! url('auth/logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>@yield('action')</h1>
                <!-- /.col-lg-12 -->
                @yield('content')
                </div>
            </div>
            <div class="col-md-12">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {!! Session::get('flash_message') !!}
                    </div>
                @endif
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('public/admin/dist/js/script.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{ url('public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/admin/bower_components/datatables-responsive/js/dataTables.responsive.js') }}"></script>
<script src="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>

</html>
