<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;  
class Deduction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "deductions";

    protected $fillable = [
        'deduction_type',
        'basic_range',
        'employee_share',
        'employer_share',
        'monthly_contribution', 
        'created_at',
        'updated_at',
        'deleted_at'  
    ];
}
