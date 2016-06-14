@extends('admin.master')
@section('action','User List')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTable">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Username</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 1?>
        @foreach($data as $item)
        <tr class="odd gradeX" align="center">
            <td>{!! $stt ++ !!}</td>
            <td>{!! $item['username'] !!}</td>
            <td>{!! $item['email'] !!}</td>
            <td class="center"><button type="submit" class="btn btn-danger"><a onclick="return confirmDelete('Do you want delete this user?')" href="{!! URL::route('admin.user.getDelete',$item['id']) !!}"> Delete</a></button></td>
            <td class="center"><button type="submit" class="btn btn-warning"><a href="{!! URL::route('admin.user.getEdit',$item['id']) !!}">Edit</a></button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@endsection

