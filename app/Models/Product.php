<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at'];
    public function productImage(){
        return $this->hasMany(ProductImage::class,'product_id' );
    }
    public function productSpecification(){
        return $this->hasMany(ProductSpecification::class);
    }

    public function product_attr(){
        return $this->hasMany(ProductAttribute::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
