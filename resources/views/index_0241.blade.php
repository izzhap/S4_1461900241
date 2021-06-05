<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="panel panel-default">
    <center>
        <h3 class="font-weight-bold">DAFTAR SISWA</h3>
    </center>

    <table border="1" class="table">
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>

        </tr>
        @php
        $i = 1;
        @endphp

        @foreach($siswa as $d)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $d->nama_siswa }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->mengajar }}</td>


            <td>
                <a class="btn btn-primary btn-sm" href="/siswa/edit/{{ $d->id_siswa }}">Edit</a>
                |
                <a class="btn btn-secondary btn-sm" href="/siswa/del/{{ $d->id_siswa }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <center>
    <a class="btn btn-primary btn-lg" href="/siswa/add">+ Tambah</a>
    </center>
    </div>
</body>

</html>