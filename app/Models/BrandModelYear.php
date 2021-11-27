<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandModelYear extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brandModel(){
        return $this->belongsTo(BrandModel::class);
    }
}
