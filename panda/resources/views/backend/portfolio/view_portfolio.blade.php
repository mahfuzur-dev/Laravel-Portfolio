@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Portfolio List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Sl No</th>
                        <th>Portfolio Link</th>
                        <th>Portfolio Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($all_portfolio as $key=>$portfolio)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$portfolio->portfolio_link}}</td>
                            <td><img width="50" src="{{asset('uploads/portfolio')}}/{{$portfolio->portfolio_img}}" alt=""></td>
                            <td><a href="{{route('delete.portfolio',$portfolio->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection