<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use Auth;

// use model here
use App\Models\ManagementAccess\Permission;
use App\Models\ManagementAccess\PermissionRole;
use App\Models\ManagementAccess\Role;
use App\Models\ManagementAccess\RoleUser;


class PermissionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show(Permission $permission){
        $permission = Permission::orderBy('id', 'asc')->get();
        return view('pages.backsite.management-access.permission.index')->compact('permission');
    } 
}
