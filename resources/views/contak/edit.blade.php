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
                        <form action="{{ route('contak.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">No Telepon</label>
                                <input type="number" class="form-control  @error('no_tlp') is-invalid @enderror"
                                    name="no_tlp" value="{{ $contact->no_tlp }}">
                                @error('no_tlp')
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