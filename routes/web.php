<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Receipt;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Authentication
Route::get('/', function () {return view('Authentication');});
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// Receipt
Route::get('/receipt', function () {
    $categoryDATA = Category::all();
    $receiptDATA = Receipt::where('user_id', auth()->id())->get();
    return view('Receipt', [
        'ctg' => $categoryDATA,
        'rtp' => $receiptDATA
    ]);
});
Route::post('/receipt', function (){
    $searchQuery = '%' . request('search') . '%';
    $receiptDATA = Receipt::where('title', 'like', $searchQuery)->get();
    $categoryDATA = Category::all();
    return view('Receipt', [
        'ctg' => $categoryDATA,
        'rtp' => $receiptDATA
    ]);
});
Route::post('/addReceipt', [ReceiptController::class, 'addReceipt']);
Route::get('/editReceipt/{receipt}', [ReceiptController::class, 'editReceipt']);
Route::put('/editReceipt/{receipt}', [ReceiptController::class, 'actuallyEditReceipt']);
Route::delete('/deleteReceipt/{receipt}', [ReceiptController::class, 'deleteReceipt']);


// Category
Route::get('/categories', function () {
    $categoryDATA = Category::all();
    return view('Category', [
        'ctg' => $categoryDATA
    ]);
});
Route::post('/addCategory', [CategoryController::class, 'addCategory']);
