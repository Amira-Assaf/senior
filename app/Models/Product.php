<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public function distributor()
    {
        return $this->belongsTo(distributor::class);

    }//end fo category

    public function distributorProducts()
    {
        return $this->hasMany(DistributorProduct::class);

    }//end of products

}
