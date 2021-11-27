<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareProductImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function softwareProduct(){
        return $this->belongsTo(SoftwareProduct::class);
    }
}
