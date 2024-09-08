<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['words' => \DB::table('words')->get()]);
});

Route::post('/', function () {
    $name = request()->input('name') ?: \Str::random(8);
    \DB::table('words')->insert(['name' => $name]);
    $referer = request()->headers->get('referer');
    return redirect($referer);
});