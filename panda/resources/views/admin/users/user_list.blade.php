@extends('layouts.dashboard')
@section('content')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h3>Users List [{{$total_user}}]</h3></div>
          @if (session('delete'))
          <div class="alert alert-success mt-3">{{session('delete')}}</div>
          @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Sl NO</th>
                        <th>User Name</th>
                        <th>User Photo</th>
                        <th>User Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $key=>$user)
                        
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td><img style="width: 30px" src="{{ Avatar::create($user->name)->toBase64() }}" alt=""></td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{ route('user.delete', $user->id )}}"class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection