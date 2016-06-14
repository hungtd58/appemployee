@extends('admin.master')
@section('action','Add Employee')
@section('content')
    <div class="col-md-8 col-md-offset-2" style="padding-bottom:120px">
        <form action="{!! route('admin.employee.getAdd') !!}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="txtName" value="{!! old('txtName') !!}" placeholder="Please Enter Username" />
                <?php error($errors,'txtName')?>
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fImage" value="{!! old('fImage') !!}" class="custom-file-input">
                <?php error($errors,'fImage')?>
            </div>
            <div class="form-group">
                <label>Job Title</label>
                <input class="form-control" name="txtJobTitle" value="{!! old('txtJobTitle') !!}" placeholder="Please Enter Job Title" />
                <?php error($errors,'txtJobTitle')?>
            </div>
            <div class="form-group">
                <label>Cell Phone</label>
                <input class="form-control" name="txtCellPhone" value='{!! old('txtCellPhone') !!}' placeholder="Please Enter Cell Phone" />
                <?php error($errors,'txtCellPhone')?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="txtEmail" value="{!! old('txtEmail') !!}" placeholder="Please Enter Email" />
                <?php error($errors,'txtEmail')?>
            </div>
            <div class="form-group">
                <label>Department</label>
                <select class="form-control" name="txtDepartment">
                    <option value="">Please Choose Department</option>
                    @foreach($depart as $item)
                        <option value="{!! $item['id'] !!}" {!! $item['id'] == old('txtDepartment') ? 'selected' : '' !!}>{!! $item['name'] !!}</option>
                    @endforeach
                </select>
                <?php error($errors,'txtDepartment')?>
            </div>
            <button type="submit" class="btn btn-primary">Product Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
            </form>
    </div>
@endsection
@endsection