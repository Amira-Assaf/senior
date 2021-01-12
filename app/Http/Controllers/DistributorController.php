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
use \App\Models\Caption;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caption =caption::where('id', 1)->first();
        $countries=Country::all(); 
        $distributors =distributor::where('active', 1)->where("status_id","3")
        ->orderBy('name', 'desc')
        ->get();
        $Products=Product::all(); 
      
       return view ("user.distributors",
       ["distributors"=>$distributors
       ,"countries"=>$countries,
       "Products"=>$Products,
       "caption"=>$caption
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


        // return  response()-> json($request); 


        // Setup the validator
$rules = array(
    'name' => 'required',
//  'year' => 'required',
//  'product_name' => 'required'
);
$validator = Validator::make($request->all(), $rules);

// Validate the input and return correct response
if ($validator->fails())
{
    return response()-> json(
        array(
        'status' => false,
        'errors' => $validator->getMessageBag()->toArray(),
        "amira"=>"mrmar"

    ), 200); 
}

      $obj=  distributor::create($request->all());

      if($obj)
      {

       $product_ids = explode(',', $request->products);
     
      foreach ($product_ids  as  $product_id ) {
  
        $distributorProduct = new   DistributorProduct(); 
        $distributorProduct->product_id =$product_id; 
        $distributorProduct->distributor_id =$obj->id; 
        $distributorProduct->save();
      }


          return response()->json([
              "msg"=>"Saved",
              "statusCode"=>200,
              'status' => true,
          ]); 
      }
      else{
        return response()->json([
            "msg"=>"لم يتم الحفظ الرجاء المحاولة مجددا    ",
            "statusCode"=>200,
            'status' => false,
        ]); 
      }

     

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
        // get the distributor
        $distributor =distributor::find($id);
        return view("admin.view-distributor")->with("distributor",$distributor);

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
        return view("admin.edit-distributor")->with("distributor",$distributor ,"countries",$countries);
        
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
        //
       $distributor =distributor::find($id);
       $distributor->update($request->all());
       return redirect()->action('adminDistributorController@index');
        // return back();
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
        return back() ->with('success','Deleted');
    }
    
      public function getAllDistributorByFilter(Request $request)
    {

        $filter ="WHERE   1=1 and active= 1 and status_id=3 "; 
      
        if($request->country_id !="all")
        {
            $filter .=" and    country_id  = $request->country_id"; 
        } 
        
        if($request->city_id !="all")
        {
            $filter .=" and    city_id  = $request->city_id"; 
        } 
        
        if($request->productId !="all" )
        {
        //   $filter .=" and  distributorproducts.product_id   = $request->productId  "; 
        } 
     
        $cards = DB::select("Select  distributors.id   as distributorId , 
        distributors.*,products.product_name,products.id  as productId ,products.ar_name
        from distributors 
        right join distributorproducts  on  distributors.id =distributorproducts.distributor_id
        left  JOIN  products    on  distributorproducts.product_id  =products.id  
         ".  $filter  );
        return  response()->json($cards);         


    }
}