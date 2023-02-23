<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'from',
        'to',
        'state',
        'reservationist',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }

}
