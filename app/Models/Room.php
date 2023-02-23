<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'type',
        'description',
        'bed_number',
        'state',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
