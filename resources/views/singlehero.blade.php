<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<fiel, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Heroes</legend>
            <tr>
            <strong>{{$singlehero->id}}</strong><hr>
            real_name : {{$singlehero->real_name}}</strong><hr>
            hero_name : {{$singlehero->hero_name}}<br>
            element : {{$singlehero->element}}<br>
            gender : {{$singlehero->gender}}<br>
            power : {{$singlehero->power}}<br>
             
            @if ($singlehero['power'] >= 100)
            @php
            $note = "Sangat Kuat";
            @endphp
            @elseif ($singlehero['power'] >= 75)
            @php
            $note = "Kuat";
            @endphp
            @elseif ($singlehero['power'] >= 50)
            $note = "Lemah";
            @endphp
            @elseif ($singlehero['power'] <=20)
            $note = "Manusia biasa";
            @endphp
            @endif
            Keterangan :{{$note}}<hr>
</fieldset>
</body>
</html>