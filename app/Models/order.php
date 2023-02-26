<?php

namespace App\Models;
use illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'bill_id',
        'cost',
        'description',
        'state'
    ];

public function bill(){
    return $this->belongsTo(bill::class,'bill_id','bill_id');
}

}
