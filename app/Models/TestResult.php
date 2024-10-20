<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'lab_test_id',
        'result',
        'test_date',
        'doctor_id'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function labTest()
    {
        return $this->belongsTo(LabTest::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
