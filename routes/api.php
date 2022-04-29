<?php

use App\Http\Controllers\Api\{
    CourseController,
    ModuleController,
    LessonController,
    SupportController
};
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'read']);
Route::get('/courses/{id}/modules', [ModuleController::class, 'index']);
Route::get('/modules/{id}/lessons', [LessonController::class, 'index']);
Route::get('/lessons/{id}', [LessonController::class, 'read']);
Route::get('/support', [SupportController::class, 'index']);

Route::get('/', function(){

    return response()->json([
            'success' => true,
        ]);
});