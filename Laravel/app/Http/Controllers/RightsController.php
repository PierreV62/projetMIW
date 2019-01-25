<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\Permission;

class RightsController extends Controller
{
    public function getRole($role_id){

        $role = Role::with('users')->findOrFail($role_id);

        // if(!$series)abort(404);

        $data=[
            'role' => $role,
            'role_id' => $role_id,
            'role_name' => $role->title
        ];

        return view('role', $data);
    }

    public function getRolesList(){
        $roles = Role::paginate(30);
        return view('roles_list',['roles'=> $roles]);

    }

    public function getPermission($permission_id){
        $permission = Permission::with('roles')->findOrFail(permission_id);

        $data=[
            'permission' => $permission,
            'permission_id' => $permission_id,
            'permission_name' => $permission->title
        ];
    }

    public function getPermissionsList(){
        $permissions = permission::paginate(30);
        return view('permissions_list',['permissions'=> $permissions]);
    }


}
