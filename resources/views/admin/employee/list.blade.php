@extends('admin.master')
@section('action','Employees List')
@section('content')
    <table class="table table-striped table-bordered table-hover dt-responsive" id="dataTable" cellspacing="0" width="100%">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Cell Phone</th>
            <th>Email</th>
            <th>Department</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 1?>
        @foreach($data as $item)
        <tr class="odd gradeX" align="center">
            <td><?php echo $stt ++?></td>
            <td><img src="{!! asset('resources/uploads/'.$item['image']) !!}" height="50px" width="50px" /></td>
            <td>{!! $item['name'] !!}</td>
            <td>{!! $item['job_title'] !!}</td>
            <td>{!! $item['cell_phone'] !!}</td>
            <td>{!! $item['email'] !!}</td>
            <td>
                <?php $depart = DB::table('departments')->where('id',$item['depart_id'])->first();?>
                @if($depart == null)
                    {!! 'Empty' !!}
                @else
                    {!! $depart->name  !!}
                @endif
            </td>
            <td class="center"><button type="submit" class="btn btn-danger"><a onclick="return confirmDelete('Do you want delete this employee?')" href="{!! URL::route('admin.employee.getDelete',$item['id']) !!}"> Delete</a></button></td>
            <td class="center"><button type="submit" class="btn btn-warning"><a href="{!! URL::route('admin.employee.getEdit',$item['id']) !!}">Edit</a></button></td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection