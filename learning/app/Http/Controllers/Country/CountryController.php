<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CountryModel;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Validator;
use Barryvdh\LaravelIdeHelper\Eloquent;

class CountryController extends Controller
{
	public function country(){
		return response()->json(CountryModel::get(), 200); // Retorna um HTTP Response com todos os países, e com o status 200.
	}


	public function countryNative(){
		$consulta = DB::select("SELECT * FROM _z_country");
		return response()->json($consulta, 200);
	}


	public function countryById($id){

		$country = CountryModel::find($id);

		if (is_null($country)) {
			return response()->json(["Error" => "Country not found."], 404);
		}

		return response()->json(CountryModel::find($id), 200); // Retorna um HTTP Response com o país que corresponde a esse id, com o status 200.
	}


	public function countrySave(Request $request){

		$rules = [
			'name' => 'required|min:3',
			'iso' => 'required|min:2|max:2',
		];

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json($validator->errors(),400);
		}

		$country = CountryModel::create($request->all());

		return response()->json($country, 201); // Retorna um HTTP Response com o país recém criado, e o status 201.
	}



	public function countryUpdate(Request $request, $id){

		$rules = [
			'name' => 'required|min:3',
			'iso' => 'required|min:2|max:2',
		];

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json($validator->errors(),400);
		}

		$country = CountryModel::find($id);

		if (is_null($country)) {
			return response()->json(["Error" => "Country not found."], 404);
		}

        $country->update($request->all());
        return response()->json($country,200);
    }



	public function countryDelete(Request $request, $id) {
        $country = CountryModel::find($id);

		if (is_null($country)) {
			return response()->json(["Error" => "Country not found."], 404);
		}

        $country->delete();
        return response()->json(null, 204);
    }
}
