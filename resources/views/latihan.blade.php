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
        <legend>passing data from controller to view</legend>
        @foreach($data as $siswa)
           {{$siswa['nama']}} | {{$siswa['kelas']}} <hr>
        @endforeach
</fieldset>
</body>
</html>