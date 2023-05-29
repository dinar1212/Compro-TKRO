@extends('layouts.temadmin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Gallery
                    </div>
                    <div class="card-body">
                        <form action="{{ route('galery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                         
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                @if (isset($gallery) && $gallery->foto)
                                    <p>
                                        <img src="{{ asset('images/gallery/' . $gallery->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $gallery->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kegiatan</label>
                                <input type="text" class="form-control  @error('kegiatan') is-invalid @enderror"
                                    name="kegiatan" value="{{ $gallery->kegiatan }}">
                                @error('kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                                    <button class="btn btn-primary" type="submit">Save</button>
                              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection