<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Daftar Tamu</title>

 <nav class="navbar bg-body-tertiary">
 <div class="container-fluid d-flex justify-content-center align-items-center">
        <!-- Logo kiri -->
        <img src="{{ asset('images/logo_kominfo.png') }}" alt="Logo Kiri" style="height: 50px; margin-right: 10px;">

        <div class="text-center">
            <span class="navbar-brand mb-0 h1 d-block">FROM EDIT TAMU</span>
            <span class="navbar-brand mb-0 h1 d-block">DISKOMINFOTIK LOMBOK TENGAH</span>
        </div>

        <!-- Logo kanan -->
        <img src="{{ asset('images/logo_loteng.png') }}" alt="Logo Kanan" style="height: 50px; margin-right: 10px;">
</nav>

</head>
<body>
<div class="container mt-5">
<form action="/edit/{{ $tamu->id }}" method="POST"> 
    @method('put')
    @csrf
    <div class="row g-3 align-items-center justify-content-center">
        <div class="form-floating mb-3">
            <div class="col-auto">
                <label for="nama" class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
                <input type="text" name="nama" class="form-control" value="{{ $tamu->nama }}">
            </div> 
        </div>

        <div class="form-floating mb-3">
        <div class="col-auto">
            <label for="no_telepon" class="col-form-label">No Telepon</label>
        </div>
        <div class="col-auto">
            <input type="number" name="no_telepon" class="form-control" value="{{ $tamu->no_telepon }}">
        </div>
        </div>

        <div class="form-floating mb-3">
         <div class="col-auto">
            <label for="alamat" class="col-form-label">Alamat</label>
        </div>
        <div class="col-auto">
            <input type="text" name="alamat" class="form-control" value="{{ $tamu->alamat }}">
        </div>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
    <a href="/" class="btn btn-outline-primary">Kembali</a>
</form>
</div>
    
</body>

</html>