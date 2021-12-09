<?php

use Illuminate\Support\Facades\Route;



Route::get("/", "RoadmapController@index") -> name("home");
Route::post("/process", "RoadmapController@process") -> name("process");