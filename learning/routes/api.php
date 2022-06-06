<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\Country\Country;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ---------------------------------------------------------------------> COUNTRY -> Se quiser fazer um por um...
// Route::METODO_HTTP('ENDPOINT', [CONTROLLER::class, 'FUNCAO_DENTRO_DO_CONTROLLER']);

// Select * from country
//Route::get('country', [CountryController::class, 'country']);

// Select country by id
//Route::get('country/{id}', [CountryController::class, 'countryById']);

// Add a country
//Route::post('country', [CountryController::class, 'countrySave']);

// Edit a country
//Route::put('country/{country_id}', [CountryController::class, 'countryUpdate']);

// Delete a Country
//Route::delete('country/{country_id}', [CountryController::class, 'countryDelete']);



// ---------------------------------------------------------------------> COUNTRY -> Se quiser user um resource (tudo em um único arquivo).
// php artisan make:controller Country/Country --resource
Route::apiResource('country', 'Country\Country');