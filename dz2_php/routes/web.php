<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BbsController;
Route::get('/', [BbsController::class, 'index']);
Route::get('/{bb}', [BbsController::class, 'detail']);

Route::get('/test', function() {
    if (DB::connection()->getDatabaseName())  {
        $name = DB::connection()->getDatabaseName();
      dd($name);
    } else {
      return 'Error';
    }});
