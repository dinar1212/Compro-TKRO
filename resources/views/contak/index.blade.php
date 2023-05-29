@extends('layouts.temadmin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Gallery
                        <a href="{{ route('contak.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div> <br>

                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($contact as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>    
                                            <td>{{ $data->nama}}</td>    
                                            <td>{{ $data->no_tlp }}</td>    
                                            <td>{{ $data->email }}</td>    
                                            <td>{{ $data->isi }}</td>    
                                           
                                            <td>
                                                <form action="{{ route('contak.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    
                                                    {{-- <a href="{{ route('contak.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
                                                        <i class='bx bx-edit'></i>
                                                    </a> | --}}

                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection