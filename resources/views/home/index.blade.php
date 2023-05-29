@extends('layouts.temadmin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Gallery
                        <a href="{{ route('home.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div> <br>

                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                       
                                        <th>Foto</th>
                                        <th>Foto 2</th>
                                        <th>Foto Header</th>
                                        <th>Kegiatan</th>
                                        <th>Pengajar</th>
                                        <th>Siswa</th>
                                        <th>Clients</th>
                                        <th>Project</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($home as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td> 
                                               
                                            <td>
                                                <img src="{{$data->image()}}" width="100" height="100">
                                            </td>
                                            <td>
                                                <img src="{{$data->image2()}}" width="100" height="100">
                                            </td>
                                            <td>
                                                <img src="{{$data->imageheader()}}" width="100" height="100">
                                            </td>
                                            <td>{{ $data->kegiatan }}</td>  
                                            <td>{{ $data->pengajar }}</td>  
                                            <td>{{ $data->siswa }}</td>  
                                            <td>{{ $data->clients }}</td>  
                                            <td>{{ $data->project }}</td>  
                                            <td>
                                                <form action="{{ route('home.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    
                                                    <a href="{{ route('home.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
                                                        <i class='bx bx-edit'></i>
                                                    </a> |

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