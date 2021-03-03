<?php

namespace App\Http\Controllers\Country;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CountryModel;

class CountryController extends Controller
{
    public function country()
    {
        return response()->json(CountryModel::get(),200);
    }

    public function countryByID($id)
    {
        return response()->json(CountryModel::find($id),200);
    }

    public function countrySave(Request $request)
    {
        $country = CountryModel::create($request->all());
        return response()->json($country,201);
    }

    public function countryUpdate(Request $request, CountryModel $country)
    {
        $country->update($request->all());
        return response()->json($country,200);
    }
    public function countryDelete(Request $request, CountryModel $country)
    {
        $country->delete();
        return response()->json(null,204);
    }
}
