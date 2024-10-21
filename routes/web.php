<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route resource untuk mengatur semua fungsi CRUD (Create, Read, Update, Delete)
Route::resource('contacts', ContactController::class);
