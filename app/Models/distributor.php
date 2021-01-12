<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    // use HasFactory;
    protected $guarded = [];
    public $timestamps = true;

  

    protected $fillable = ['name',
    // 'owner_name',
    // 'commercial_id',
    // 'tax_id',
    // 'core_business',
    // 'contact_person',
    // 'phone',
    // 'mobile',
    // 'address',
    // 'location',
    // 'lat',
    // 'log',
    // 'notes',
    // 'status_id',
    // 'branches',
    // 'dealt' ,'country_id',
    // 'city_id' 

    'name', 'name_ar', 'owner_name', 'commercial_id', 'tax_id', 'core_business', 'contact_person', 'phone', 'mobile', 'address', 
    'address_ar', 'location', 'fax', 'email', 'country_id', 'city_id', 'notes', 'status_id', 'active', 'branches', 'area', 'year', 'sales', 'territory',
    'user_country', 'user_city'
]; 

public function products()
    {
        return $this->hasMany(Product::class);

    }//end of products

}
