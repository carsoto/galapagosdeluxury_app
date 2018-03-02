<?php

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
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::get('registrar_APA', function () {
    return view('registrar_APA');
});

Route::post('subir', function () {

	$factura = Input::file('factura_APA');
    $destinoPath = public_path().'/images/APA_invoices/';
    $subirFactura = $factura->move($destinoPath, $factura->getClientOriginalName());
    if($subirFactura){
    	return "Factura cargada exitosamente";
    }else{
    	return "Ocurrió un error";
    }
});