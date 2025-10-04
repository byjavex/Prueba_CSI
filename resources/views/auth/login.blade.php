<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/js/app.js')
    
    <title>Prueba_CSI | login </title>
</head>
<body>
   
    <h2>Login</h2>
    <form action="/login" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </form>

     <form action="/login" method="POST">
        @csrf
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </form>
    
    <a href="/" class="bth">
        <button>Go main page</button>
    </a>

</body>
</html>