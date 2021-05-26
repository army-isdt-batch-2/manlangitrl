<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class TimeKeepingRecord extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "timekeeping_records";

    protected $fillable = [
        'employee_id',
        'clockin',
        'clockout',
        'total',
        'timekeeping_id',
        'created_at',
        'updated_at',
        'deleted_at'  
    
    ];
}
