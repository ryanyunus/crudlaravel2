<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10.7.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Pegawai!</h1>
    <div class="container">
      <button type="button" class="btn btn-success">Tambah +</button> 
      <div class="row">
            <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        
        <tbody>
        @foreach ($data as $row)
        <tr>
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->nama}}</td>
            <td>{{$row->jeniskelamin}}</td>
            <td>{{$row->notelpon}}</td>
            <td>
              <button type="button" class="btn btn-danger">Delete</button>
              <button type="button" class="btn btn-info ">Edit</button>
            </td>
          </tr>
        
        @endforeach

          
        </tbody>
      </table>

      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>