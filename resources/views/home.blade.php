<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
   <head>
      <h1>Ciao {{$name}} {{$lastname}}<br></h1>
      <h5>Questa è la tua console di navigazione:</h5>
      <ul class="nav">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{'giochi'}}">Giochi</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{'hardware'}}">Hardware</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{'servizi'}}">Servizi</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{'novità'}}">Novità</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{'acquisti'}}">Fai acquisti</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{'supporto'}}">Supporto</a>
         </li>
       </ul>
   </head>
   
</body>
</html>