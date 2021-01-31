<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tigotech\skills;
use App\Http\Controllers\tigotech\projects;
use App\Http\Controllers\tigotech\project;

Route::get("skills", skills::class)->name("tigotech_skills");
Route::get("projects", projects::class)->name("tigotech_projects");
Route::get("projects/{slug}", project::class)->name("tigotech_project");
