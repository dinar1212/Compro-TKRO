@extends('layouts.temuser')


@section('content')

  <!-- Page Header Start -->
  
<!-- Page Header End -->


   <!-- Project Start -->
   <div class="container-fluid py-5 my-5 px-0">
    <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-primary mb-2">Gallery</p>
        <h1 class="display-5 mb-5">Dokumentasi Kegiatan</h1>
    </div>
   
    <div class="owl-carousel project-carousel bg-dark wow fadeIn" data-wow-delay="0.1s">
        @foreach ($gallery as $data)
        <a class="project-item" href="">
            <img class="img-fluid" src="{{ $data->image() }}" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">{{ $data->kegiatan }}</h5>
            </div>
        </a>
        @endforeach
      
    </div>
</div>
<!-- Project End -->


    @endsection