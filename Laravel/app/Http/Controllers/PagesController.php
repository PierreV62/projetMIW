<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PagesController extends Controller
{
    public function test($nom ='toi'){
        return view('test', [
            'name' => $nom,
            'page_title' => "Page de test"
        ]) ;//'Coucou '. $nom;
    }

    public function getUserList(){
        $users = User::paginate(30);
        return view('users_list',['users'=> $users]);

    }
}
