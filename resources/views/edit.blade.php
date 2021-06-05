<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body>
    <center>
        <h3>EDIT BEASISWA</h3>
    </center>

    @foreach($siswa as $d)
    <form action="/beasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" placeholder="ID" value="{{ $d->id_siswa }}">
        <input class="form-control form-control-sm" type="text" name="nama_b" placeholder="Nama Siswa" value="{{ $d->nama_siswa }}"> <br> <br>
        <input class="form-control form-control-sm" type="text" name="alamat_b" placeholder="Alamat Siswa" value="{{ $d->alamat }}"> <br> <br>
        <input class="btn btn-primary btn-sm" type="submit" value="Edit">
    </form>
    @endforeach
</body>

</html>