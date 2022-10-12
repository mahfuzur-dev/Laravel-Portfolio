@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3>Add Portfolio</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('store.portfolio')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Portfolio Image</label>
                            <input type="file" name="portfolio_img" class="form-control mt-2">
                            @error('portfolio_img')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Portfolio Link</label>
                            <input type="text" name="portfolio_link" class="form-control mt-2">
                            @error('portfolio_link')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" class="btn btn-primary">Add Portfolio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection