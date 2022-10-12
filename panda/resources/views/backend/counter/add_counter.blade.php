@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Counter</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3>Add Counter</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('counter.store')}}" method="POST">
                        @csrf
                        <h5>Add Icon</h5>
                        <?php
                        $fonts = array (
                                'fa-facebook',
                                'fa-instagram',
                                'fa-linkedin',
                                'fa-twitter',
                                'fa-cloud',
                                'fa-cogs',
                                'fa-laptop',
                                'fa-themeisle',
                                'fa-futbol-o',
                                'fa-id-card',
                                'fa-github',
                                'fa-youtube',
                                'fa-truck',
                                'fa fa-globe',
                                'fa fa-thumbs-up',
                                'fa fa-star',
                        ); 
                        ?>
                        <div class="form-group">
                            @foreach ($fonts as $font)
                                <i style="font-size: 20px;padding-right:5px;color:#000;cursor: pointer;" class="fa {{$font}}"></i>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Counter Icon</label>
                            <input type="text" name="counter_icon" class="form-control icon">
                            @error('counter_icon')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Counter Number</label>
                            <input type="number" name="counter_number" class="form-control mt-2">
                            @error('counter_number')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Counter Title</label>
                            <input type="text" name="counter_title" class="form-control mt-2">
                            @error('counter_title')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" class="btn btn-primary">Add Counter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: '{{session('success')}}',
    showConfirmButton: false,
    timer: 1500
})
</script>
<script>
    $('.fa').click(function(){
        var service_icon = $(this).attr('class');
        $('.icon').val(service_icon);
    });
</script>
@endsection