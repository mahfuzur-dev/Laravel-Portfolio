@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Counter</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>View Counter List</h3>
            </div>
            @if (session('delete'))
                <div class="alert alert-danger">{{session('delete')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL No</th>
                        <th>Counter Icon</th>
                        <th>Counter Number</th>
                        <th>Counter Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($all_counters as $key=>$counter)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$counter->counter_icon}}</td>
                            <td>{{$counter->counter_number}}</td>
                            <td>{{$counter->counter_title}}</td>
                            <td>
                                <a href="{{route('delete.counter',$counter->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection