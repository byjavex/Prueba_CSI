<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/js/app.js')
    
    <title>Prueba_CSI</title>
</head>
<body>
   <h1>Main Page</h1> 
   <p>wenas tardes</p>


   <a href="/games" class="btn">
     <p>Go to games</p>
   </a> 

   <a href="/login" class="btn">
        <button>Login</button>
   </a>

</body>
</html>