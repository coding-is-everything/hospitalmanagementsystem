<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'bed_number',
        'availability_status'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
