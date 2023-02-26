<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;
class reservation extends Model
{
    use HasFactory;
    protected $primaryKey = 'res_id';

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
