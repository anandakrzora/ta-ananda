@extends('dashboard.layout.layout')
@section('page-title', 'Edit Testimoni')
@section('dashboard-title', 'Edit Data Testimoni')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <p class="m-0 font-weight-bold text-danger">Form Edit Testimoni</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('testimoni.update', $testimoni->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{ old('name', $testimoni->name) }}">
                    @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <select name="star" class="form-control">
                        <option value="" selected disabled>Pilih Rating</option>
                        <option value="1" {{ old('star', $testimoni->star) == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('star', $testimoni->star) == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('star', $testimoni->star) == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('star', $testimoni->star) == '4' ? 'selected' : '' }}>4</option>
                        <option value="5" {{ old('star', $testimoni->star) == '5' ? 'selected' : '' }}>5</option>
                    </select>
                    @error('star')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ulasan</label>
                    <textarea name="review" class="form-control" placeholder="Masukkan Ulasan">{{ old('review', $testimoni->review) }}</textarea>
                    @error('review')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Gambar Profile</label>
                    <input type="file" name="image" class="form-control-file mt-3">
                    <p class="text-sm mt-2">Gambar Lama:</p>
                        <img src="{{ asset('img/testimoni/'.$testimoni->image) }}" alt="{{ $testimoni->image }}" height="200px">
                    @error('image')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection