<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\ProductController;

Route::view('/','login')->name('login');
Route::view('/login','login')->name('login');
Route::view('/registrarse','registro')->name('registro');
Route::view('/list_user','list_user')->name('list_user');

//USERS
Route::post('/registrarse',[UserControler::class,'register'])->name('registrarse');
    //Login
Route::post('/inicio-sesion',[UserControler::class,'login'])->name('iniciar-sesion');
Route::get('/home',[UserControler::class,'mostrar_datos'])->name('home');
    //Update
Route::get('/editar/{id}',[UserControler::class,'editar'])->name('editar'); 
Route::post('/actualizar',[UserControler::class,'actualizar'])->name('actualizar');
    //Eliminar
Route::get('/list_user',[UserControler::class,'view_user'])->name('list_user');
Route::delete('/eliminar/{id}',[UserControler::class,'delete_user'])->name('eliminar'); 
    //Exit
Route::get('/logout',[UserControler::class,'logout'])->name('logout');

//PRODUCTS
/*Route::view('/view_products','product.list_product')->name('lista');
Route::view('/regist_product','product.regist_product')->name('regist_product');

Route::post('/regist_product',[ProductController::class,'regist_product'])->name('regist_product');
Route::get('/list_product',[ProductController::class,'index'])->name('list_product');
Route::get('/edit_product/{id}',[ProductController::class,'edit_product'])->name('edit_product'); 
Route::post('/update_product',[ProductController::class,'update_product'])->name('update_product');*/


