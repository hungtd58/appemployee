@extends('admin.master')
@section('action','Edit Employee')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="txtName" value="{!! old('txtName',isset($data) ? $data['name'] : null) !!}" placeholder="Please Enter Username" />
                <?php error($errors,'txtName')?>
            </div>
            <div class="form-group">
                <label>Image current</label>
                <img src="{!! asset('resources/uploads/'.$data['image']) !!}" height="50px" width="50px" />
                <input type="hidden" name="img_current" value="{!! $data['image'] !!}" class="custom-file-input"/>
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fImage">
                <?php error($errors,'fImage')?>
            </div>
            <div class="form-group">
                <label>Job Title</label>
                <input class="form-control" name="txtJobTitle" value="{!! old('txtJobTitle',isset($data) ? $data['job_title'] : null) !!}" placeholder="Please Enter Job Title" />
                <?php error($errors,'txtJobTitle')?>
            </div>
            <div class="form-group">
                <label>Cell Phone</label>
                <input class="form-control" name="txtCellPhone" value='{!! old('txtCellPhone',isset($data) ? $data['cell_phone'] : null) !!}' placeholder="Please Enter Cell Phone" />
                <?php error($errors,'txtCellPhone')?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="txtEmail" value="{!! old('txtEmail',isset($data) ? $data['email'] : null) !!}" placeholder="Please Enter Email" />
                <?php error($errors,'txtEmail')?>
            </div>
            <div class="form-group">
                <label>Department</label>
                <select class="form-control" name="txtDepartment">
                    <option value="">Please Choose Department</option>
                    @foreach($depart as $item)
                        <option value="{!! $item['id'] !!}" {!! $item['id'] == $data['depart_id'] ? 'selected' : '' !!}>{!! $item['name'] !!}</option>
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