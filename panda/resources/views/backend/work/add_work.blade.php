@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Work Experience</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3>Add Work Experience</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('insert.work')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Work Title</label>
                            <input type="text" name="work_title" class="form-control mt-2">
                            @error('work_title')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Work Percentage</label>
                            <input type="number" name="work_percentage" class="form-control mt-2">
                            @error('work_percentage')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                      
                        <div class="mb-3 mt-2">
                            <button type="submit" class="btn btn-primary">Add Experience</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection