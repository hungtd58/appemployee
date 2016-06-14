@extends('admin.master')
@section('action','Employees List In Department')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTable">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Name</th>
            <th>Image</th>
            <th>Job title</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 1; ?>
        @foreach($data as $item )
            <tr class="odd gradeX" align="center">
                <td>{!! $stt ++!!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['job_title'] !!}</td>
                <td>{!! $item['email'] !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@endsection