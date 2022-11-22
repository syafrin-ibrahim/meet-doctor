<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    public $table = "doctor";

    // this field must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
 
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'password',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}