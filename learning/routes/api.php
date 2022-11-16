<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\Country\Country;
use App\Http\Controllers\FileController;

//---------------------------------------------------------------------> COUNTRY -> Se quiser fazer um por um...
//Route::METODO_HTTP('ENDPOINT', [CONTROLLER::class, 'FUNCAO_DENTRO_DO_CONTROLLER']);

//Select * from country
Route::get('v1/country', [CountryController::class, 'country']);

//Select country by id
Route::get('v1/country/{id}', [CountryController::class, 'countryById']);

//Add a country
Route::post('v1/country', [CountryController::class, 'countrySave']);

//Edit a country
Route::put('v1/country/{country_id}', [CountryController::class, 'countryUpdate']);

//Delete a Country
Route::delete('v1/country/{country_id}', [CountryController::class, 'countryDelete']);




// ---------------------------------------------------------------------> ARQUIVOS.

// Download a File.
Route::get('file', [FileController::class, 'downLoadFile']);

// Upload a File.
Route::post('file', [FileController::class, 'upLoadFile']);