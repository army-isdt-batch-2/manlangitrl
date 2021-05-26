<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class TimeKeeping extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "timekeeping";

    protected $fillable = [
            'date',
            'created_at',
            'updated_at',
            'deleted_at'

             ];
}
