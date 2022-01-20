<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Novità</title>
</head>
<body>
   <a href="{{route('home')}}">Home</a>
   <h2>Le ultime uscite - gennaio 2022:</h2>
   <ul>
      @foreach ($nuove_uscite as $new_gioco)
      <li>{{$new_gioco}}</li> 
      @endforeach
   </ul>
   <h3>Ci sono i totale
      <strong>
         {{count($nuove_uscite)}}
      </strong>
       nuovi giochi!
   </h3>
</body>
</html>