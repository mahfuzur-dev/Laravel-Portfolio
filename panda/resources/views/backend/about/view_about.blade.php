@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View About</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>View About List</h3>
            </div>
            @if (session('delete'))
                <div class="alert alert-danger">{{session('delete')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL No</th>
                        <th>About Head</th>
                        <th>About Description</th>
                        <th>About Image</th>
                        <th>About Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($about_info as $key=>$about)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$about->about_heading}}</td>
                            <td>{{$about->about_desp}}</td>
                            <td><img width="50" src="{{asset('uploads/about')}}/{{$about->about_img}}" alt=""></td>
                            <td><a href="{{route('about.status',$about->id)}}" class="btn {{$about->about_status == 1?'btn-success':' btn-secondary'}}">{{$about->about_status == 1?'Active':'De-active'}}</a></td>
                            <td>
                                <a href="{{route('edit.about',$about->id)}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('delete.about',$about->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 