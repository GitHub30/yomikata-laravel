<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['words' => \DB::table('words')->get()]);
});

Route::post('/', function () {
    \DB::table('words')->insert(['name' => \Str::random(8)]);
    $referer = request()->headers->get('referer');
    return redirect($referer);
});