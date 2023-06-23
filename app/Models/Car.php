<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'colour',
        'plat_num',
        'capacity',
        'fuel',
        'price',
        'car_img',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
