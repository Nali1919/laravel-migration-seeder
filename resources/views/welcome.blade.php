<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 @foreach ($trains as $train  )

  <h1>{{$train['Azienda']}}</h1>
  <p>{{$train['Data_partenza']}}</p>
  <p>{{$train['Stazione_di_partenza']}}</p>
  <p>{{$train['Stazione_di_arrivo']}}</p>


 @endforeach

</body>
</html>
