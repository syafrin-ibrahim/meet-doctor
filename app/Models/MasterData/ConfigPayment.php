<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
    use SoftDeletes;
    //declare table
    public $table = "config_payment";
 
    // this field must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
 
    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
