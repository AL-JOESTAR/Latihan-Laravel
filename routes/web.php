<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BukuController;

Route::get('/', function () {
    return view('welcome');
});
