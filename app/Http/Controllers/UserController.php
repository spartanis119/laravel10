<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = [
            'Joel',
            'Ellie',
            'Tess',
            'Tommy',
            'Bill'
        ];

        $title = 'Listado de nombre';
        // Aca para pasar los datos de este arreglos estatico debemos poner el nombre del key igual a la variables usada para pasar
        //tambien es posible usar el metodo compact 
        return view('user.user',[
            'users' => $users,
            'title' => $title
        ]);
    }

    public function detailUser($id){
        return view('user.user-detail',compact('id'));
    }
}
