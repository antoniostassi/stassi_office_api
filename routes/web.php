<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Stassi\'s Office Back-end Status' => 'Online','Laravel Version' => app()->version()];
});

require __DIR__.'/auth.php';
