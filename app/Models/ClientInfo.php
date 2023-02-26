<?php

namespace App\Models;
use illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'national_id',
        'nationality',
        'phone_number',
        'credit_type',
        'card_number',
        'name_on_card',
        'exp_date'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'client_id', 'id');
    }
}
