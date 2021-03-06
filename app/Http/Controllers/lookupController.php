<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;

class lookupController extends Controller
{
    //

  public function getCitiesByCountryId($countryId )
    {
        $cities= City::where("country_id",$countryId)->get(); 
         return   response()->json($cities);  
    }
    public function getProductNameByProductId($productId )
    {
        $Products =Product::where('id', $productId) ->get();
         return   response()->json($products);  
    }
}
