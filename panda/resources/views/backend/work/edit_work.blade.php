@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Work</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Work Experience</h3>
            </div>
            <div class="card-body">
               <form action="{{route('update.work')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" value="{{$update_info->id}}" name="work_id">
                </div>
                <div class="mb-3 mt-2">
                    <label for="" class="form-label">Work Title</label>
                    <input type="text" name="work_title" class="form-control mt-2" value="{{$update_info->work_title}}">
                    @error('work_title')
                       <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="mb-3 mt-2">
                    <label for="" class="form-label">Work Percentage</label>
                    <input type="number" name="work_percentage" class="form-control mt-2" value="{{$update_info->work_percentage}}">
                    @error('work_percentage')
                       <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
           
            
                <div class="mb-3 mt-2">
                    <button type="submit" class="btn btn-primary">Update Experience</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection