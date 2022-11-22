<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;
   //declare table
   public $table = "consultation";

   // this field must type date
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   protected $fillable = [
       'name',
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   public function appointment(){
    // two parameter -> path, foreign key 
    return $this->hasMany('App\Models\Operational\Appointment','consultation_id');
}
}
