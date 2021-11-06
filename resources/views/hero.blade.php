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
        <legend>Data Heroes</legend>
        <table border = 1>
        <tr>
            <th>No</th>
            <th>Real Name</th>
            <th>Hero Name</th>
            <th>Element</th>
            <th>Gender</th>
            <th>Power</th>
            <th>Keterangan</th>
            <th>Action</th>


        </tr>
        @php $no = 1; @endphp
        @foreach ($hero as $data)
        <tr>
        <td>{{$no++}}</td>
        <td>{{$data->real_name}}</td>
        <td>{{$data->hero_name}}</td>
        <td>{{$data->element}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->power}}</td>
        @if ($data['power'] >=100)
             <td>Sangat Kuat</td>
        @elseif ($data['power'] >=75)
            <td>Kuat</td>
        @elseif ($data['power'] >=50)
            <td>Lemah</td>
        @elseif ($data['power'] <=20)
            <td>Manusia Biasa</td>
            @else
            <td>Non Superheroo</td>
        @endif
        <td><a href="{{url('hero',$data->id)}}">Show Hero</a></td>
        </tr>
        @endforeach
</fieldset>
</body>
</html>