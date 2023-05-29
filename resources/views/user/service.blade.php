@extends('layouts.temuser')


@section('content')

  <!-- Page Header Start -->
  
<!-- Page Header End -->


 <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Service</p>
            <h1 class="display-5 mb-4">Kami Melayanin Berbagai Service</h1>
        </div>
        <div class="row gy-5 gx-4">
            @foreach ($service as $data)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <img class="img-fluid" src="{{ $data->image() }}" alt="">
                    <div class="service-img">
                        <img class="img-fluid" src="{{ $data->image() }}" alt="">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">{{ $data->kegiatan }}</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">{{ $data->keterangan }}</p>
                        </div>
                    </div>
                    <a class="btn btn-light" href="">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

    @endsection