@extends('dashboard.layout.layout')
@section('page-title', 'Tambah Galery')
@section('dashboard-title', 'Tambah Data Gakery')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <p class="m-0 font-weight-bold text-danger">Form Tambah Galery</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('galery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Gambar Testimon</label>
                    <input type="file" name="image" class="form-control-file mt-3">
                    @error('image')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection