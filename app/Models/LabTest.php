<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_name',
        'description',
        'price'
    ];

    public function testResults()
    {
        return $this->hasMany(TestResult::class);
    }
}
