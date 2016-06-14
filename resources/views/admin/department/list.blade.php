@extends('admin.master')
@section('action','Department List')
@section('content')
    <table class="table table-striped table-bordered" id="dataTable">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Name</th>
            <th>Office Phone</th>
            <th>Manager</th>
            <th>View Employees</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $item )
        <?php $stt++ ;?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item['name'] !!}</td>
            <td>{!! $item['office_phone'] !!}</td>
            <td>
                <?php $depart = DB::table('employees')->where('id',$item['em_id'])->first();?>
                @if($depart == null)
                    {!! 'Empty' !!}
                @else
                       {!! $depart->name  !!}
                @endif
            </td>
            <td class="center"><button type="submit" class="btn btn-info"><a href="{!! URL::route('admin.department.getView',$item['id']) !!}"> View</a></button></td>
            <td class="center"><button type="submit" class="btn btn-danger"><a onclick="return confirmDelete('Do you want delete this department?')" href="{!! URL::route('admin.department.getDelete',$item['id']) !!}"> Delete</a></button></td>
            <td class="center"><button type="submit" class="btn btn-warning"><a href="{!! URL::route('admin.department.getEdit',$item['id']) !!}">Edit</a></button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@endsection