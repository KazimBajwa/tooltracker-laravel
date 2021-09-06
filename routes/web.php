<?php

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

Route::get('/tool/create', [App\Http\Controllers\ToolController::class, 'create'])->name('tool.create');
Route::get('/tool/{id}', [App\Http\Controllers\ToolController::class, 'show'])->name('tool.show');
Route::get('/tool', [App\Http\Controllers\ToolController::class, 'index'])->name('tool.index');
Route::post('/tool/store', [App\Http\Controllers\ToolController::class, 'store'])->name('tool.store');
Route::delete('/tool/{id}', [App\Http\Controllers\ToolController::class, 'destroy'])->name('tool.destroy');
Route::get('/tool/{id}/edit', [App\Http\Controllers\ToolController::class, 'edit'])->name('tool.edit');
Route::put('/tool/{id}', [App\Http\Controllers\ToolController::class, 'update'])->name('tool.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//.................Tool manager ..................................
Route::get('/toolmanager', [App\Http\Controllers\ToolManagerController::class, 'index'])->name('tlmgr.home');


//.................category..................................
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('categ.index');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categ.create');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categ.store');

//.................Subcategory..................................
Route::get('/subcategory/create/{id}', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('subcateg.createId');
Route::post('/subcategory/store{id}', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('subcateg.store');
Route::delete('/subcategory/{id}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('subcateg.destroy');

//.................Location..................................
Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('loc.index');
Route::delete('/location/{id}', [App\Http\Controllers\LocationController::class, 'destroy'])->name('loc.destroy');
Route::get('/location/create', [App\Http\Controllers\LocationController::class, 'create'])->name('loc.create');
Route::post('/locaton/store', [App\Http\Controllers\LocationController::class, 'store'])->name('loc.store');
Route::get('/location/{id}/edit', [App\Http\Controllers\LocationController::class, 'edit'])->name('loc.edit');
Route::put('/location/{id}', [App\Http\Controllers\LocationController::class, 'update'])->name('loc.update');

//.................Company..................................
Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->name('comp.index');
Route::delete('/company/{id}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('comp.destroy');
Route::get('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('comp.create');
Route::post('/company/store', [App\Http\Controllers\CompanyController::class, 'store'])->name('comp.store');
Route::get('/company/{id}/edit', [App\Http\Controllers\CompanyController::class, 'edit'])->name('comp.edit');
Route::put('/company/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('comp.update');
