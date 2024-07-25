<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MathController;

Route::get('/suma/{num1}/{num2}', [MathController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [MathController::class, 'mult']);


