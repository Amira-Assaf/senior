<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistributorProduct extends Model
{
    //

    public $timestamps = false;

    protected $table ="distributorproducts"; 

    public function Product()
    {
        return $this->belongsTo(Product::class);

    }//end fo category

}
