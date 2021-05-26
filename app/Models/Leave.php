<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class Leave extends Model
{
    use HasFactory,SoftDeletes;;

    protected $table = "leaves";

    protected $fillable = [
        'employee_id',
        'leave_type',
        'start_date',
        'end_date',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at'  
           
    ];
}
