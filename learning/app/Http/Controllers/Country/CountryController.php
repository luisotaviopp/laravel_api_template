<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CountryModel;

class CountryController extends Controller
{
	public function country(){
		return response()->json(CountryModel::get(), 200); // Retorna um HTTP Response com todos os países, e com o status 200.
	}

	public function countryById($id){
		return response()->json(CountryModel::find($id), 200); // Retorna um HTTP Response com o país que corresponde a esse id, com o status 200.
	}
}
