<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{url('ruangan')}}" enctype="multipart/form-data">
        @csrf
        Nama Ruangan : <br>
        <input type="text" name="nama_ruangan" id=""> <br>
        Kapasitas : <br>
        <input type="number" name="kapasitas" id=""> <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>