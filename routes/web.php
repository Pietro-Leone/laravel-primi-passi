<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $data = [
        "name" => "Booleaners",
    ];

    return view('home', $data);
});

Route::get('/second', function () {

    $data = [
        "list" => [
            "Il Gattopardo",
            "1984",
            "Orgoglio e pregiudizio",
            "Cime tempestose",
            "Il signore degli anelli",
            "Il nome della rosa",
            "Cent'anni di solitudine",
            "Harry Potter e la pietra filosofale",
            "Moby Dick",
            "Cronache del ghiaccio e del fuoco",
        ],
    ];

    return view('second', $data);
});
