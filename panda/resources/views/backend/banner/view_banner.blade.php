@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Banner</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>View Banner List</h3>
            </div>
            @if (session('delete'))
                <div class="alert alert-danger">{{session('delete')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL No</th>
                        <th>Banner Name</th>
                        <th>Banner Image</th>
                        <th>Banner Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banner_info as $key=>$banner)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$banner->banner_name}}</td>
                            <td><img width="50" src="{{asset('uploads/banner')}}/{{$banner->banner_img}}" alt=""></td>
                            <td><a href="{{route('banner.status',$banner->id)}}" class="btn {{$banner->banner_status == 1?'btn-success':' btn-secondary'}}">{{$banner->banner_status == 1?'Active':'De-active'}}</a></td>
                            <td>
                                <a href="{{route('edit.banner',$banner->id)}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('delete.banner',$banner->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection