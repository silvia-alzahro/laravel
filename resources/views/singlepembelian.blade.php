<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Pembeli </legend>
        <br>
        <strong>{{$singlepembelian->id}}</strong><br>
            {{$singlepembelian->nama_barang}}<hr>
            {{$singlepembelian->nama_supplier}}<hr>
            {{$singlepembelian->jumlah_barang}}<hr>
            {{$singlepembelian->tanggal}}<hr>
</fieldset>
</body>
</html>