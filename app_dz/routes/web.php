<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
Route::get('/test', function() {
    if (DB::connection()->getDatabaseName())  {
        $name = DB::connection()->getDatabaseName();
      dd($name);
    } else {
      return 'Error';
    }});
