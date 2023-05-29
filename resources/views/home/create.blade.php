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
                        <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto 2</label>
                                <input type="file" class="form-control  @error('foto2') is-invalid @enderror"
                                    name="foto2">
                                @error('foto2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Header</label>
                                <input type="file" class="form-control  @error('fotoheader') is-invalid @enderror"
                                    name="fotoheader">
                                @error('fotoheader')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kegiatan</label>
                                <input type="text" class="form-control  @error('kegiatan') is-invalid @enderror"
                                    name="kegiatan">
                                @error('kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pengajar</label>
                                <input type="text" class="form-control  @error('pengajar') is-invalid @enderror"
                                    name="pengajar">
                                @error('pengajar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Siswa</label>
                                <input type="text" class="form-control  @error('siswa') is-invalid @enderror"
                                    name="siswa">
                                @error('siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Clients</label>
                                <input type="text" class="form-control  @error('clients') is-invalid @enderror"
                                    name="clients">
                                @error('clients')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <input type="text" class="form-control  @error('project') is-invalid @enderror"
                                    name="project">
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