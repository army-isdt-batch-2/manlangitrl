<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class Employee extends Model
{
    use HasFactory,SoftDeletes;;

    protected $table = "employees";

    protected $fillable = [
        'photo',
        'first_name',
        'last_name',
        'middle_name',
        'contact',
        'address',
        'birthday',
        'gender',
        'designation',
        'rate',  
        'department_id',
        'sss_id',
        'ph_id',
        'pi_id',
        'tax_id',
        'created_at',
        'updated_at',
        'deleted_at'  
        
    ];
}