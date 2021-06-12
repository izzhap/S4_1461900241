<!DOCTYPE html>
<html lang="en">

<head>
    <title>Import Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="panel panel-default" style="padding:20px">
    <center>
        <h3 class="font-weight-bold">IMPORT DOKTER</h3>
        <br />
        <br />
        <br />
        <form action="/dokter/import" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" name="file"/>
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </center>



    </div>
</body>

</html>