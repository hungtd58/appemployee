@extends('admin.master')
@section('action','Edit Department')
@section('content')
    <div class="col-lg-7 panel-body" style="padding-bottom:120px">
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Department Name</label>
                <input class="form-control" name="txtName" placeholder="Please Enter Department Name" value="{!! old('txtName',isset($data) ? $data['name'] : null) !!}"/>
                <?php error($errors,'txtName')?>
            </div>
            <div class="form-group">
                <label>Office Phone</label>
                <input class="form-control" name="txtPhone" placeholder="Please Enter Office Phone" value="{!! old('txtPhone',isset($data) ? $data['office_phone'] : null) !!}"/>
                <?php error($errors,'txtPhone')?>
            </div>
            <div class="form-group">
                <label>Manager</label>
                <select class="form-control" name="txtManager">
                    <option value="">Please Choose Manager</option>
                    @foreach($emp as $item)
                        <option value="{!! $item['id'] !!}" {!! $item['id'] == old('txtManager') ? 'selected' : '' !!}>{!! $item['name'] !!}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>
@endsection
@endsection