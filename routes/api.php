<?php

use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('memos', MemoController::class);