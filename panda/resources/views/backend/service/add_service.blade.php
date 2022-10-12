@extends('layouts.dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Service</h1>
</div>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3>Add Service</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('service.store')}}" method="POST">
                        @csrf
                        <h5>Add Social</h5>
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
                        ); 
                        ?>
                        <div class="form-group">
                            @foreach ($fonts as $font)
                                <i style="font-size: 20px;padding-right:5px;color:#000;cursor: pointer;" class="fa {{$font}}"></i>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Service Icon</label>
                            <input type="text" name="service_icon" class="form-control icon">
                            @error('service_icon')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Service Head</label>
                            <input type="text" name="service_head" class="form-control mt-2">
                            @error('banner_head')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Service Title</label>
                            <input type="text" name="service_title" class="form-control mt-2">
                            @error('service_title')
                               <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" class="btn btn-primary">Add Service</button>
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