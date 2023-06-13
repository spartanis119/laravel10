<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($nombre,$apodo = null)
    {
        if ($apodo) {
            return "Hola compadre {$nombre} tu apodo es {$apodo}";
        }else {
            return "Hola compadre {$nombre} no tienes apodo";
        }
    }
}
