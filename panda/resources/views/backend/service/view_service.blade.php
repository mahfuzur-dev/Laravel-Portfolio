@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Service</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>View Service List</h3>
            </div>
            @if (session('delete'))
                <div class="alert alert-danger">{{session('delete')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL No</th>
                        <th>Service Icon</th>
                        <th>Service Head</th>
                        <th>Service Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($all_service as $key=>$service)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><i class="{{$service->service_icon}}"></i></td>
                            <td>{{$service->service_head}}</td>
                            <td>{{$service->service_title}}</td>
                            <td style="width: 200px;">
                                <a href="{{route('edit.service',$service->id)}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('delete.service',$service->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection