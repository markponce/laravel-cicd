<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function (Request $request) {
    // request()->query()
    $name = $request->query("name", "world");

    return "hello $name";
});
