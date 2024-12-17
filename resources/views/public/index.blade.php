<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <h1>Belajar Larapel</h1>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">N0</th>
                        <th scope="col">Nama</th>
                        <th scope="col">harga</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $product as $p )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->title}}</td>
                        <td>{{ $p->price}}</td>
                        <td>{{ $p->description}}</td>
                        <td>{{ $p->status}}</td>
                        <td>
                            <a href="{{route("product.edit",$p->id)}}" class="btn btn-warning">Update Data</a>
                            <form action="{{ route('product.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Data</button>
                            </form>
                            
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <a href="{{route("product.create")}}" class="btn btn-primary">Tambah Data</a>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
