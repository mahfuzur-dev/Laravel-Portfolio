@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Banner</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3>Add Banner</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('insert.banner')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Banner Name</label>
                            <input type="text" name="banner_name" class="form-control">
                            @error('banner_name')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Banner Image</label>
                            <input type="file" name="banner_img" class="form-control mt-2">
                            @error('banner_img')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" class="btn btn-primary">Add Banner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection