<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tigotech\skills;


Route::get("skills", skills::class)->name("tigotech_skills");
