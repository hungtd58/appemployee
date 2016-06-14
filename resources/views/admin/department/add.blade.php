@extends('admin.master')
@section('action','Add Department')
@section('content')
    <div class="col-md-8 col-md-offset-2 panel-body" style="padding-bottom:120px">
    <form action="{!! route('admin.department.getAdd') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
        <div class="form-group">
            <label>Department Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Department Name" value="{!! old('txtName') !!}"/>
            <?php error($errors,'txtName')?>
        </div>
        <div class="form-group">
            <label>Office Phone</label>
            <input class="form-control" name="txtPhone" placeholder="Please Enter Office Phone" value="{!! old('txtPhone') !!}"/>
            <?php error($errors,'txtPhone')?>
        </div>
        <div class="form-group">
            <label>Manager</label>
            <select class="form-control" name="txtManager">
                <option value="">Please Choose Manager</option>
                @foreach($data as $item)
                    <option value="{!! $item['id'] !!}" {!! $item['id'] == old('txtManager') ? 'selected' : '' !!}>{!! $item['name'] !!}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection
@endsection