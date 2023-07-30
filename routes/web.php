<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

// トップ画面
Route::get('/', [VisitorController::class, 'index']);

// 入室・退出処理
Route::post('/check-in', [VisitorController::class, 'checkIn']);
Route::post('/check-out', [VisitorController::class, 'checkOut']);

// 管理画面（認証不要）
Route::get('/admin', [VisitorController::class, 'admin']);
Route::delete('/admin/{id}', [VisitorController::class, 'deleteRecord']);

