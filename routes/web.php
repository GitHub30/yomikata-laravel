<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['words' => \DB::table('words')->get()]);
});
