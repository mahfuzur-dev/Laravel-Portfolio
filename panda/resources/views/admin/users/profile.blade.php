@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Profile Name Change</h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success mt-3">{{ session('success')}}</div>            
            @endif
                <div class="card-body">
                    <form action="{{route('profile.name.update')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name}}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Name</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Password Change</h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success mt-3">{{ session('success')}}</div>            
            @endif
            @if (session('successed'))
                <div class="alert alert-success mt-3">{{ session('successed')}}</div>            
            @endif
            @if (session('wrong'))
                <div class="alert alert-danger mt-3">{{ session('wrong')}}</div>            
            @endif
                <div class="card-body">
                    <form action="{{route('profile.password.update')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Old Password</label>
                            <input type="password" class="form-control" name="old_password">
                            @error('old_password')
                                <strong class="text-danger">{{ $message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="password">
                            @error('password')
                            <strong class="text-danger">{{ $message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            @error('password_confirmation')
                            <strong class="text-danger">{{ $message}}</strong>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Profile Photo Change</h3>
            </div>
            @if (session('success_p'))
                <div class="alert alert-success mt-3">{{ session('success_p')}}</div>            
            @endif
         
                <div class="card-body">
                    <form action="{{route('profile.photo')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Profile Photo</label>
                            <input type="file" class="form-control" name="profile_photo">
                            @error('old_password')
                                <strong class="text-danger">{{ $message}}</strong>
                            @enderror
                        </div>
                       
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection