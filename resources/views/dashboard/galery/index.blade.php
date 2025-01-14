@extends('dashboard.layout.layout')
@section('page-title', 'Galery BawaMotor')
@section('dashboard-title', 'Data Galery')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8 align-self-center">
                    <p class="m-0 font-weight-bold text-danger">Tabel Galery Pelanggan</p>
                </div>
                    <div class="col-4 row justify-content-end m-0">
                        <a class="btn btn-primary" href="{{ route('galery.create') }}">Tambah Data</a>
                    </div>
              </div>
            <br>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div>
                        <table class="table table-bordered dataTable" id="dataTable" cellspacing="0" role="grid" aria-describedby="dataTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 5%;">No</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="10" style="width: 80%;">Foto Pelanggan</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 15%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galery as $g)
                                <tr class="odd">
                                    <td class="sorting_1">{{ $loop->iteration }}</td>
                                    <td rowspan="1" colspan="10"><img src="{{ asset('img/galeri/'.$g->image) }}" height="100px"></td>
                                    <td class="d-flex justify-content-center">
                                        <form action="{{ route('galery.destroy', $g->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete">Delete</button>
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
@endsection
