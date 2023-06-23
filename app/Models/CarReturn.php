<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarReturn extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'date_of_return',
        'fines',
        'validate_admin'
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
