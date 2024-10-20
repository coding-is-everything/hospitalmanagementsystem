<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'role_id',
        'contact_number',
        'email',
        'address'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function shifts()
    {
        return $this->hasMany(Shift::class);
    }
}
