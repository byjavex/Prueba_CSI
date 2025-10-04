<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/js/app.js')
    
    <title>Prueba_CSI | Show_game</title>
</head>
<body>
    
    <h1> Game {{$id}} {{$name}}</h2> 
    
    <a href="/games" class="btn">
     <button>Go games page</button>
    </a>

</body>
</html>