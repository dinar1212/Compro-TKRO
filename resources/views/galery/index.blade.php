@extends('layouts.temadmin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Gallery
                        <a href="{{ route('galery.create') }}" class="btn btn-sm btn-primary" style="float: right">
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
                                        <th>Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($gallery as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td> 
                                               
                                            <td>
                                                <img src="{{$data->image()}}" width="100" height="100">
                                            </td>
                                            <td>{{ $data->kegiatan }}</td>  
                                            <td>
                                                <form action="{{ route('galery.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    
                                                    <a href="{{ route('galery.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
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