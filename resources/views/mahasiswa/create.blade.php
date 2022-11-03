<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center fw-bold mb-5">Tambah Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-sm mb-3">&laquo; Data Mahasiswa</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="npm" class="form-label">Masukkan NPM</label>
                        <input type="text" class="form-control" name="npm" id="npm">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Masukkan Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Masukkan Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan">
                    </div>
                    <button type="submit" class="btn btn-success mt-4 float-end">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
