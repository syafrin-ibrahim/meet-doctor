<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PermissionRole extends Model
{
   // use HasFactory;
   use SoftDeletes;
   //declare table
   public $table = "permission_role";

   // this field must type date
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   protected $fillable = [
       'permission_id',
       'role_id',
       'created_at',
       'updated_at',
       'deleted_at'
   ];

   public function role(){
    // tree parameter -> (path, foreign key, primary key from has many )
    return $this->belongsTo('App\ManagementAccess\Role','role_id', 'id');
   }
   public function permission(){
    // tree parameter -> (path, foreign key, primary key from has many )
    return $this->belongsTo('App\ManagementAccess\Permission','permission_id', 'id');
   }
}
