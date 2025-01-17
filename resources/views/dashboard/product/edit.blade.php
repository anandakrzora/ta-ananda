@extends('dashboard.layout.layout')
@section('page-title', 'Product BawaMotor')
@section('dashboard-title', 'Perbarui Data Product')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <p class="m-0 font-weight-bold text-danger">Form Pembaruan Product Motor</p>
        </div>
        <div class="card-body">
            <form id="productForm" method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Product" value="{{ old('title' , $product->title) }}">
                    @error('title')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status Product</label>
                    <select name="status" class="form-control">
                        <option value="" selected disabled>Pilih Status</option>
                        <option value="dijual" {{ old('status', $product->status) == 'dijual' ? 'selected' : '' }}>Dijual</option>
                        <option value="terjual" {{ old('status', $product->status) == 'terjual' ? 'selected' : '' }}>Terjual</option>
                    </select>
                    @error('status')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Harga Product</label>
                    <input type="text" id="priceInput" class="form-control" placeholder="Masukkan Harga Product" 
                        value="{{ old('price') ? 'Rp. ' . number_format(old('price'), 0, ',', '.') : (isset($product) ? 'Rp. ' . number_format($product->price, 0, ',', '.') : '') }}">
                    <input type="hidden" id="priceHidden" name="price" value="{{ old('price', $product->price ?? '') }}">
                    @error('price')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>DP Harga Product</label>
                    <input type="text" id="dpPriceInput" class="form-control" placeholder="Masukkan DP Harga Product" 
                        value="{{ old('dp_price') ? 'Rp. ' . number_format(old('dp_price'), 0, ',', '.') : (isset($product) ? 'Rp. ' . number_format($product->dp_price, 0, ',', '.') : '') }}">
                    <input type="hidden" id="dpPriceHidden" name="dp_price" value="{{ old('dp_price', $product->dp_price ?? '') }}">
                    @error('dp_price')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi Product</label>
                    <input type="text" name="description" class="form-control" placeholder="Masukkan Deskripsi Product" value="{{ old('description', $product->description) }}">
                    @error('description')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 1</label>
                    <input type="file" name="gambar1" class="form-control-file mt-3 mb-3">
                    @if($product->gambar1)
                        <p class="text-sm mt-2">Gambar Lama:</p>
                        <img src="{{ asset('img/product/'.$product->gambar1) }}" alt="{{ $product->gambar1 }}" height="200px">
                    @endif
                    @error('gambar1')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 2</label>
                    <input type="file" name="gambar2" class="form-control-file mt-3 mb-3">
                    @if($product->gambar2)
                        <p class="text-sm mt-2">Gambar Lama:</p>
                        <img src="{{ asset('img/product/'.$product->gambar2) }}" alt="{{ $product->gambar2 }}" height="200px">
                    @endif
                    @error('gambar2')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 3</label>
                    <input type="file" name="gambar2" class="form-control-file mt-3 mb-3">
                    @if($product->gambar3)
                        <p class="text-sm mt-2">Gambar Lama:</p>
                        <img src="{{ asset('img/product/'.$product->gambar3) }}" alt="{{ $product->gambar3 }}" height="200px">
                    @endif
                    @error('gambar3')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kondisi Body</label>
                    <input type="text" name="kondisi_body" class="form-control" placeholder="Masukkan Kondisi Body" value="{{ old('kondisi_body', $product->kondisi_body) }}">
                    @error('kondisi_body')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Kondisi Kelistrikan</label>
                  <input type="text" name="kondisi_kelistrikan" class="form-control" placeholder="Masukkan Kondisi kelistrikan" value="{{ old('kondisi_kelistrikan', $product->kondisi_kelistrikan) }}">
                  @error('kondisi_kelistrikan')
                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Kondisi Surat</label>
                  <input type="text" name="kondisi_surat" class="form-control" placeholder="Masukkan Kondisi surat" value="{{ old('kondisi_surat', $product->kondisi_surat) }}">
                  @error('kondisi_surat')
                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label>Kondisi Mesin</label>
                    <input type="text" name="kondisi_mesin" class="form-control" placeholder="Masukkan Kondisi mesin" value="{{ old('kondisi_mesin', $product->kondisi_mesin) }}">
                    @error('kondisi_mesin')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Transmisi</label>
                    <input type="text" name="transmision" class="form-control" placeholder="Masukkan Transmisi" value="{{ old('transmision', $product->transmision) }}">
                    @error('transmision')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                
                <!-- Add other condition fields similarly -->

                <button type="submit" class="btn btn-warning mt-3">Submit</button>
            </form>
        </div>
    </div>
    <script>
        const priceInput = document.getElementById('priceInput');
        const priceHidden = document.getElementById('priceHidden');
    
        priceInput.addEventListener('input', () => {
            // Ambil input dan hapus karakter non-angka
            let value = priceInput.value.replace(/[^,\d]/g, '');
            if (!value) {
                priceHidden.value = 0;
                priceInput.value = '';
                return;
            }
            priceHidden.value = parseInt(value, 10); // Set nilai angka asli ke hidden input
            priceInput.value = 'Rp. ' + formatRupiah(value); // Format tampilan dengan Rp.
        });

        const dpPriceInput = document.getElementById('dpPriceInput');
        const dpPriceHidden = document.getElementById('dpPriceHidden');

        dpPriceInput.addEventListener('input', () => {
            // Ambil input dan hapus karakter non-angka
            let value = dpPriceInput.value.replace(/[^,\d]/g, '');
            if (!value) {
                dpPriceHidden.value = 0;
                dpPriceInput.value = '';
                return;
            }
            dpPriceHidden.value = parseInt(value, 10); // Set nilai angka asli ke hidden input
            dpPriceInput.value = 'Rp. ' + formatRupiah(value); // Format tampilan dengan Rp.
        });
    
        function formatRupiah(angka) {
            const numberString = angka.replace(/[^,\d]/g, '').toString();
            const split = numberString.split(',');
            const sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);
    
            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
    
            return split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        }
    
        document.getElementById('productForm').addEventListener('submit', (event) => {
            // event.preventDefault(); // Hentikan pengiriman form default untuk debug
            const formData = new FormData(event.target);
    
            // Debug: Tampilkan data form di console
            // for (let [key, value] of formData.entries()) {
            //     console.log(`${key}: ${value}`);}

        });
    </script>
@endsection
