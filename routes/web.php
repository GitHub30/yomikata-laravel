<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['words' => \DB::table('words')->get()]);
});

Route::post('/', function () {
    $name = request()->input('name') ?: \Str::random(8);
    $word_id = \DB::table('words')->insertGetId(['name' => $name]);
    \DB::table('pronunciations')->insert(['word_id' => $word_id, 'name' => $name. '.ok1']);
    \DB::table('pronunciations')->insert(['word_id' => $word_id, 'name' => $name. '.ok2']);
    \DB::table('pronunciations')->insert(['word_id' => $word_id, 'name' => $name. '.ok3']);
    $referer = request()->headers->get('referer');
    return redirect($referer);
});

Route::get('/{word}', function (string $word) {
    return \DB::table('words')->join('pronunciations', 'pronunciations.word_id', '=', 'words.id')->where('words.name', $word)->get();
});