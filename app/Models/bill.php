<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'res_id',
        'state',
        'payment_type',
        'total',
    
    ];

    public function reservation()
    {
        return $this->belongsTo(reservation::class,'res_id','res_id');
    }


    public function order(){

        return $this->HasMany(order::class);
    }
}
