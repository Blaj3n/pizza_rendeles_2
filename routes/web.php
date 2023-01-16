<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//ORDER
Route::get('/api/orders', [OrderController::class, 'index']);
Route::get('/api/orders/{id}', [OrderController::class, 'show']);
Route::delete('/api/orders/{id}', [OrderController::class, 'destroy']);
Route::post('/api/orders', [OrderController::class, 'store']);
Route::put('/api/orders/{id}', [OrderController::class, 'update']);
//PIZZA
Route::get('/api/pizzas', [PizzaController::class, 'index']);
Route::get('/api/pizzas/{id}', [PizzaController::class, 'show']);
Route::delete('/api/pizzas/{id}', [PizzaController::class, 'destroy']);
Route::post('/api/pizzas', [PizzaController::class, 'store']);
Route::put('/api/pizzas/{id}', [PizzaController::class, 'update']);
//sajtos pizza
Route::get('/api/sajtos', [PizzaController::class, 'sajtos']);
//hány féle pizza
Route::get('/api/pizza_db', [PizzaController::class, 'pizza_db']);