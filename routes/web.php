<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     // $name = 'Jou';
//     // طرق ارسال المتغيرات
//     // return view('about' , ['name'=> $name ]);
//     // return view('about')->with('name',$name);
//     return view('about',compact('name'));

// });


//ROute bage
// Route::get('/',function(){
//     return view('Growmark.index');
// });
// Route::get('/about',function(){
//     return view('Growmark.about');
// });
//     Route::get('/service',function(){
//     return view('Growmark.service');
// });



// Route::get('/', [TaskController::class, 'index'])->name('tasks');
// Route::post('create', [TaskController::class, 'create'])->name('task.create');
// Route::delete('delete/{id}', [TaskController::class, 'destroy'])->name('task.delete');
// Route::put('edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
// Route::patch('update/{id}', [TaskController::class, 'update'])->name('task.update');

 Route::get('/',[TaskController::class,'index'])->name('tasks');
 Route::post('create',[TaskController::class,'create'])->name('task.create');
 Route::delete('delete/{id}',[TaskController::class,'destroy'])->name('task.delete');
 Route::put('edit/{id}',[TaskController::class,'edit'])->name('task.edit');
 Route::put('update/{id}',[TaskController::class,'update'])->name('task.update');

