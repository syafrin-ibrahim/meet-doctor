<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use SoftDeletes;
   //declare table
   public $table = "role_user";

   // this field must type date
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   protected $fillable = [
       'user_id',
       'role_id',
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   public function user(){
    // tree parameter -> (path, foreign key, primary key from has many )
    return $this->belongsTo('App\Models\User','user_id', 'id');
   }
   public function role(){
    // tree parameter -> (path, foreign key, primary key from has many )
    return $this->belongsTo('App\ManagementAccess\Role','role_id', 'id');
   }
}
