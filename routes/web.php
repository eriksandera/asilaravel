<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get("/", [ClientController::class, 'index']);

route::get("/create", [ClientController::class, 'create']);
route::post("/store", [ClientController::class, 'store']);
route::get("/edit/{id}", [ClientController::class, 'edit']);
route::put("/update", [ClientController::class, 'update']);
route::get("/delete/{id}", [ClientController::class, 'delete']);
