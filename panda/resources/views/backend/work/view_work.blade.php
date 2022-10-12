@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Work</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>View Experience List</h3>
            </div>
            @if (session('delete'))
                <div class="alert alert-danger">{{session('delete')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL No</th>
                        <th>Experience Title</th>
                        <th>Experience Percentage</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($work_info as $key=>$work)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$work->work_title}}</td>
                            <td>{{$work->work_percentage}}</td>
                            <td>
                                <a href="{{route('edit.work',$work->id)}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('delete.work',$work->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection