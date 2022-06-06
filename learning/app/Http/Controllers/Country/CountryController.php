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

	public function countrySave(Request $request){
		$country = CountryModel::create($request->all());
		return response()->json($country, 201); // Retorna um HTTP Response com o país recém criado, e o status 201.
	}

	public function countryUpdate(Request $request, $id){
        $country = CountryModel::find($id);
        $country->update($request->all());
        return response()->json($country,200);
    }

	public function countryDelete(Request $request, $id){
        $country = CountryModel::find($id);
        $country->delete();
        return response()->json(null, 204);
    }
}
