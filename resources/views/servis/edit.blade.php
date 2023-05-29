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
                        <form action="{{ route('servis.update', $service->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                         
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                @if (isset($service) && $service->foto)
                                    <p>
                                        <img src="{{ asset('images/service/' . $service->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $service->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kegiatan</label>
                                <input type="text" class="form-control  @error('kegiatan') is-invalid @enderror"
                                    name="kegiatan" value="{{ $service->kegiatan }}">
                                @error('kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control  @error('keterangan') is-invalid @enderror"
                                    name="keterangan" value="{{ $service->keterangan }}">
                                @error('keterangan')
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