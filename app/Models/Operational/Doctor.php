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

    public function specialist(){
        // tree parameter -> (path, foreign key, primary key from has many )
        return $this->belongsTo('App\Models\MasterData\Specialist','specialist_id', 'id');
    }

    public function appointment(){
        // two parameter -> path, foreign key 
        return $this->hasMany('App\Models\Operational\Appointment','doctor_id');
    }
}
