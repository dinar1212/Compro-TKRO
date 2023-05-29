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
                        <form action="{{ route('home.update', $home->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                         
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                @if (isset($home) && $home->foto)
                                    <p>
                                        <img src="{{ asset('images/home/' . $home->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $home->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto 2</label>
                                @if (isset($home) && $home->foto2)
                                    <p>
                                        <img src="{{ asset('images2/home/' . $home->foto2) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto2') is-invalid @enderror"
                                    name="foto2" value="{{ $home->foto2 }}">
                                @error('foto2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Header</label>
                                @if (isset($home) && $home->fotoheader)
                                    <p>
                                        <img src="{{ asset('imagesheader/home/' . $home->fotoheader) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('fotoheader') is-invalid @enderror"
                                    name="fotoheader" value="{{ $home->fotoheader }}">
                                @error('fotoheader')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kegiatan</label>
                                <input type="text" class="form-control  @error('kegiatan') is-invalid @enderror"
                                    name="kegiatan" value="{{ $home->kegiatan }}">
                                @error('kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pengajar</label>
                                <input type="text" class="form-control  @error('pengajar') is-invalid @enderror"
                                    name="pengajar" value="{{ $home->pengajar }}">
                                @error('pengajar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SiSwa</label>
                                <input type="text" class="form-control  @error('siswa') is-invalid @enderror"
                                    name="siswa" value="{{ $home->siswa }}">
                                @error('siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Clients</label>
                                <input type="text" class="form-control  @error('clients') is-invalid @enderror"
                                    name="clients" value="{{ $home->clients }}">
                                @error('clients')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <input type="text" class="form-control  @error('project') is-invalid @enderror"
                                    name="project" value="{{ $home->project }}">
                                @error('project')
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