@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Banner</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Banner</h3>
            </div>
            <div class="card-body">
               <form action="{{route('update.banner')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="banner_id" value="{{ $update_info->id}}">
                    <label for="" class="form-label">Banner Name</label>
                    <input type="text" name="banner_name" value="{{ $update_info->banner_name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Banner Image</label>
                    <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="banner_img" class="form-control mt-2">
                    <img width="70" class="mt-4" id="blah" src="{{asset('uploads/banner')}}/{{$update_info->banner_img}}" alt="">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">Update Banner</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection