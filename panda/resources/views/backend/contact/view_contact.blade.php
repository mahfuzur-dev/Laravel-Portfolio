@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Contact List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Sl No</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Subject</th>
                        <th>Customer Message</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($all_customer as $key=>$customer)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->subject}}</td>
                            <td>{{$customer->message}}</td>
                            <td><a href="{{route('delete.customer',$customer->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection