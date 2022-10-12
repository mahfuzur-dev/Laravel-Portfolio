@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit About</h3>
            </div>
            <div class="card-body">
               <form action="{{route('update.about')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="about_id" value="{{ $update_info->id}}">
                    <label for="" class="form-label">About Heading</label>
                    <input type="text" name="about_heading" value="{{ $update_info->about_heading}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">About Description</label>
                    <input type="text" name="about_desp" value="{{ $update_info->about_desp}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">About Image</label>
                    <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="about_img" class="form-control mt-2">
                    <img width="70" class="mt-4" id="blah" src="{{asset('uploads/about')}}/{{$update_info->about_img}}" alt="">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">Update About</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection