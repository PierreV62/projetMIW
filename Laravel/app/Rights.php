<?php

namespace App;

class Rights
{

    public static function is($user_id, $role_name)
    {
        foreach (User::find($user_id)->role_name as $role_test) {
            if ($role_test == $role_name) {
                return true;
            }
        }
        return false;
        //$user_id INT, $role_name STRING
        //L'utilisateur $user_id possède t-il le rôle $role_name ?
    }

    public static function can($user_id, $permission_name)
    {
        foreach (Permission::find(Role::find(User::find($user_id)->role_id)->permission_id)->permission_name as $permission_test) {
            if ($permission_test == $permission_name) {
                return true;
            }
        }
        return false;

        //$user_id INT, $permission_name STRING
        //L'utilisateur $user_id possède t-il la permission $permission_name ?
    }

    public static function canAtLeast($user_id, $permissions_names)
    {

        foreach (Permission::find(Role::find(User::find($user_id)->role_id)->permission_id)->permission_name as $permission_name) {
            if (in_array($permission_name, $permissions_names)) {
                return true;
            };
        }
        return false;

        //$user_id INT, $permissions_names ARRAY de STRING
        //L'utilisateur $user_id possède t-il au moins une permission du tableau $permission_name ?
    }

    public static function canAll($user_id, $permissions_names)
    {
        $permissions_user = [];
        foreach (Permission::find(Role::find(User::find($user_id)->role_id)->permission_id)->permission_name as $permission_user) {
            array_push($permissions_user, $permission_user);
        }
        foreach ($permissions_names as $permission_name) {
            if (!(in_array($permission_name, $permissions_user))) {
                return false;
            }
        }
        return true;

        //$user_id INT, $permissions_names ARRAY de STRING
        //L'utilisateur $user_id possède t-il toutes les permissions du tableau $permission_name ?
    }

    public static function authIs($role_name)
    {
        foreach (Auth::user()->role_name as $role_test) {
            if ($role_test == $role_name) {
                return true;
            }
        }
        return false;

    }

    public static function authCan($permission_name)
    {

        foreach (Permission::find(Role::find(Auth::user()->role_id)->permission_id)->permission_name as $permission_test) {
            if ($permission_test == $permission_name) {
                return true;
            }
        }
        return false;

    }


    public static function authCanAtLeast($permissions_names)
    {
        foreach (Permission::find(Role::find(Auth::user()->role_id)->permission_id)->permission_name as $permission_name) {
            if (in_array($permission_name, $permissions_names)) {
                return true;
            };
        }
        return false;

    }

    public static function authCanAll($permissions_names)
    {
        $permissions_user = [];
        foreach (Permission::find(Role::find(Auth::user()->role_id)->permission_id)->permission_name as $permission_user) {
            array_push($permissions_user, $permission_user);
        }
        foreach ($permissions_names as $permission_name) {
            if (!(in_array($permission_name, $permissions_user))) {
                return false;
            }
        }
        return true;
    }
}