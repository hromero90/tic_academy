<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\InstructorCourses;

Route::redirect('','instructor/courses');

Route::get('courses', InstructorCourses::class)->name('courses.index');

//Route::get('courses', function(){
   // return "Hola soy un Instructor";
//});