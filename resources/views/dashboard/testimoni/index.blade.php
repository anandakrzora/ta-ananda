@extends('dashboard.layout.layout')
@section('page-title', 'Testimoni BawaMotor')
@section('dashboard-title', 'Data Testimoni')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8 align-self-center">
                    <p class="m-0 font-weight-bold text-danger">Tabel Testimoni Pelanggan</p>
                </div>
                    <div class="col-4 row justify-content-end m-0">
                        <a class="btn btn-primary" href="{{ route('testimoni.create') }}">Tambah Data</a>
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
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 20%;">Foto Pelanggan</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 35%;">Review</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 10%;">Bintang</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 30%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimoni as $t)
                                <tr class="odd">
                                    <td class="sorting_1">{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('img/testimoni/'.$t->image) }}" height="100px"></td>
                                    <td>{{ $t->review ?? '-' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="mb-0 mr-2">
                                                {{ $t->star ?? '-' }}
                                            </p> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffd500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                                        </div>
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a type="button" class="btn btn-warning mr-2" href="{{ route('testimoni.edit', $t->id) }}">Edit</a>
                                        <form action="{{ route('testimoni.destroy', $t->id) }}" method="POST" style="display: inline;">
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
