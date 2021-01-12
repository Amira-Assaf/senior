<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\distributor;
use Illuminate\Support\Facades\App;
use \App\Models\Country;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB; 
use \App\Models\DistributorProduct;

class RequestDistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $distributors =distributor::all();
        $distributors =distributor::where('active', 1)->where("status_id","1")->orderBy('name', 'desc') ->get();
        $countries=Country::all(); 
        $Products=Product::all(); 
      
       return view ("admin.request-distributors",
       ["distributors"=>$distributors
       ,"countries"=>$countries,
       "Products"=>$Products
       ]
    ); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $DistributorProduct = DistributorProduct::where('distributor_id', $id) ->get();
        $Products =Product::all();
        // get the distributor
        $distributor =distributor::find($id);
        //  return view("admin.view-distributor")->with("distributor",$distributor);
        return view("admin.request-view-distributor",
         ["distributor"=>$distributor,"Products"=> $Products,"DistributorProduct"=>$DistributorProduct
         ]
      ); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo"edit";
        $distributor =distributor::find($id);
        return view("admin.request-edit-distributor")->with("distributor",$distributor);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request_data = $request;
        $distributor =distributor::find($id);
        $distributor->update($request->all());


        // $permissions = [$request->permissions];
        // foreach ($products as $p) {
        //     // code
        //     $user->products()->sync($p);
        //     }

            session()->flash('success', 'Distributor Updated Succsessfuly');
            return redirect()->action('RequestDistributorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distributor = distributor::find($id);
        $distributor->delete();
        session()->flash('success', 'User Deleted Successfully');
        return back() ->with('success','Deleted');
    }

}