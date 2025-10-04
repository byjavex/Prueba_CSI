<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function () {
    $game = [
        ["id"=> 1, "name" =>"minecraft", "price" => 30 , "Points" => 90],
        ["id"=> 2, "name" =>"Albion online", "price" => 30 , "Points" => 100]

    ];


      return view('games.index',["games" => $game ]);  
});

Route::get('/games/{id} {name}', function ($id , $name) {
   
      return view('games.show', ["id"=>$id, "name" =>$name]);  
});


Route::get('/login', function () {
    return view('auth.login');
});



// /contact  /about / 

