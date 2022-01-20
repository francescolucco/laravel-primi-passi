<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Giochi</title>
</head>
<body>
   <a href="{{route('home')}}">Torna alla Home</a>

   <h4>Ecco una lista dei giochi che abbiamo selezionato per te, in base alle migliori recensioni delgi esperti del settore:</h4>
   <ul>
      @foreach ($giochiToBuy as $gioco)
        <li>{{$gioco}}</li> 
      @endforeach
   </ul>
   <ul>
      @foreach ($costo as $prezzo)
         @if ($prezzo > 0 && $prezzo < 100)
            prezzo basso:
            <li>{{$prezzo}} &euro;</li> 
            @elseif ($prezzo >= 100 && $prezzo < 230)
            prezzo medio:
            <li>{{$prezzo}} &euro;</li> 
            @else
            prezzo alto:
            <li>{{$prezzo}} &euro;</li> 
         @endif
      @endforeach
   </ul>





   
</body>
</html>