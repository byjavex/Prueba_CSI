<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/js/app.js')
    
    <title>Prueba_CSI | Games</title>
</head>
<body>
   <h2>Currently avaliable games</h2>
   
   <ul>
     <li><a href="/games/{{ $games[0]["id"] }} {{ $games[0]["name"] }}"> {{ $games[0]["name"] }}</a></li>
     <li><a href="/games/{{ $games[1]["id"] }} {{ $games[1]["name"] }}"> {{ $games[1]["name"] }}</a></li>
     
     
   </ul>

    <a href="/" class="btn">
     <button>Go main page</button>
    </a>

</body>
</html>