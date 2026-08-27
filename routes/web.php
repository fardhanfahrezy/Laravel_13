<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Ai\agent;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tes-ai', function () {
    $response = agent()->prompt('Buatkan satu pantun lucu tentang programmer.');

    return $response->text;
});
