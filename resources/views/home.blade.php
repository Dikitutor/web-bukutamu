<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Daftar Tamu</title>

 <nav class="navbar bg-body-tertiary">
  <div class="container-fluid justify-content-center">
    <span class="navbar-brand mb-0 h1">Daftar Tamu</span>
  </div>
</nav>

</head>
<body>


<div class="container mt-5">

 <div class="d-flex justify-content-end">
      <a href="/tambah" class="btn btn-primary">Tambah Tamu</a>
  </div>
 
  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($tamu as $index => $t)
        <tr>
          <th scope="row">{{ $index + $tamu->firstItem() }}</th>
          <td>{{ $t->nama }}</td>
          <td>{{ $t->no_telepon }}</td>
          <td>{{ $t->alamat }}</td>
          <td>
           
            <a href="/edit/{{ $t->id }}" class="btn btn-warning">Edit</a>
            <a href="/delete/{{ $t->id }}" class="btn btn-danger">Delete</a>

          </td>
        </tr>
    @endforeach

    </tbody>

  </table>
  <div class="d-flex justify-content-end">
  {{ $tamu->links() }}
  </div>
    

</div>
    
</body>

</html>