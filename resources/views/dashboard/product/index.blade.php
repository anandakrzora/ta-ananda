@extends('dashboard.layout.layout')
@section('page-title', 'Product BawaMotor')
@section('dashboard-title', 'Data Product')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8 align-self-center">
                    <p class="m-0 font-weight-bold text-danger">Tabel Product Motor</p>
                </div>
                    <div class="col-4 row justify-content-end m-0">
                        <a class="btn btn-primary" href="{{ route('product.create') }}">Tambah Data</a>
                    </div>
              </div>
            <br>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div >
                            <table class="table table-bordered dataTable" id="dataTable"  cellspacing="0"
                                role="grid" aria-describedby="dataTable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 10px;">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 61px;">Nama Product</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 49px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 31px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 68px;">Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 67px;">gambar</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 67px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $p)
                                    <tr class="odd">
                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                        <td>{{ $p->title }}</td>
                                        <td class="text-center"><span class="badge badge-success p-2">{{ $p->status }}</span></td>
                                        <td>{{ $p->formatted_price = 'Rp ' . number_format($p->price, 0, ',', '.'); }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td class="text-center"><img src="{{ asset('img/product/'.$p->image) }}" alt="{{ $p->title }}" width="300px"></td>
                                        <td class="d-flex justify-content-center">
                                                <a type="button" class="btn btn-warning mr-2" href="{{ route('product.edit',$p->id) }}">Edit</a>
                                                <form action="{{ route('product.destroy', $p->id) }}" method="POST" style="display: inline;">
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
