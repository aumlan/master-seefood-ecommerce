<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at'];

    public function attributes(){
        return $this->hasMany(ConfigureAttribute::class);
    }

}
