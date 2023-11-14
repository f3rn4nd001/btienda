<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Catalogo\Estatus;

Route::post('Catalogo/estatus/consulta', [Estatus::class,'getRegistro']);

Auth::routes();