<?php

use App\Http\Controllers\Covid19Controller;
use Illuminate\Support\Facades\Route;

Route::get('covid-19/show/', [Covid19Controller::class, 'show']);
