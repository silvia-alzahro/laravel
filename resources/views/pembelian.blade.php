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
        <legend>Data Pembelian</legend>
        <br>
        @foreach($pembelian as $belian)
            <strong>{{$belian->nama_barang}}</strong><br>
            {{$belian->nama_supplier}}<hr>
            {{$belian->jumlah_barang}}<hr>
            {{$belian->tanggal}}<hr>
             @endforeach
</fieldset>
</body>
</html>