<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    public $table = "appointment";

    // this field must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
 
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function doctor(){
        // tree parameter -> (path, foreign key, primary key from has many )
        return $this->belongsTo('App\Models\Operational\Doctor','doctor_id', 'id');
    }
    public function consultation(){
        // tree parameter -> (path, foreign key, primary key from has many )
        return $this->belongsTo('App\Models\MasterData\Consultation','consultation_id', 'id');
    }
    public function user(){
        // tree parameter -> (path, foreign key, primary key from has many )
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }

    public function transaction(){
        // two parameter -> path, foreign key 
        return $this->hasOne('App\Models\Operational\Transaction','appointment_id');
    }
}
