<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
   //declare table
   public $table = "role";

   // this field must type date
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   protected $fillable = [
       'title',
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   public function role_user(){
    // two parameter -> path, foreign key 
    return
     $this->hasMany('App\Models\ManagementAccess\RoleUser','role_id');
   }
   public function permission_role(){
    // two parameter -> path, foreign key 
    return
     $this->hasMany('App\Models\ManagementAccess\PermissionRole','role_id');
   }
}
