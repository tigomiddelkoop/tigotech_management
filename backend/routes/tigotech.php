<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tigotech\SkillsController;
use App\Http\Controllers\tigotech\ProjectsController;
use App\Http\Controllers\tigotech\ProjectController;

Route::get("skills", SkillsController::class)->name("tigotech_skills");
Route::get("projects", ProjectsController::class)->name("tigotech_projects");
Route::get("projects/{slug}", ProjectController::class)->name("tigotech_project");
