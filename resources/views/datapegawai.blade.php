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
      <a href="/tambahpegawai" class="btn btn-success">Tambah +</a> 
      <div class="row">
          @if($massage = Session::get('success'))
          <div class="alert alert-success" role="alert">
              {{ $massage}}
          </div>
          @endif
            <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>            
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        
        <tbody>
        @php 
          $no = 1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$row->nama}}</td>
            <td>
              <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 40px;">
           </td>
          
            <td>{{$row->jeniskelamin}}</td>
            <td>{{$row->notelpon}}</td>
            <td>{{$row->created_at->format('D M Y')}}</td>
            <td>
              <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info ">Edit</a>
              <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}">Delete</a>

            </td>
          </tr>
        
        @endforeach

          
        </tbody>
      </table>

      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  <script>
    $('.delete').click(function(){
      swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
                });
              } else {
                swal("Your imaginary file is safe!");
              }
          });
        });
  </script>

</html>